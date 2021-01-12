<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Auth\Events\Registered;

class AuthService
{
    public function sendEmail($id){
        event(new Registered(User::find($id)));
    }
}
