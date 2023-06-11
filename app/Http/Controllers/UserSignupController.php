<?php

namespace App\Http\Controllers;

use App\Http\Enums\UserType;
use App\Http\Requests\UserSignupRequest;
use App\Mail\UserEmailConfirmation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserSignupController extends Controller
{
    public function __invoke(UserSignupRequest $request): RedirectResponse|Redirector
    {
        $data = $request->validated();

        $data['type'] = UserType::Common->value;
        $data['confirmation_token'] = Str::uuid();

        $user = User::create($data);

        Mail::to($user->email)
            ->send(new UserEmailConfirmation($user));

        return redirect('/');
    }
}
