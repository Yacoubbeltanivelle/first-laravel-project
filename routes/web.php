<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/bonjour/{name}', [IndexController::class, 'bonjour'])->name('bonjour');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.details');
