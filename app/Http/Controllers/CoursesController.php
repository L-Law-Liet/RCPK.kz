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
    public function activate(Request $request){
//        $course_code = CourseCode::where('code', $request->code)->where('user_id', auth()->id())->where('is_activated', false)->first();
        $course_code = Course::where('body', $request->code)->first();
        session()->forget(['course_id', 'course_code']);
        if ($course_code){
            session(['course_id' => $course_code->id]);
            session(['course_code' => $request->code]);
        }
        return redirect()->route('cabinet');
    }
}
