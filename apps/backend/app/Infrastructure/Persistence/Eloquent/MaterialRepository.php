<?php

namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\Entities\Material;
use App\Domain\Interfaces\MaterialRepositoryInterface;

class MaterialRepository implements MaterialRepositoryInterface
{
    public function findById(string $id): ?Material
    {
        $m = MaterialModel::find($id);
        return $m ? $m->toDomain() : null;
    }

    public function findByName(string $name): ?Material
    {
        $m = MaterialModel::where('name', $name)->first();
        return $m ? $m->toDomain() : null;
    }

    public function findAll(): array
    {
        return MaterialModel::all()
            ->map(fn(MaterialModel $m) => $m->toDomain())
            ->all();
    }

    public function create(Material $material): Material
    {
        $m = MaterialModel::create([
            'id'          => $material->id,
            'name'        => $material->name,
            'description' => $material->description,
            'brand'       => $material->brand,
            'price'       => $material->price,
            'category_id' => $material->categoryId,
            'user_id'     => $material->userId,
            'type'        => $material->type,
        ]);

        return $m->toDomain();
    }

    public function update(string $id, Material $material): Material
    {
        $m = MaterialModel::findOrFail($id);
        $m->update([
            'name'        => $material->name,
            'description' => $material->description,
            'brand'       => $material->brand,
            'price'       => $material->price,
            'category_id' => $material->categoryId,
            'user_id'     => $material->userId,
            'type'        => $material->type,
        ]);

        return $m->toDomain();
    }

    public function delete(string $id): void
    {
        MaterialModel::destroy($id);
    }

    public function findByCategoryId(string $categoryId): array
    {
        return MaterialModel::where('category_id', $categoryId)
            ->get()
            ->map(fn(MaterialModel $m) => $m->toDomain())
            ->all();
    }
}
