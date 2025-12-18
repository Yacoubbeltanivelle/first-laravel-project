<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/articles/creer', [ArticleController::class, 'create'])->name('articles.creer');
Route::get('/articles/modifier/{id}', [ArticleController::class, 'update'])->name('article.modification');
Route::get('/articles/supprimer/{id}', [ArticleController::class, 'delete'])->name('article.supprimer');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.details');


Route::fallback(function () {
    return view('errors.not-found');
});
