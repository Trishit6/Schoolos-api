<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('student_session');

        return [

            'student_id' => [
                'required',
                'exists:students,id',
            ],

            'academic_session_id' => [
                'required',
                'exists:academic_sessions,id',
            ],

            'academic_class_id' => [
                'required',
                'exists:academic_classes,id',
            ],

            'roll_no' => [
                'required',
                'integer',
                'min:1',

                Rule::unique(
                    'student_sessions',
                    'roll_no'
                )
                    ->where(
                        fn ($query) => $query
                            ->where(
                                'academic_session_id',
                                $this->academic_session_id
                            )
                            ->where(
                                'academic_class_id',
                                $this->academic_class_id
                            )
                    )
                    ->ignore($id),
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
