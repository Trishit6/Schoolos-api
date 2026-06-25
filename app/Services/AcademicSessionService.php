<?php

namespace App\Services\Academic;

use App\Contracts\AcademicSessionServiceInterface;
use App\Models\AcademicSession;

class AcademicSessionService implements AcademicSessionServiceInterface
{
    public function getAll()
    {
        return AcademicSession::latest()->get();
    }

    public function find(int $id)
    {
        return AcademicSession::findOrFail($id);
    }

    public function create(array $data)
    {
        $isCurrent = $data['isCurrent'] ?? false;

        if ($isCurrent) {
            AcademicSession::query()->update([
                'is_active' => false,
            ]);
        }

        return AcademicSession::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'full_marks' => $data['full_marks'],
            'pass_marks' => $data['pass_marks'],
            'is_active' => $isCurrent,
        ]);
    }

    public function update(int $id, array $data)
    {
        $session = $this->find($id);

        $isCurrent = $data['isCurrent'] ?? $session->is_active;

        if ($isCurrent) {
            AcademicSession::query()->update([
                'is_active' => false,
            ]);
        }

        $session->update([
            'name' => $data['name'] ?? $session->name,
            'code' => $data['code'] ?? $session->code,
            'full_marks' => $data['full_marks'] ?? $session->full_marks,
            'pass_marks' => $data['pass_marks'] ?? $session->pass_marks,
            'is_active' => $isCurrent,
        ]);

        return $session->fresh();
    }

    public function delete(int $id)
    {
        $session = $this->find($id);

        if ($session->is_active) {
            throw new \Exception('Active session cannot be deleted.');
        }

        return $session->delete();
    }

    public function activate(int $id)
    {
        AcademicSession::query()->update([
            'is_active' => false,
        ]);

        $session = $this->find($id);

        $session->update([
            'is_active' => true,
        ]);

        return $session->fresh();
    }
}
