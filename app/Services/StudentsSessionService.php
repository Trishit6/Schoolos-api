<?php

namespace App\Services;

use App\Contracts\StudentSessionServiceInterface;
use App\Models\StudentSession;

class StudentSessionService implements StudentSessionServiceInterface
{
    public function getAll()
    {
        return StudentSession::with([
            'student.user',
            'academicSession',
            'academicClass',
        ])->latest()->get();
    }

    public function getById(
        int $id
    ) {
        return StudentSession::with([
            'student.user',
            'academicSession',
            'academicClass',
        ])->findOrFail($id);
    }

    public function create(
        array $data
    ) {
        return StudentSession::create(
            $data
        );
    }

    public function update(
        int $id,
        array $data
    ) {
        $studentSession = $this->getById($id);

        $studentSession->update(
            $data
        );

        return $studentSession->refresh();
    }

    public function delete(
        int $id
    ) {
        return $this->getById($id)
            ->delete();
    }
}
