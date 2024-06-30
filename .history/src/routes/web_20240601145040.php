<?php

use Illuminate\Support\Facades\Route;
use A

Route::get('/', [ItemController::class, 'index'])->name('root');