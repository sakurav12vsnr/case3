<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CommentController;

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'getLogout']);
    Route::get('/mypage', [UserController::class, 'mypage']);
    Route::get('/mypage/profile', [UserController::class, 'profile']);
    Route::get('/sell', [ItemController::class, 'sellVIew']);
    Route::get('/purchase', [PurchaseController::class, 'index']);
    Route::get('/purchase/address', [PurchaseController::class, 'address']);
    Route::get('/item/comment', [CommentController::class])
});

Route::get('/', [ItemController::class, 'index'])->name('root');
Route::get('/item', [ItemController::class, 'detail']);
