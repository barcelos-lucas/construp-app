<?php

namespace App\Http\Resources\Material;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'brand' => $this->brand,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ];
    }
}
