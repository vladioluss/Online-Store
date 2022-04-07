<?php

namespace App\Http\Controllers;

use App\Models\goods;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth'); //проверка на авторизацию, роль, права
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index() {
        $goods = goods::orderBy('created_at', 'desc')->take(10)->get(); //Взять последние по дате 10 элементы

        return view('welcome', [
            'goods' => $goods
        ]);
    }

    /**
     * @param $category
     * @param $goods_id
     * @return Application|Factory|View
     */
    public function show($category, $goods_id) {
        $goodsProduct = goods::join('categories', 'categories.id', '=', 'goods.category_id')
            ->where('categories.name', $category)
            ->where('goods.id', $goods_id)
            ->get('goods.*');
            //->dd();

        $categoryProduct = goods::join('categories', 'categories.id', '=', 'goods.category_id')
            ->where('categories.name', $category)
            ->where('goods.id', $goods_id)
            ->get('categories.name');
            //->dd();

        return view('goods.show', [
            'goodsProduct' => $goodsProduct,
            'categoryProduct' => $categoryProduct
        ]);
    }
}
