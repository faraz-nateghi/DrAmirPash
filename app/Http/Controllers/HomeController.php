<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $blogCategories = Category::query()->where('publish', 1)->where('blog', 1)->get();
        $lastCryptoArticles = Article::query()
            ->whereIn('main_category_id', $blogCategories->pluck('id'))
            ->orderBy('id', 'desc')
            ->where('publish', 1)
            ->get();

        return view('client.index', compact('lastCryptoArticles'));
    }
}
