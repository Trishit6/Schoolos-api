<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route(
            'student'
        );

        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'dateOfBirth' => [
                'required',
                'date',
            ],

            'guardianName' => [
                'required',
                'string',
                'max:255',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
