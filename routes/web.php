<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');


Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create'])->name('articles.creer');
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('article.modification');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('article.supprimer');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('article.details');
});



Route::fallback(function () {
    return view('errors.not-found');
});
