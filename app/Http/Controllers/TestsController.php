<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCode;
use App\Models\Option;
use App\Models\Test;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TestsController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->service = new CourseService();
    }

    public function showTest($id){
        if (!$this->service->hasAccess($id)){
            return redirect()->route('index');
        }
        $data['test'] = Test::where('course_id', $id)->firstOrFail();
        $data['questions'] = $data['test']->questions->shuffle()->take(15);
        $data['breadcrumbs'] = ['Тест'];
        $course_code = CourseCode::where('code', session()->get('course_code'))->where('user_id', auth()->id())->where('course_id', $id)->where('is_activated', false)->firstOrFail();
        $course_code->is_activated = true;
        $course_code->save();
        $data['course_code'] = $course_code;
        session()->forget(['course_id', 'course_code']);
        return view('test', $data);
    }
    public function result(Test $test, CourseCode $courseCode, Request $request){
        $data = $request->except('_token');
        $total = sizeof($data);
        $score = Option::whereIn('id', array_values($data))->where('isTrue', true)->count();
        $res['test'] = $test->title;
        $res['course'] = $test->course;
        $user = Auth::user();
        if (!$user){
            return back();
        }
        $to_name = $user->fullname;
        $to_email = $user->email;
        Mail::send('mails.result', $res, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Результаты теста с '.env('APP_NAME'));
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        $courseCode->result = "$score из $total";
        $courseCode->save();
        return redirect()->route('success');
    }
    public function showSuccess(){
        return view('success');
    }
}
