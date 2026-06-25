<?php

namespace App\Services;

use App\Contracts\StudentServiceInterface;
use App\Models\Student;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Validation\ValidationException;

class StudentService implements StudentServiceInterface
{
    public function getAll(): LengthAwarePaginator
    {
        $data = Student::query()
            ->with([

                'studentSessions.academicSession',
                'studentSessions.academicClass',
            ])
            ->latest()
            ->paginate(20);
        // dd($data);

        return $data;

    }

    public function getById(int $id): Student
    {
        return Student::query()
            ->with([
                'user',
                'studentSessions.academicSession',
                'studentSessions.academicClass',
            ])
            ->findOrFail($id);
    }

    public function create(array $data): Student
    {
        $user = User::findOrFail(
            $data['user_id']
        );

        if ($user->role !== 'student') {
            throw ValidationException::withMessages([
                'user_id' => [
                    'Selected user is not a student.',
                ],
            ]);
        }

        return Student::create($data);
    }

    public function update(
        int $id,
        array $data
    ): Student {
        $student = Student::findOrFail($id);

        if (isset($data['user_id'])) {

            $user = User::findOrFail(
                $data['user_id']
            );

            if ($user->role !== 'student') {
                throw ValidationException::withMessages([
                    'user_id' => [
                        'Selected user is not a student.',
                    ],
                ]);
            }
        }

        $student->update($data);

        return $student->fresh()->load([
            'user',
            'studentSessions.academicSession',
            'studentSessions.academicClass',
        ]);
    }

    public function delete(int $id): bool
    {
        return Student::findOrFail($id)
            ->delete();
    }
}
