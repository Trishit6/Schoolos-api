<?php

namespace App\Services;

use App\Contracts\StudentSessionServiceInterface;
use App\Models\AcademicClass;
use App\Models\AcademicSession;
use App\Models\Student;
use App\Models\StudentSession;

class StudentSessionService implements StudentSessionServiceInterface
{
    public function getAll()
    {
        return StudentSession::with([
            'student',
            'academicSession',
            'academicClass.academicStandard',
        ])
            ->latest()
            ->get();
    }

    public function getById(int $id)
    {
        return StudentSession::with([
            'student',
            'academicSession',
            'academicClass.academicStandard',
        ])->findOrFail($id);
    }

    public function create(array $data)
    {
        Student::findOrFail($data['student_id']);
        AcademicSession::findOrFail($data['academic_session_id']);
        AcademicClass::findOrFail($data['academic_class_id']);

        $studentSession = StudentSession::create($data);

        return $studentSession->load([
            'student',
            'academicSession',
            'academicClass.academicStandard',
        ]);
    }

    public function update(int $id, array $data)
    {
        $studentSession = $this->getById($id);

        if (isset($data['student_id'])) {
            Student::findOrFail($data['student_id']);
        }

        if (isset($data['academic_session_id'])) {
            AcademicSession::findOrFail($data['academic_session_id']);
        }

        if (isset($data['academic_class_id'])) {
            AcademicClass::findOrFail($data['academic_class_id']);
        }

        $studentSession->update($data);

        return $studentSession->fresh()->load([
            'student',
            'academicSession',
            'academicClass.academicStandard',
        ]);
    }

    public function delete(int $id)
    {
        $studentSession = $this->getById($id);

        return $studentSession->delete();
    }
}
