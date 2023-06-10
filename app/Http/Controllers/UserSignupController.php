<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthenticateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class UserSignupController extends Controller
{
    public function __invoke(UserAuthenticateRequest $request): RedirectResponse|Redirector
    {
        $data = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect(url('/'));
        }

        return back()->withErrors([
            'email' => __('user.invalid-credentials')
        ]);
    }
}
