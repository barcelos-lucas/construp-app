<?php

namespace App\Infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Entities\Material as MaterialEntity;
use Carbon\Carbon;

class MaterialModel extends Model
{
    protected $table        = 'materials';
    public    $incrementing = false;
    protected $keyType      = 'string';

    protected $fillable = [
        'id',
        'name',
        'description',
        'brand',
        'price',
        'category_id',
        'user_id',
        'type',
    ];

    protected $casts = [
        'price'      => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function toDomain(): MaterialEntity
    {
        return new MaterialEntity(
            id:         $this->id,
            name:       $this->name,
            description:$this->description,
            brand:      $this->brand,
            price:      $this->price,
            categoryId: $this->category_id,
            userId:     $this->user_id,
            type:       $this->type,
            createdAt:  $this->created_at instanceof Carbon
                ? $this->created_at
                : new Carbon($this->created_at),
            updatedAt:  $this->updated_at instanceof Carbon
                ? $this->updated_at
                : new Carbon($this->updated_at),
        );
    }
}
