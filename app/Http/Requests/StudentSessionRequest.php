<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'academic_session_id' => ['required', 'integer', 'exists:academic_sessions,id'],
            'academic_class_id' => ['required', 'integer', 'exists:academic_classes,id'],
            'roll_no' => ['required', 'integer', 'min:1'],
            'status' => ['required', 'boolean'],
        ];
    }
}
