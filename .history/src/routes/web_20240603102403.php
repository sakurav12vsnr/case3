<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::middleware('auth')->group(function() {
    Route::get('')
})
Route::get('/', [ItemController::class, 'index'])->name('root');