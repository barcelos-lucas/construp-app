<?php

namespace App\Application\UseCases\Material;

use App\Domain\Interfaces\MaterialRepositoryInterface;

class DeleteMaterialUseCase
{
    public function __construct(
        private MaterialRepositoryInterface $repository,
    ) {}

    public function execute(string $id): void
    {
        $this->repository->delete($id);
    }
}
