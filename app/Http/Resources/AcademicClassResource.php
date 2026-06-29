<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcademicClassResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'name' => $this->name,

            'code' => $this->code,

            'capacity' => $this->capacity,

            'status' => $this->status,

            'academicStandardId' => $this->academic_standard_id,

            'academicStandard' => [
                'id' => $this->academicStandard?->id,
                'name' => $this->academicStandard?->name,
            ],

            'createdAt' => $this->created_at,

            'updatedAt' => $this->updated_at,
        ];
    }
}
