<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class GuestsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function showLogin(){
        $breadcrumbs = ['Вход'];
        return view('auth.login', compact('breadcrumbs'));
    }
    public function showRegister(){
        $breadcrumbs = ['Регистрация'];
        return view('auth.reg', compact('breadcrumbs'));
    }
    public function showReset(){
        return view('auth.reset');
    }
    public function reset(Request $request){
        $v = Validator::make(['email' => $request->email],
            ['email' => 'required|exists:users,email'],
            [
                'email.required' => 'Заполните поле',
                'email.exists' => 'Пользователь с такой электронной почтой не найден',
            ]);
        if ($v->fails()){
            return back()->withErrors($v->errors());
        }
        $user = User::where('email', $request->email)->firstOrFail();

            $to_name = $user->fullname;
            $to_email = $user->email;
            $hash = encrypt($to_email);
            Mail::send('mails.reset', ['hash' => $hash, 'user' => $user], function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)->subject('Восстановление пароля с сайта '.env('APP_NAME'));
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });
            return redirect()->back()->with('success', 'На указанную электронную почту было отправлено письмо. Перейдите по ссылке, указанный в письме.');
    }
    public function showChangePassword($id, $hash){
        $user = User::find($id);
        if ($user->email == decrypt($hash)){
            return view('auth.change', compact('user'));
        }
        return redirect()->route('index');
    }
    public function changePassword(User $user, Request $request){
        $data = $request->except('_token');
        $v = Validator::make($data,
            ['password' => 'required|max:191|min:6|confirmed']);
        if ($v->fails()){
            return back();
        }
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }
}
