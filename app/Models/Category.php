<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model {
    use HasFactory;

    /**
     * Получить товар, связанный с категорией.
     */
    public function getGoodsInCtg() {
        return $this->hasMany(goods::class);
    }

    /*public function cnt() {
        $categories = Category::orderBy('created_at', 'desc')->get();

        foreach ($categories as $category) {
            $iteration = $category->id;
            $getGoodsInCtg = Category::find($iteration)->getGoodsInCtg->count();
            //d($getGoodsInCtg);
        }
    }*/
}
