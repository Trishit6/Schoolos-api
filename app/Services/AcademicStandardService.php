<?php

namespace App\Services;

use App\Contracts\AcademicStandardServiceInterface;
use App\Models\AcademicStandard;

class AcademicStandardService implements AcademicStandardServiceInterface
{
    public function getAll()
    {
        return AcademicStandard::latest()
            ->get();
    }

    public function getById(
        int $id
    ) {
        return AcademicStandard::findOrFail(
            $id
        );
    }

    public function create(
        array $data
    ) {
        return AcademicStandard::create(
            $data
        );
    }

    public function update(
        int $id,
        array $data
    ) {
        $academicStandard = $this->getById(
            $id
        );

        $academicStandard->update(
            $data
        );

        return $academicStandard->refresh();
    }

    public function delete(
        int $id
    ) {
        $academicStandard = $this->getById(
            $id
        );

        return $academicStandard->delete();
    }
}
