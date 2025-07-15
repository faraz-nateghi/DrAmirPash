<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Services\LastArticlesService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke($alias)
    {
        $pageType = "tag";

        $main = Tag::query()->where('alias', $alias)->firstOrFail();

        $articles = $main->articles()->where('publish', 1)->orderBy('id', 'desc')->paginate(request()->config->category_pagination_size);

        $lastArticles = LastArticlesService::get();

        return view('client.tag', compact('articles', 'main', 'pageType', 'lastArticles'));
    }
}
