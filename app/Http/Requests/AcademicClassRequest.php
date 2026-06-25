<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicClassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route(
            'academic_class'
        );

        return [

            'academic_session_id' => [
                'required',
                'exists:academic_sessions,id',
            ],

            'academic_standard_id' => [
                'required',
                'exists:academic_standards,id',
            ],

            'name' => [
                'required',
                'string',
                'max:50',
            ],

            'capacity' => [
                'required',
                'integer',
                'min:1',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
