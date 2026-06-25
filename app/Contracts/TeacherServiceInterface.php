<?php

namespace App\Contracts\Services;

use App\Models\Teacher;
use Illuminate\Pagination\LengthAwarePaginator;

interface TeacherServiceInterface
{
    public function getAll(): LengthAwarePaginator;

    public function getById(int $id): Teacher;

    public function create(array $data): Teacher;

    public function update(
        int $id,
        array $data
    ): Teacher;

    public function delete(int $id): bool;
}
