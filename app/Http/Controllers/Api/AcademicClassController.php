<?php

namespace App\Http\Controllers\Api;

use App\Contracts\AcademicClassServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicClassRequest;
use App\Http\Resources\AcademicClassResource;
use Illuminate\Http\JsonResponse;

class AcademicClassController extends Controller
{
    public function __construct(
        private readonly AcademicClassServiceInterface $academicClassService
    ) {}

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => AcademicClassResource::collection(
                $this->academicClassService->getAll()
            ),
        ]);
    }

    public function store(
        AcademicClassRequest $request
    ): JsonResponse {
        $academicClass = $this->academicClassService->create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Academic class created successfully.',
            'data' => new AcademicClassResource(
                $academicClass
            ),
        ], 201);
    }

    public function show(
        int $id
    ): JsonResponse {
        return response()->json([
            'success' => true,
            'data' => new AcademicClassResource(
                $this->academicClassService->getById($id)
            ),
        ]);
    }

    public function update(
        AcademicClassRequest $request,
        int $id
    ): JsonResponse {
        $academicClass = $this->academicClassService->update(
            $id,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Academic class updated successfully.',
            'data' => new AcademicClassResource(
                $academicClass
            ),
        ]);
    }

    public function destroy(
        int $id
    ): JsonResponse {
        $this->academicClassService->delete(
            $id
        );

        return response()->json([
            'success' => true,
            'message' => 'Academic class deleted successfully.',
        ]);
    }
}
