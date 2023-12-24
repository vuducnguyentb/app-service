<?php

use App\Http\Controllers\Admin\DashBoardController;
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


#Các route trang quản trị
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashBoardController::class,'index']);
});

Route::group(['prefix' => 'laravel-filemanager',
    'middleware' => [
        'web',
//        'auth'
    ]
], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
