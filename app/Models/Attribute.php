<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Attribute extends Model
{
    /** @use HasFactory<\Database\Factories\AttributeFactory> */
    use HasFactory;
    protected $guarded = [];
    private function prepareAttribute(Request $request): array
    {
        return [
            "name"=> $request->input('name'),
        ];
    }
    final public function getAllAttribute(): Collection
    {
        return self::query()->get();
    }

    final public function storeAttribute(Request $request)
    {
       return self::query()->create($this->prepareData($request));
    }

    final public function updateAttribute(Request $request, Attribute $attribute)
    {
        return $attribute->update($this->prepareData($request));
    }
    final public function deleteAttribute(Attribute $attribute)
    {
        return $attribute->delete();
    }

}
