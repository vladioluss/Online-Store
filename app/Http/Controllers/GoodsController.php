<?php

namespace App\Http\Controllers;

use App\Models\goods;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

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
        $goods = goods::orderBy('created_at')->take(10)->get();

        return view('welcome', [
            'goods' => $goods
        ]);
    }
}
