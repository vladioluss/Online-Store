<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\goodsImage;

class goods extends Model {
    use HasFactory;

    public function imgs() {
        return $this->hasMany('App\Models\goodsImage');
    }
}
