<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthenticateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class UserAuthenticateController extends Controller
{
    public function __invoke(UserAuthenticateRequest $request): RedirectResponse|Redirector
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect(url('/'));
        }

        return back()->withErrors([
            'email' => __('user.invalid-credentials')
        ]);
    }
}
