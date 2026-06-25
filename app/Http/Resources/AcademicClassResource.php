<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcademicClassResource extends JsonResource
{
    public function toArray(
        Request $request
    ): array {
        return [

            'id' => $this->id,

            'academicSessionId' => $this->academic_session_id,

            'academicStandardId' => $this->academic_standard_id,

            'name' => $this->name,

            'capacity' => $this->capacity,

            'status' => $this->status,

            'academicSession' => [
                'id' => $this->academicSession?->id,
                'name' => $this->academicSession?->name,
            ],

            'academicStandard' => [
                'id' => $this->academicStandard?->id,
                'name' => $this->academicStandard?->name,
            ],

            'createdAt' => $this->created_at,

            'updatedAt' => $this->updated_at,
        ];
    }
}
