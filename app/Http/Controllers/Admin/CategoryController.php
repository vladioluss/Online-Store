<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\goods;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $categories = Category::orderBy('created_at', 'desc')->get();

        /*DB::listen(function($query) {
            Storage::disk('local')->put('log.txt', $query->sql);
        });*/
        //dd($c);

        $getGoodsInCtg = 0;
        foreach ($categories as $category) {
            $iteration = $category->id;
            $getGoodsInCtg = Category::find($iteration)->getGoodsInCtg->count();
        }
        return view('admin.category.index', [
            'categories' => $categories,
            'getGoodsInCtg' => $getGoodsInCtg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create() {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) {
        $newCategory = new Category();
        $newCategory->name = $request->title;
        $newCategory->save();

        return redirect()->back()->with('success','Категория была успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View|Response
     */
    public function edit(Category $category) {
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(Request $request, Category $category) {
        $request->all();
        $category->save();

        return redirect()->back()->with('success','Категория была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category) {
        $category->delete();

        return redirect()->back()->with('success','Категория была успешно удалена!');
    }

}
