<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'getLogout']);
    Route::get('/mypage', [UserController::class, 'mypage']);
    Route::get('/mypage/profile', [UserController::class, 'profile']);
    Route::get('/sell', [ItemController::class, 'sellVIew'])
});

Route::get('/', [ItemController::class, 'index'])->name('root');
