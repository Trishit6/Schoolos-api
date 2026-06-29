<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcademicClassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $academicClass = $this->route('academic_class');

        return [

            'academic_standard_id' => [
                'required',
                'exists:academic_standards,id',
            ],

            'name' => [
                'required',
                'string',
                'max:100',

                Rule::unique('academic_classes')
                    ->where(fn ($query) => $query->where(
                        'academic_standard_id',
                        $this->academic_standard_id
                    ))
                    ->ignore($academicClass),
            ],

            'code' => [
                'required',
                'string',
                'max:20',
                Rule::unique('academic_classes')
                    ->ignore($academicClass),
            ],

            'capacity' => [
                'required',
                'integer',
                'min:1',
            ],

            'status' => [
                'required',
                'boolean',
            ],
        ];
    }
}
