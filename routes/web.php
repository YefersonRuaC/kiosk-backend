<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/categories', [CategoryController::class, 'index']);