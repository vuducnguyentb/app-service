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

Route::get('/tinymce', function () {
    return view('tinymce');
});

#Các route trang quản trị
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashBoardController::class,'index']);
    Route::resource('/categories','Admin\CategoryController');
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
