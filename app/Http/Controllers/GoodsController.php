<?php

namespace App\Http\Controllers;

use App\Models\goods;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GoodsController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
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
     * @param goods $id
     * @return mixed
     */
    public function show(goods $id) {
        $goodsProduct = goods::findOrFail($id)->get();
        dd($goodsProduct);

        return view('goods.show');
    }

    public function test(Request $request) {
        return json_encode(
            $request->all(),
            JSON_UNESCAPED_UNICODE
        );
    }
}
