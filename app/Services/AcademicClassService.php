<?php

namespace App\Services;

use App\Contracts\AcademicClassServiceInterface;
use App\Models\AcademicClass;

class AcademicClassService implements AcademicClassServiceInterface
{
    public function getAll()
    {
        return AcademicClass::with('academicStandard')
            ->latest()
            ->get();
    }

    public function getById(int $id)
    {
        return AcademicClass::with('academicStandard')
            ->findOrFail($id);
    }

    public function create(array $data)
    {
        return AcademicClass::create($data)
            ->load('academicStandard');
    }

    public function update(int $id, array $data)
    {
        $academicClass = AcademicClass::findOrFail($id);

        $academicClass->update($data);

        return $academicClass->refresh()
            ->load('academicStandard');
    }

    public function delete(int $id)
    {
        $academicClass = AcademicClass::findOrFail($id);

        return $academicClass->delete();
    }
}
