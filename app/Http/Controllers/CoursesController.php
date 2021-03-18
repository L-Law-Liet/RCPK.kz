<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseActivateRequest;
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
    public function activate(CourseActivateRequest $request){
        $course = Course::where('body', $request->code)->firstOrFail();
        session([
            'name' => $request->name,
            'email' => $request->email,
            'code' => $request->code,
            'course_id' => $course->id,
            'lang' => $request->lang,
        ]);
        return redirect()->route('video', [$course->id]);
    }
}
