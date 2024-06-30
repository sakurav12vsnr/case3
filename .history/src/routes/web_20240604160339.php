<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'getLogout']);

    Route::get('/mypage/profile', [UserController::class, ])
});

Route::get('/', [ItemController::class, 'index'])->name('root');
