<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service = new AuthService();
    }

    public function register(UserRequest $request){

        $data = $request->except('_token');
        $pwd = $data['password'];
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $this->service->sendEmail($user->id);
        return $this->authenticate($user->email, $pwd);
    }
    public function login(Request $request){
        $v = Validator::make($request->all(),
            [
            'email' => 'email|required',
            'password' => 'required'
            ]
        );
        if ($v->fails()){
            return redirect()->back()->withErrors('Заполните все поля корректно')->withInput();
        }
        return $this->authenticate($request->email, $request->password);
    }

    public function authenticate($email, $pwd)
    {
        $credentials = ['email' => $email, 'password' => $pwd];
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('cabinet');
        }

        return back()->withErrors('Пользователь не найден')->withInput();
    }
}
