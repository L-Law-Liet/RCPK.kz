<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCode;
use App\Models\Option;
use App\Models\Test;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TestsController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = new CourseService();
    }

    public function showTest($id){
        if (!$this->service->hasAccess($id)){
            return redirect()->route('index');
        }
        $data['test'] = Test::where('course_id', $id)->firstOrFail();
        $data['questions'] = $data['test']->questions->shuffle()->take(15);
        $bread = 'Тест';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Test';
                break;
            case 'kz':
                $bread = 'Тест';
                break;
        }
        $data['breadcrumbs'] = [$bread];
//        $course_code = CourseCode::where('code', session()->get('course_code'))->where('user_id', auth()->id())->where('course_id', $id)->where('is_activated', false)->firstOrFail();
//        $course_code->is_activated = true;
//        $course_code->save();
//        $data['course_code'] = $course_code;
        return view('test', $data);
    }
    public function result(Test $test, Request $request){
        $data = $request->except('_token');
        $total = sizeof($data);
        $score = Option::whereIn('id', array_values($data))->where('isTrue', true)->count();
        $res['test'] = $test->title;
        $res['course'] = $test->course;

        $to_name = session()->get('name')??'';
        $to_email = session()->get('email')??'';
        Mail::send('mails.result', $res, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Результаты теста с '.env('APP_NAME'));
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        $result = "$score из $total";
//        $courseCode->result = "$score из $total";
//        $courseCode->save();
        $res['name'] = session()->get('name')??'';
        $res['email'] = session()->get('email')??'';
        $res['course'] = $test->course;
        $res['result'] = $result;
        $to_name = env('APP_NAME');
        $to_email = env('MAIL_FROM_ADDRESS');
        Mail::send('mails.result-admin', $res, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Был пройден тест с '.env('APP_NAME'));
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        return redirect()->route('success');
    }
    public function showSuccess(){
        return view('success');
    }
}
