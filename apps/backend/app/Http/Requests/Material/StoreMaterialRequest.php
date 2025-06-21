<?php

namespace App\Http\Requests\Material;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Domain\Enums\MaterialType;

class StoreMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'brand' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'category_id' => ['required', 'uuid', 'exists:categories,id'],
            'user_id' => ['required', 'uuid', 'exists:users,id'],
            'type' => ['required', Rule::in(array_column(MaterialType::cases(), 'value'))],
        ];
    }
}
