<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
    use HasFactory;

    public function ScopeUserCart ($userId) {
        $userCart = Cart::where('user', $userId);
    }

    /*public function getCount($goods) {
        foreach($goods as $goodsProduct) {

        }
    }*/

}
