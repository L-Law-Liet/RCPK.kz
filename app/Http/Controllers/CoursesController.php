<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCode;
use App\Models\Material;
use App\Services\CourseService;
use App\Services\VideoStream;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CoursesController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->service = new CourseService();
    }
    public function showMaterial($id){
        if (!$this->service->hasAccess($id)){
            return redirect()->route('index');
        }
        $material = Material::where('course_id', $id)->firstOrFail();
        $breadcrumbs = ['Видео'];
        return view('video', compact('material', 'breadcrumbs'));
    }
    public function getVideo() {

        $s3 = new S3Client(
            [
                'version' => 'latest',
                'region'  => env('AWS_DEFAULT_REGION')
            ]
        );
        $s3->registerStreamWrapper();
        return $result = $s3->getObject([
            'Bucket'                     => env('AWS_BUCKET'),
            'Key'                        => 'videos/anti-terror-kaz.mp4',
            'ResponseContentType'        => 'video/mp4',
            'ResponseContentLanguage'    => 'en-US',
            'ResponseCacheControl'       => 'No-cache',
            'ResponseExpires'            => gmdate(DATE_RFC2822, time() + 3600),
        ]);
//        $stream = new VideoStream('s3://{'.env('AWS_BUCKET').'}/{videos/anti-terror-kaz.mp4}');
//        $stream->start();
//        $video = Storage::disk('s3')->get('videos/anti-terror-kaz.mp4');
//        $response = Response::make($video, 200);
//        $response->header('Content-Type', 'video/mp4');

//        return Storage::disk('s3')->readStream('videos/anti-terror-kaz.mp4');
    }

    public function activate(Request $request){
        $course_code = CourseCode::where('code', $request->code)->where('user_id', auth()->id())->where('is_activated', false)->first();
        session()->forget(['course_id', 'course_code']);
        if ($course_code){
            session(['course_id' => $course_code->course_id]);
            session(['course_code' => $course_code->code]);
        }
        return redirect()->route('cabinet');
    }
}
