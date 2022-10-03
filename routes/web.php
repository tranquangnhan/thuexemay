<?php

use App\Http\Controllers\Admin\DangNhapController;
use App\Http\Controllers\Admin\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quantri/login', [DangNhapController::class, 'index']);
Route::post('/quantri/login', [DangNhapController::class, 'checkin']);
Route::get('/quantri/logout', [DangNhapController::class, 'logout']);

Route::group(['prefix' => 'quantri', 'middleware' => 'phanquyen'], function () {

    Route::resource('/',IndexController::class);
    Route::resource('/xe',IndexController::class);
});
