<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\admin\LoginController;
use \App\Http\Controllers\admin\LopController;

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
Route::get('/admin/login',[LoginController::class,'index']);
Route::post('/admin/home',[LoginController::class,'postlogin']);
Route::get('/admin/lop/add',[LopController::class,'create']);
Route::post('/admin/lop/add',[LopController::class,'postcreate']);
