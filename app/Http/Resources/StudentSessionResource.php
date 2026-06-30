<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentSessionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'studentId' => $this->student_id,

            'academicSessionId' => $this->academic_session_id,

            'academicClassId' => $this->academic_class_id,

            'rollNo' => $this->roll_no,

            'status' => $this->status,

            'student' => new StudentResource(
                $this->whenLoaded('student')
            ),

            'academicSession' => [
                'id' => $this->academicSession?->id,
                'name' => $this->academicSession?->name,
            ],

            'academicClass' => [
                'id' => $this->academicClass?->id,
                'name' => $this->academicClass?->name,
                'code' => $this->academicClass?->code,

                'academicStandard' => [
                    'id' => $this->academicClass?->academicStandard?->id,
                    'name' => $this->academicClass?->academicStandard?->name,
                ],
            ],

            'createdAt' => $this->created_at,

            'updatedAt' => $this->updated_at,
        ];
    }
}
