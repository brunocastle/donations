<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserEmailConfirmationController extends Controller
{
    public function __invoke($hash)
    {
        $user = User::where('confirmation_token', $hash)
            ->firstOrFail();

        $user->confirmation_token = null;
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);

        return redirect(url('/'));
    }
}
