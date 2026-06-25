<?php

namespace App\Http\Controllers\Api;

use App\Contracts\StudentSessionServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentSessionRequest;
use App\Http\Resources\StudentSessionResource;
use Illuminate\Http\JsonResponse;

class StudentSessionController extends Controller
{
    public function __construct(
        private readonly StudentSessionServiceInterface $studentSessionService
    ) {}

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => StudentSessionResource::collection(
                $this->studentSessionService->getAll()
            ),
        ]);
    }

    public function store(
        StudentSessionRequest $request
    ): JsonResponse {
        $studentSession =
            $this->studentSessionService->create(
                $request->validated()
            );

        return response()->json([
            'success' => true,
            'message' => 'Student session created successfully.',
            'data' => new StudentSessionResource(
                $studentSession
            ),
        ], 201);
    }

    public function show(
        int $id
    ): JsonResponse {
        return response()->json([
            'success' => true,
            'data' => new StudentSessionResource(
                $this->studentSessionService
                    ->getById($id)
            ),
        ]);
    }

    public function update(
        StudentSessionRequest $request,
        int $id
    ): JsonResponse {
        $studentSession =
            $this->studentSessionService
                ->update(
                    $id,
                    $request->validated()
                );

        return response()->json([
            'success' => true,
            'message' => 'Student session updated successfully.',
            'data' => new StudentSessionResource(
                $studentSession
            ),
        ]);
    }

    public function destroy(
        int $id
    ): JsonResponse {
        $this->studentSessionService
            ->delete($id);

        return response()->json([
            'success' => true,
            'message' => 'Student session deleted successfully.',
        ]);
    }
}
