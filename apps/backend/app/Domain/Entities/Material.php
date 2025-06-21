<?php

namespace App\Domain\Entities;

use JsonSerializable;
use Carbon\Carbon;

class Material implements JsonSerializable
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
        public string $brand,
        public float  $price,
        public string $categoryId,
        public string $userId,
        public string $type,
        public Carbon $createdAt,
        public Carbon $updatedAt,
    ) {}

    public function jsonSerialize(): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'brand'       => $this->brand,
            'price'       => $this->price,
            'category_id' => $this->categoryId,
            'user_id'     => $this->userId,
            'type'        => $this->type,
            'created_at'  => $this->createdAt->toDateTimeString(),
            'updated_at'  => $this->updatedAt->toDateTimeString(),
        ];
    }
}
