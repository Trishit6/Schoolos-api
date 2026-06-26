<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcademicSessionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $sessionId = $this->route('academic_session')
            ?? $this->route('id');

        return [

            'name' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'academic_sessions',
                    'name'
                )->ignore($sessionId),
            ],

            'start_date' => [
                'required',
                'date',
            ],

            'end_date' => [
                'required',
                'date',
                'after:start_date',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Session name is required.',

            'name.unique' => 'Session name already exists.',

            'start_date.required' => 'Start date is required.',

            'end_date.required' => 'End date is required.',

            'end_date.after' => 'End date must be after start date.',
        ];
    }
}
