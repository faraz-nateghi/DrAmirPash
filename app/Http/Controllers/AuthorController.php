<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Services\LastArticlesService;
use App\Services\StructureDataService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __invoke($alias)
    {
        $pageType = "author";

        $main = User::query()->where('alias', $alias)->firstOrFail();

        $articles = Article::query()
            ->where('user_id', $main->id)
            ->where('publish', 1)
            ->orderBy('id', 'desc')
            ->paginate(request()->config->category_pagination_size);

        $lastArticles = LastArticlesService::get();

        $dataStructureScript = StructureDataService::authorStructureData($main);

        return view('client.author', compact('dataStructureScript', 'articles', 'main', 'pageType', 'lastArticles'));
    }
}
