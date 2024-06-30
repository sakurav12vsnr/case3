<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('root');