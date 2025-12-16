<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/bonjour/{name}', [IndexController::class, 'bonjour']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
