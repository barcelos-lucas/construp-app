<?php

namespace App\Application\UseCases\Material;

use App\Domain\Entities\Material;
use App\Domain\Interfaces\MaterialRepositoryInterface;
use App\Http\DTO\RequestMaterialDTO;

class UpdateMaterialUseCase
{
    public function __construct(
        private MaterialRepositoryInterface $repository,
    ) {}

    public function execute(string $id, RequestMaterialDTO $dto): Material
    {
        // carrega, atualiza campos e manda pro repositório
        return $this->repository->update($id, new Material(
            id:         $id,
            name:       $dto->name,
            description:$dto->description,
            brand:      $dto->brand,
            price:      $dto->price,
            categoryId: $dto->category_id,
            userId:     $dto->user_id,
            type:       $dto->type,
            createdAt:  $dto->created_at,
            updatedAt:  now(),
        ));
    }
}
