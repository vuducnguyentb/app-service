<?php

use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CategoryWebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/tinymce', function () {
//    return view('tinymce');
//});
#Trang chủ
Route::get('/','Client\HomeController@index')->name('home');

#Các route trang quản trị
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashBoardController::class,'index']);
    #danh mục bài viết
    Route::resource('/categories','Admin\CategoryController');
    #danh mục sản phẩm - combo
    Route::resource('/product-categories','Admin\ProductCategoryController');
    #sản phẩm
    Route::resource('/products','Admin\ProductController');
    #giá sản phẩm
    Route::get('/product-prices/{id}','Admin\ProductPriceController@show')
        ->name('admin.product.price');
    Route::put('/product-prices/{id}','Admin\ProductPriceController@update')
        ->name('admin.product.price.update');
    #bài viết
    Route::resource('/posts','Admin\PostController');
    Route::post('/generate-slug','Admin\CategoryController@generateSlug')
        ->name('generate.slug');
});

Route::group(['prefix' => 'laravel-filemanager',
    'middleware' => [
        'web',
//        'auth'
    ]
], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
