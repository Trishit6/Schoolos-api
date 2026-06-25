<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray(
        Request $request
    ): array {
        return [

            'id' => $this->id,

            'userId' => $this->user_id,

            'admissionNo' => $this->admission_no,

            'admissionDate' => $this->admission_date,

            'status' => $this->status,

            'user' => [

                'id' => $this->user?->id,

                'name' => $this->user?->name,

                'email' => $this->user?->email,

                'role' => $this->user?->role,
            ],

            'createdAt' => $this->created_at,

            'updatedAt' => $this->updated_at,
        ];
    }
}
