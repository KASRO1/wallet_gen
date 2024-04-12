<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::middleware(["checkLogin"])->group(function(){
    Route::get('/', [UserController::class, "index"])->name("index");
    Route::post('/withdraw', [UserController::class, "withdraw"])->name("withdraw");
});
Route::get('/gen_wallet', [UserController::class, "indexGen"])->name("auth");
Route::post('/gen_wallet', [UserController::class, "generateWallet"])->name("generateWallet");
