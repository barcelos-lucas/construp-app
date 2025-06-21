<?php
namespace App\Domain\Interfaces;
use App\Domain\Entities\Material;

interface MaterialRepositoryInterface
{
    public function findById(string $id): ?Material;
    public function findByName(string $name): ?Material;
    public function findAll(): array;
    public function create(Material $material): Material;
    public function update(string $id, Material $material): Material;
    public function delete(string $id): void;
    public function findByCategoryId(string $categoryId): array;
}
