<?php

use App\Http\Controllers\Admin\DangNhapController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ThueXeController;
use App\Http\Controllers\Site\IndexController as SiteIndexController;
use App\Http\Controllers\Site\SearchXeController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dang-nhap', [DangNhapController::class, 'index']);
Route::post('dang-nhap', [DangNhapController::class, 'checkin']);
Route::get('dang-xuat', [DangNhapController::class, 'logout']);
Route::get('dang-ky', [DangNhapController::class, 'dangky']);
Route::post('post-dangky', [DangNhapController::class, 'postDangky']);


Route::group(['prefix' => 'quantri', 'middleware' => 'phanquyen'], function () {

    Route::resource('/',IndexController::class);
    Route::resource('/xe',IndexController::class);
    Route::resource('/thue-xe',ThueXeController::class);
    Route::get('/thue-xe/huy/{id}',[ThueXeController::class,"huy"]);
    Route::get('/thue-xe/duyet/{id}',[ThueXeController::class,"duyet"]);
});

Route::group(['prefix' => '/'], function () {
    /**
     * Trang chủ
     */
    Route::get('', [SiteIndexController::class, "index"]);
    Route::get('/search', [SearchXeController::class, "index"]);
    Route::post('thuexe', [SearchXeController::class, 'thuexe']);
});
