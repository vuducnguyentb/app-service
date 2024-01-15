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


#Trang đăng nhập
Route::get('/sign-in','LoginController@login')->name('login');
Route::post('/login','LoginController@checkLogin')->name('check-login');
Route::get('/logout','LoginController@logout')->name('logout');

#Các route trang quản trị
Route::prefix('admin')
    ->middleware([
        'auth:sanctum'
    ])
    ->group(function(){
    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dasdhboard');

    #danh mục sản phẩm - combo
    Route::resource('/product-categories','Admin\ProductCategoryController');
    #sản phẩm
    Route::resource('/products','Admin\ProductController');
    #giá sản phẩm
    Route::get('/product-prices/{id}','Admin\ProductPriceController@show')
        ->name('admin.product.price');
    Route::put('/product-prices/{id}','Admin\ProductPriceController@update')
        ->name('admin.product.price.update');
    #combo
    Route::resource('/combos','Admin\ComboController');
    #giá combo
    Route::get('/combo-prices/{id}','Admin\ComboPriceController@show')
        ->name('admin.combo.price');
    Route::put('/combo-prices/{id}','Admin\ComboPriceController@update')
        ->name('admin.combo.price.update');


    #danh mục bài viết
    Route::resource('/categories','Admin\CategoryController');
    #bài viết
    Route::resource('/posts','Admin\PostController');
    Route::post('/generate-slug','Admin\CategoryController@generateSlug')
        ->name('generate.slug');
    #trang
        Route::resource('/pages','Admin\PageController');

    #slider
    Route::resource('/sliders','Admin\SliderController');
});

Route::group(['prefix' => 'laravel-filemanager',
    'middleware' => [
        'web',
        'auth:sanctum'
//        'auth'
    ]
], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
