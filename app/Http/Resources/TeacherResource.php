<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    public function toArray(
        Request $request
    ): array {

        return [

            'id' => $this->id,

            'employee_id' => $this->employee_id,

            'designation' => $this->designation,

            'joining_date' => $this->joining_date,

            'salary' => $this->salary,

            'status' => $this->status,

            'user' => [
                'id' => $this->user?->id,
                'name' => $this->user?->name,
                'email' => $this->user?->email,
                'phone' => $this->user?->phone,
            ],
        ];
    }
}
