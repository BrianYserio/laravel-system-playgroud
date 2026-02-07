<?php

namespace App\Http\Controllers;

use App\Http\Action\AuthUserAction;
use Illuminate\Http\RedirectResponse;
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
    ): RedirectResponse {

        $validated = $request->validated();

        if ($action->execute($validated)) {
            return redirect()->intended(
                    auth()->user()->role === 'user'
                    ? route('admin.dashboard')
                    : route('dashboard')
            );

        }

        return back()->withErrors([
            'email' => 'invalid credentials.',
            'password' => 'incorrect password.'
        ]);
    }
}
