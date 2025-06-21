<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Requests\Material\StoreMaterialRequest;
use App\Http\Requests\Material\UpdateMaterialRequest;

use App\Http\Resources\Material\MaterialResource;

use App\Application\UseCases\Material\{
    CreateMaterialUseCase,
    UpdateMaterialUseCase,
    DeleteMaterialUseCase,
    GetAllMaterialsUseCase,
    GetMaterialByIdUseCase
};


class MaterialController extends Controller
{
    public function __construct(
        private CreateMaterialUseCase   $createMaterialUseCase,
        private UpdateMaterialUseCase   $updateMaterialUseCase,
        private DeleteMaterialUseCase   $deleteMaterialUseCase,
        private GetAllMaterialsUseCase  $getAllMaterialsUseCase,
        private GetMaterialByIdUseCase  $getMaterialByIdUseCase,
    ) {}


    public function index(): JsonResponse
    {
        $materials = $this->getAllMaterialsUseCase->execute();
        return response()->json($materials);
    }


    public function show(string $id): JsonResponse
    {
        $material = $this->getMaterialByIdUseCase->execute($id);

        if (! $material) {
            return response()->json(['error' => 'Material not found'], 404);
        }


        return response()->json($material);
    }


    public function store(StoreMaterialRequest $request): JsonResponse
    {
        $data     = $request->validated();
        $material = $this->createMaterialUseCase->execute($data);

        return response()->json([
            'id' => $material->id,
        ], 201);
    }



    public function update(UpdateMaterialRequest $request, string $id): JsonResponse
    {
        $data     = $request->validated();
        $material = $this->updateMaterialUseCase->execute($id, $data);

        return response()->json($material);
    }


    public function destroy(string $id): JsonResponse
    {
        $deleted = $this->deleteMaterialUseCase->execute($id);

        if (! $deleted) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        return response()->json(null, 204);
    }
}
