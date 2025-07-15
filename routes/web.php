<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::view('master', 'client.client');

Route::middleware(
    [
        \App\Http\Middleware\Redirect::class,
        \App\Http\Middleware\MainMenu::class,
        \App\Http\Middleware\MobileMenuItems::class,
        \App\Http\Middleware\Config::class,
        \App\Http\Middleware\LazyLoadImages::class
    ])->group(function () {
    Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
    Route::get('categories/{slugs}', \App\Http\Controllers\CategoryController::class)
        ->where('slugs', '.*')
        ->name('category.index');
    Route::get('articles/{alias}', \App\Http\Controllers\ArticleController::class)->name('article.show');
    Route::get('authors/{alias}', \App\Http\Controllers\AuthorController::class)->name('author.index');
    Route::get('tags/{alias}', \App\Http\Controllers\TagController::class)->name('tag.index');
    Route::post('create-comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('contact-us', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact-form', [ContactController::class, 'store'])->name('contact.store');

    Route::get('search', [SearchController::class, 'index'])->name('search.index');
});
