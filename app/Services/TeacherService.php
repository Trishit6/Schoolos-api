<?php

namespace App\Services;

use App\Contracts\Services\TeacherServiceInterface;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Validation\ValidationException;

class TeacherService implements TeacherServiceInterface
{
    public function getAll(): LengthAwarePaginator
    {
        return Teacher::query()
            ->with('user')
            ->latest()
            ->paginate(10);
    }

    public function getById(int $id): Teacher
    {
        return Teacher::query()
            ->with('user')
            ->findOrFail($id);
    }

    public function create(array $data): Teacher
    {
        $user = User::findOrFail($data['user_id']);

        if ($user->role !== 'teacher') {
            throw ValidationException::withMessages([
                'user_id' => [
                    'Selected user is not a teacher.',
                ],
            ]);
        }

        return Teacher::create($data);
    }

    public function update(
        int $id,
        array $data
    ): Teacher {

        $teacher = Teacher::findOrFail($id);

        if (isset($data['user_id'])) {

            $user = User::findOrFail(
                $data['user_id']
            );

            if ($user->role !== 'teacher') {
                throw ValidationException::withMessages([
                    'user_id' => [
                        'Selected user is not a teacher.',
                    ],
                ]);
            }
        }

        $teacher->update($data);

        return $teacher->fresh();
    }

    public function delete(int $id): bool
    {
        $teacher = Teacher::findOrFail($id);

        return $teacher->delete();
    }
}
