<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $teacherId = $this->route('teacher');

        return [

            'user_id' => [
                'required',
                'exists:users,id',
                Rule::unique('teachers', 'user_id')
                    ->ignore($teacherId),
            ],

            'employee_id' => [
                'required',
                'string',
                'max:100',
                Rule::unique('teachers', 'employee_id')
                    ->ignore($teacherId),
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
