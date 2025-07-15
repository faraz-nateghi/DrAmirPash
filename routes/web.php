<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Middleware\Config;
use App\Http\Middleware\LazyLoadImages;
use App\Http\Middleware\MainMenu;
use App\Http\Middleware\MobileMenuItems;
use App\Http\Middleware\Redirect;
use Illuminate\Support\Facades\Route;

Route::view('master', 'contact-us.blade.php');

Route::middleware(
    [
        Redirect::class,
        MainMenu::class,
        MobileMenuItems::class,
        Config::class,
        LazyLoadImages::class
    ])->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('categories/{slugs}', CategoryController::class)
        ->where('slugs', '.*')
        ->name('category.index');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('articles/{alias}', ArticleController::class)->name('article.show');
    Route::get('authors/{alias}', AuthorController::class)->name('author.index');
    Route::get('tags/{alias}', TagController::class)->name('tag.index');
    Route::post('create-comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('contact-us', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact-form', [ContactController::class, 'store'])->name('contact.store');

    Route::get('search', [SearchController::class, 'index'])->name('search.index');
});
