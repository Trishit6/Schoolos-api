<?php

namespace App\Http\Controllers\Api;

use App\Contracts\AcademicStandardServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicStandardRequest;
use App\Http\Resources\AcademicStandardResource;
use Illuminate\Http\JsonResponse;

class AcademicStandardController extends Controller
{
    public function __construct(
        private readonly AcademicStandardServiceInterface $academicStandardService
    ) {}

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => AcademicStandardResource::collection(
                $this->academicStandardService->getAll()
            ),
        ]);
    }

    public function store(
        AcademicStandardRequest $request
    ): JsonResponse {
        $academicStandard = $this->academicStandardService->create(
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Academic standard created successfully.',
            'data' => new AcademicStandardResource(
                $academicStandard
            ),
        ], 201);
    }

    public function show(
        int $id
    ): JsonResponse {
        return response()->json([
            'success' => true,
            'data' => new AcademicStandardResource(
                $this->academicStandardService->getById($id)
            ),
        ]);
    }

    public function update(
        AcademicStandardRequest $request,
        int $id
    ): JsonResponse {
        $academicStandard = $this->academicStandardService->update(
            $id,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Academic standard updated successfully.',
            'data' => new AcademicStandardResource(
                $academicStandard
            ),
        ]);
    }

    public function destroy(
        int $id
    ): JsonResponse {
        $this->academicStandardService->delete($id);

        return response()->json([
            'success' => true,
            'message' => 'Academic standard deleted successfully.',
        ]);
    }
}
