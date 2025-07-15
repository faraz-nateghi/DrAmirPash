<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        if ($request->has('q')) {
            $q = $request->input('q');
        } else{
            $q = null;
        }

        if ($q == null) {
            abort(404);
        }

        $articles = Article::query()
            ->where('titre', 'LIKE', '%' . $q . '%')
            ->paginate(10)
            ->withQueryString();

        return view('client.search', compact('articles', 'q'));
    }
}
