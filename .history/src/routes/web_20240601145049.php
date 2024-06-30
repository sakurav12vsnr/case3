<?php

use Illuminate\Support\Facades\Route;
use App\Http\

Route::get('/', [ItemController::class, 'index'])->name('root');