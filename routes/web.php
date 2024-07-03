<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AnimeController;

Route::get('/', [ProductController::class, 'show']);
