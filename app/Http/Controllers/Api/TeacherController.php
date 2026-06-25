<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Services\TeacherServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Http\Resources\TeacherResource;
use Illuminate\Http\JsonResponse;

class TeacherController extends Controller
{
    public function __construct(
        private readonly TeacherServiceInterface $teacherService
    ) {}

    /**
     * Display all teachers
     */
    public function index()
    {
        $teachers = $this->teacherService->getAll();

        return TeacherResource::collection(
            $teachers
        );
    }

    /**
     * Store teacher
     */
    public function store(
        StoreTeacherRequest $request
    ): TeacherResource {

        $teacher = $this->teacherService->create(
            $request->validated()
        );

        return new TeacherResource(
            $teacher
        );
    }

    /**
     * Show teacher
     */
    public function show(
        int $id
    ): TeacherResource {

        $teacher = $this->teacherService->getById(
            $id
        );

        return new TeacherResource(
            $teacher
        );
    }

    /**
     * Update teacher
     */
    public function update(
        UpdateTeacherRequest $request,
        int $id
    ): TeacherResource {

        $teacher = $this->teacherService->update(
            $id,
            $request->validated()
        );

        return new TeacherResource(
            $teacher
        );
    }

    /**
     * Delete teacher
     */
    public function destroy(
        int $id
    ): JsonResponse {

        $this->teacherService->delete($id);

        return response()->json([
            'success' => true,
            'message' => 'Teacher deleted successfully.',
        ]);
    }
}
