<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicSessionRequest;
use App\Http\Resources\AcademicSessionResource;
use App\Models\AcademicSession;
use Illuminate\Http\JsonResponse;

class AcademicSessionController extends Controller
{
    public function index()
    {
        return AcademicSessionResource::collection(
            AcademicSession::latest()->get()
        );
    }

    public function store(
        AcademicSessionRequest $request
    ): JsonResponse {

        if ($request->boolean('is_active')) {

            AcademicSession::query()
                ->update([
                    'is_active' => false,
                ]);
        }

        $session = AcademicSession::create(
            $request->validated()
        );

        return response()->json([
            'message' => 'Academic Session Created Successfully',
            'data' => new AcademicSessionResource($session),
        ], 201);
    }

    public function show(int $id)
    {
        $session = AcademicSession::findOrFail($id);

        return new AcademicSessionResource(
            $session
        );
    }

    public function update(
        AcademicSessionRequest $request,
        int $id
    ): JsonResponse {

        $session = AcademicSession::findOrFail(
            $id
        );

        if ($request->boolean('is_active')) {

            AcademicSession::query()
                ->update([
                    'is_active' => false,
                ]);
        }

        $session->update(
            $request->validated()
        );

        return response()->json([
            'message' => 'Academic Session Updated Successfully',
            'data' => new AcademicSessionResource(
                $session->fresh()
            ),
        ]);
    }

    public function destroy(
        int $id
    ): JsonResponse {

        $session = AcademicSession::findOrFail(
            $id
        );

        $session->delete();

        return response()->json([
            'message' => 'Academic Session Deleted Successfully',
        ]);
    }

    public function activate(
        int $id
    ): JsonResponse {

        AcademicSession::query()
            ->update([
                'is_active' => false,
            ]);

        $session = AcademicSession::findOrFail(
            $id
        );

        $session->update([
            'is_active' => true,
        ]);

        return response()->json([
            'message' => 'Academic Session Activated',
            'data' => new AcademicSessionResource(
                $session->fresh()
            ),
        ]);
    }
}
