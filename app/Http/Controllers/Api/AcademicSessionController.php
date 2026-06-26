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

        $data = $request->validated();

        if (($data['is_active'] ?? false) === true) {
            AcademicSession::query()->update([
                'is_active' => false,
            ]);
        }

        $session = AcademicSession::create($data);

        return response()->json([
            'message' => 'Academic Session Created Successfully',
            'data' => new AcademicSessionResource($session),
        ], 201);
    }

    public function show(int $id)
    {
        $session = AcademicSession::findOrFail($id);

        return new AcademicSessionResource($session);
    }

    public function update(
        AcademicSessionRequest $request,
        int $id
    ): JsonResponse {

        $session = AcademicSession::findOrFail($id);

        $data = $request->validated();

        if (($data['is_active'] ?? false) === true) {
            AcademicSession::query()
                ->where('id', '!=', $id)
                ->update([
                    'is_active' => false,
                ]);
        }

        $session->update($data);

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

        $session = AcademicSession::findOrFail($id);

        $session->delete();

        return response()->json([
            'message' => 'Academic Session Deleted Successfully',
        ]);
    }

    public function activate(
        int $id
    ): JsonResponse {

        AcademicSession::query()->update([
            'is_active' => false,
        ]);

        $session = AcademicSession::findOrFail($id);

        $session->update([
            'is_active' => true,
        ]);

        return response()->json([
            'message' => 'Academic Session Activated Successfully',
            'data' => new AcademicSessionResource(
                $session->fresh()
            ),
        ]);
    }
}
