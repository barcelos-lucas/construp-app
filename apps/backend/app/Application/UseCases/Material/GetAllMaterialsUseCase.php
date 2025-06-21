<?php

namespace App\Application\UseCases\Material;

use App\Domain\Entities\Material;
use App\Domain\Interfaces\MaterialRepositoryInterface;

class GetAllMaterialsUseCase
{
    public function __construct(
        private MaterialRepositoryInterface $repository,
    ) {}

    /**
     * @return Material[]
     */
    public function execute(): array
    {
        return $this->repository->findAll();
    }
}
