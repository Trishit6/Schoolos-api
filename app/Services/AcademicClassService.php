<?php

namespace App\Services;

use App\Contracts\AcademicClassServiceInterface;
use App\Models\AcademicClass;

class AcademicClassService implements AcademicClassServiceInterface
{
    public function getAll()
    {
        return AcademicClass::with([
            'academicSession',
            'academicStandard',
        ])->latest()->get();
    }

    public function getById(
        int $id
    ) {
        return AcademicClass::with([
            'academicSession',
            'academicStandard',
        ])->findOrFail($id);
    }

    public function create(
        array $data
    ) {
        return AcademicClass::create(
            $data
        );
    }

    public function update(
        int $id,
        array $data
    ) {
        $academicClass = $this->getById(
            $id
        );

        $academicClass->update(
            $data
        );

        return $academicClass->refresh();
    }

    public function delete(
        int $id
    ) {
        return $this->getById($id)
            ->delete();
    }
}
