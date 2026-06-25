<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'role' => [
                'nullable',
                Rule::in([
                    'student',
                    'parent',
                    'applicant',
                    'teacher',
                    'admin',
                ]),
            ],

            'gender' => [
                'nullable',
                Rule::in([
                    'male',
                    'female',
                    'other',
                ]),
            ],

            'date_of_birth' => [
                'nullable',
                'date',
            ],

            'password' => [
                'required',
                'confirmed',
                'min:8',
            ],

        ];
    }
}
