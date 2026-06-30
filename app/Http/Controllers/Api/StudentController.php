<?php

namespace App\Http\Controllers\Api;

use App\Contracts\StudentServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use Illuminate\Http\JsonResponse;

use App\Models\User;
use App\Models\StudentSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class StudentController extends Controller
{
    public function __construct(
        private readonly StudentServiceInterface $studentService
    ) {}

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => StudentResource::collection(
                $this->studentService->getAll()
            ),
        ]);
    }

    public function store(
        StudentRequest $request
    ): JsonResponse {
        $student = $this->studentService->create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Student created successfully.',
            'data' => new StudentResource(
                $student
            ),
        ], 201);
    }

    public function show(
        int $id
    ): JsonResponse {
        return response()->json([
            'success' => true,
            'data' => new StudentResource(
                $this->studentService->getById($id)
            ),
        ]);
    }

    public function update(
        StudentRequest $request,
        int $id
    ): JsonResponse {
        $student = $this->studentService->update(
            $id,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Student updated successfully.',
            'data' => new StudentResource(
                $student
            ),
        ]);
    }

    public function destroy(
        int $id
    ): JsonResponse {
        $this->studentService->delete(
            $id
        );

        return response()->json([
            'success' => true,
            'message' => 'Student deleted successfully.',
        ]);
    }
}
