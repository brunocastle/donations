<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class UserLogoutController extends Controller
{
    public function __invoke(): RedirectResponse|Redirector
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
