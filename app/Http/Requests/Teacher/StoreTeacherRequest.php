<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'user_id' => [
                'required',
                'exists:users,id',
                'unique:teachers,user_id',
            ],

            'employee_id' => [
                'required',
                'string',
                'max:100',
                'unique:teachers,employee_id',
            ],

            'designation' => [
                'required',
                'string',
                'max:255',
            ],

            'joining_date' => [
                'required',
                'date',
            ],

            'salary' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
