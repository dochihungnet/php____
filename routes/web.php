<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::group([],function () {
    Route::get('/home',[HomeController::class,'index']);
    Route::get('/productAll',[HomeController::class,'product'])->name('productall');
    Route::get('/sanphamChiTiet',[HomeController::class,'productDetail'])->name('producDetail');
});

Route::group([],function () {
    Route::get('/indexAdmin',[adminController::class,'index']);
    Route::get('/sanpham',[adminController::class,'product']);
});

Route::resource('/product', ProductController::class);
// Route::put('edit/{product}', 'ProductController@update')->name('edit');
// Route::delete('delete/{product}', 'ProductController@destroy')->name('delete');