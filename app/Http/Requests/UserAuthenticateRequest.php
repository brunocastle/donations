<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAuthenticateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required'
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => __('user.field.email'),
            'password' => __('user.field.password'),
        ];
    }
}
