<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GoodsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///////ДЛЯ ТЕСТОВ
Route::get('/test',[\App\Http\Controllers\GoodsController::class, 'getAllImgs']);
///////

Route::get('/',[\App\Http\Controllers\GoodsController::class, 'index']);
Route::get('/goods/{category}/{goods_id}', [\App\Http\Controllers\GoodsController::class, 'show']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('adm')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome');
    Route::resource('category', CategoryController::class);
    Route::resource('goods', GoodsController::class);
});

//Route::resource('cart', CartController::class);

/*Route::get('cart', 'CartController@index');
Route::post('cart/add/{productId}', 'CartController@store');*/

//php artisan permission:create-role admin
