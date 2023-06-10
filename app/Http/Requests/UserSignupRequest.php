<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserSignupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'regex:/^[a-zA-ZÀ-ú\s\']+$/',
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->mixedCase()
                    ->uncompromised()
            ],
            'password-confirmation' => [
                'required',
                'same:password',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => __('user.field.email'),
            'password' => __('user.field.password'),
            'password-confirmation' => __('user.field.password-confirmation'),
        ];
    }
}
