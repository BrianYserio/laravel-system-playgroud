<?php

namespace App\Http\Controllers;

use App\Http\Action\AuthUserAction;
use App\Http\Requests\AuthUserRequest;

class AuthUserController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }

    public function store (
        AuthUserRequest $request,
        AuthUserAction $action
    )  {

        $validated = $request->validated();

        if ($action->execute($validated)) {
            return redirect()->intended('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'invalid credentials.',
            'password' => 'incorrect password.'
        ]);
    }
}
