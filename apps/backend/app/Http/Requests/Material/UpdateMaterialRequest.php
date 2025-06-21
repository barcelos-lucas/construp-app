<?php

namespace App\Http\Requests\Material;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Domain\Enums\MaterialType;

class UpdateMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'description' => ['nullable', 'string'],
            'brand' => ['sometimes', 'string'],
            'price' => ['sometimes', 'numeric', 'min:0'],
            'category_id' => ['sometimes', 'uuid', 'exists:categories,id'],
            'user_id' => ['sometimes', 'uuid', 'exists:users,id'],
            'type' => ['sometimes', Rule::in(array_column(MaterialType::cases(), 'value'))],
        ];
    }
}
