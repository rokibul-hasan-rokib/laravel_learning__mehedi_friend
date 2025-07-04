<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $guarded = []; //alada koira kuno column deya lagbo na sob nia nibo

    private function prepareData(Request $request)
    {
        return [
            'name' => $request->input('name'),  // data prepare korchi 
        ];
    }


    final function storeCategory(Request $request)
    {
       return self::query()->create($this->prepareData($request));  //prepare datai ja ache tai create koro
    }

    final public function updateCategory(Request $request, Category $category)
    {
        return $category->update($this->prepareData($request)); // update korar jonno data prepare kore update koro
    }

    final public function deleteCategory(Category $category)
    {
        return $category->delete(); // delete korar jonno
    }


}
