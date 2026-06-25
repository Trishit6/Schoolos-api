<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcademicStandardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route(
            'academic_standard'
        );

        return [

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'code' => [
                'required',
                'string',
                'max:50',

                Rule::unique(
                    'academic_standards',
                    'code'
                )->ignore($id),
            ],

            'status' => [
                'sometimes',
                'boolean',
            ],
        ];
    }
}
