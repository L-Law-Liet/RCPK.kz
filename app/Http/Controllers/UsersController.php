<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function showCabinet(){
//        dd(session()->all());
        $data['courses'] = Course::all();
        $data['breadcrumbs'] = ['Личный кабинет'];
        return view('cabinet', $data);
    }
}
