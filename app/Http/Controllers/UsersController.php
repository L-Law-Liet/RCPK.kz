<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        $bread = 'Личный кабинет';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Cabinet';
                break;
            case 'kz':
                $bread = 'Жеке бөлме';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('cabinet', $data);
    }
}
