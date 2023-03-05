<?php

use App\Http\Controllers\PlaygroundController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserController;

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

// 最初のページ
Route::get('/', [TopController::class, 'index'])->name('top');

// ユーザー
Route::prefix('users')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/create', [UserController::class, 'store'])->name('users.store');
});

// play ground
Route::prefix('pg')->group(function (){
    Route::get('/', [PlaygroundController::class, 'index'])->name('pg.index');
});
