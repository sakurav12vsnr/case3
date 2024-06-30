<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\

Route::get('/', [ItemController::class, 'index'])->name('root');