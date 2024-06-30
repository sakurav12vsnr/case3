<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;

Route::get('/', [ItemController::class, 'index'])->name('root');
Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('item.detail');
Route::get('/search', [ItemController::class, 'search'])->name('item.search');

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'getLogout']);

    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
    Route::get('/mypage/profile', [UserController::class, 'profile']);
    Route::post('/mypage/profile', [UserController::class, 'updateProfile']);

    Route::get('/sell', [ItemController::class, 'sellVIew']);
    Route::post('/sell', [ItemController::class, 'sellCreate']);

    Route::post('/item/like/{item_id}', [LikeController::class, 'create'])->name('like');
    Route::post('/item/unlike/{item_id}', [LikeController::class, 'destroy'])->name('unlike');

    Route::get('/item/comment/{item_id}', [CommentController::class, 'commentView'])->name('comment.view');
    Route::post('/item/comment/{item_id}', [CommentController::class, 'commentCreate'])->name('comment.create');

    Route::get('/purchase/{item_id}', [PurchaseController::class, 'index']);
    Route::get('/purchase/address', [PurchaseController::class, 'address']);
});


