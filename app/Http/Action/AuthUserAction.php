<?php

namespace App\Http\Action;
use Illuminate\Support\Facades\Auth;

class AuthUserAction
{
    public function execute(array $credentials)
    {
        if(Auth::attempt($credentials))
        {
            session()->regenerate();
            return true;
        }

        return false;
    }
}
