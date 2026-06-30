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

            'name' => $this->name,

            'dateOfBirth' => $this->dateOfBirth,

            'guardianName' => $this->guardianName,

            'status' => $this->status,

            'createdAt' => $this->created_at,

            'updatedAt' => $this->updated_at,
        ];
    }
}
