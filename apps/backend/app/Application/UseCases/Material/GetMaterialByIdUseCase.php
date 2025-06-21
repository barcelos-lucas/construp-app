<?php

namespace App\Application\UseCases\Material;

use App\Domain\Entities\Material;
use App\Domain\Interfaces\MaterialRepositoryInterface;

class GetMaterialByIdUseCase
{
    public function __construct(
        private MaterialRepositoryInterface $repository,
    ) {}

    public function execute(string $id): ?Material
    {
        return $this->repository->findById($id);
    }
}
