<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'index'])