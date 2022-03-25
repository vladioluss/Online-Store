<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGoodsRequest;
use App\Models\goods;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $goods = goods::orderBy('created_at', 'desc')->paginate(15);
        //dd($goods);

        return view('admin.goods.index', [
            'goods' => $goods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create() {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGoodsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreGoodsRequest $request) {
        $newGoods = new goods();

        $validated = $request->validated();
        $newGoods->name = $request->name;

        if ($request->isMethod('post') && $request->file('userfile')) {
            $file = $request->file('userfile');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();

            $newGoods->img = Storage::putFileAs($upload_folder, $file, $filename);
        } else {
            $newGoods->img = '/public/folder/no-photo.png';
        }

        $newGoods->save();

        return redirect()->back()->with('success','Товар был успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param goods $good
     * @return Response
     */
    public function show(goods $good) {
        $goodProduct = goods::findOrFail($good->id);
        //dump($goodProduct);

        return view('admin.goods.show', [
            'goodProduct' => $goodProduct
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param goods $goods
     * @return Response
     */
    public function edit(goods $goods) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param goods $goods
     * @return Response
     */
    public function update(Request $request, goods $goods) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param goods $goods
     * @return Response
     */
    public function destroy(goods $goods) {
        //
    }
}
