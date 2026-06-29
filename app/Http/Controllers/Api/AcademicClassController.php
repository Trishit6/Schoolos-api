<?php

namespace App\Http\Controllers\Api;

use App\Contracts\AcademicClassServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicClassRequest;
use App\Http\Resources\AcademicClassResource;

class AcademicClassController extends Controller
{
    public function __construct(
        protected AcademicClassServiceInterface $academicClassService
    ) {}

    public function index()
    {
        return AcademicClassResource::collection(
            $this->academicClassService->getAll()
        );
    }

    public function store(AcademicClassRequest $request)
    {
        $academicClass = $this->academicClassService
            ->create($request->validated());

        return new AcademicClassResource($academicClass);
    }

    public function show(int $academic_class)
    {
        return new AcademicClassResource(
            $this->academicClassService->getById($academic_class)
        );
    }

    public function update(
        AcademicClassRequest $request,
        int $academic_class
    ) {
        $academicClass = $this->academicClassService
            ->update(
                $academic_class,
                $request->validated()
            );

        return new AcademicClassResource($academicClass);
    }

    public function destroy(int $academic_class)
    {
        $this->academicClassService
            ->delete($academic_class);

        return response()->json([
            'message' => 'Academic Class deleted successfully.',
        ]);
    }
}
