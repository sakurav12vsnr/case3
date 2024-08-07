<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'getLogout']);
});

Route::get('/', [ItemController::class, 'index'])->name('root');
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'postLogin']);