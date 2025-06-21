<?php

namespace App\Application\UseCases\Material;

use App\Domain\Entities\Material;
use App\Domain\Interfaces\MaterialRepositoryInterface;
use App\Http\DTO\RequestMaterialDTO;

class CreateMaterialUseCase
{
    public function __construct(
        private MaterialRepositoryInterface $repository,
    ) {}

    public function execute(RequestMaterialDTO $dto): Material
    {
        // usar um factory estático ou o construtor da entidade
        $material = new Material(
            id:         $dto->id ?? \Illuminate\Support\Str::uuid()->toString(),
            name:       $dto->name,
            description:$dto->description,
            brand:      $dto->brand,
            price:      $dto->price,
            categoryId: $dto->category_id,
            userId:     $dto->user_id,
            type:       $dto->type,
            createdAt:  now(),
            updatedAt:  now(),
        );

        return $this->repository->create($material);
    }
}
