<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\goods;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class homeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $goodsCount = goods::get('id')->count();
        $categoryCount = Category::get('id')->count();
        $regUserCount = User::get('id')->count(); //всего зареганных юзеров

        return view('admin.home.index', [
            'goodsCount' => $goodsCount,
            'categoryCount' => $categoryCount,
            'regUserCount' => $regUserCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
}
