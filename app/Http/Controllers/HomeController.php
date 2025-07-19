<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $blogCategories = Category::query()->where('publish', 1)->where('blog', 1)->get();
        $lastArticles = Article::query()
            ->whereIn('main_category_id', $blogCategories->pluck('id'))
            ->orderBy('id', 'desc')
            ->where('publish', 1)
            ->get();
        $serviceCategories = ServiceCategory::query()
            ->where('publish', 1)
            ->with('services', function ($query){
                $query->where('publish', 1)->inRandomOrder()->limit(3);
            })->get();
        $faqs = Faq::query()->where('publish', 1)->where('show_in_home', 1)->get();
        return view('client.index', compact('lastArticles','faqs','serviceCategories'));
    }
}
