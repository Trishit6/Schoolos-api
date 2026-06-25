<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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

            'user_id' => [
                'required',
                'exists:users,id',

                function (
                    string $attribute,
                    mixed $value,
                    \Closure $fail
                ) {

                    $user = User::find(
                        $value
                    );

                    if (
                        ! $user ||
                        $user->role !== 'student'
                    ) {
                        $fail(
                            'Selected user is not a student.'
                        );
                    }
                },
            ],

            'admission_no' => [

                'required',

                Rule::unique(
                    'students',
                    'admission_no'
                )->ignore($id),
            ],

            'admission_date' => [
                'required',
                'date',
            ],

            'status' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
