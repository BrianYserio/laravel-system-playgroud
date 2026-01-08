<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Action\CreateUserAction;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('Auth.register');
    }

    public function store (
        Request $request,
        CreateUserAction $action
    ):RedirectResponse {

        $action->execute($request);

        return redirect()->route('login.create');
    }
}
