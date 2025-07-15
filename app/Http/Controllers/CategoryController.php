<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Services\Client\CategoryService;
use App\Services\LastArticlesService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request, $slugs)
    {
        $slugs = explode('/', $slugs);

        $initCategory = Category::query()->where('alias', $slugs[0])->firstOrFail();
        $category = Category::all();
        if ($initCategory->parent_id == -1) {
            $parent = $initCategory;

            $baseUrl = 'category/' . $parent->alias;

            if (isset($slugs[1])) {
                if ($slugs[1] == 'page') {
                    if (!isset($slugs[2]) or $slugs[2] == 1 or !(int)$slugs[2]) {
                        return redirect($baseUrl);
                    } else {
                        $page = (int)$slugs[2];
                        $child = null;
                    }
                } else {
                    $child = Category::query()->where('alias', $slugs[1])->firstOrFail();
                    if ($child->parent_id != $parent->id) {
                        abort(404);
                    }
                    $baseUrl = 'category/' . $parent->alias . '/' . $child->alias;
                    if (isset($slugs[2]) and $slugs[2] == 'page') {
                        if (!isset($slugs[3]) or $slugs[3] == 1 or !(int)$slugs[3]) {
                            return redirect('category/' . $parent->alias . '/' . $child->alias);
                        } else {
                            $page = (int)$slugs[3];
                        }
                    } else {
                        $page = 1;
                    }
                }
            } else {
                $child = null;
                $page = 1;
            }
        } else {
            $main = Category::query()->where('id', $initCategory->parent_id)->firstOrFail();
            $child = $initCategory;

            return redirect('category/' . $main->alias . '/' . $child->alias);
        }

        $request->merge(['page' => $page]);

        if ($child) {
            $children = null;
            $count = $child->articles()->count();
            $articles = $child->articles()
                ->orderByDesc('id')
//                ->limit(request()->config->category_pagination_size)
//                ->offset(($page-1)*request()->config->category_pagination_size)
                ->paginate(request()->config->category_pagination_size);

            $dataStructureScript = \App\Services\StructureDataService::categoryStructureData($child);
        } else {
            $children = Category::query()->where('parent_id', $parent->id)->get();
            $count = $parent->articles()->count();
            $articles = $parent->articles()
                ->orderByDesc('id')
//                ->limit(request()->config->category_pagination_size)
//                ->offset(($page-1)*request()->config->category_pagination_size)
                ->paginate(request()->config->category_pagination_size);

            $dataStructureScript = \App\Services\StructureDataService::categoryStructureData($parent);
        }

        $lastArticles = LastArticlesService::get();


        return view('client.category', compact(
            'dataStructureScript',
            'page',
            'baseUrl',
            'count',
            'parent',
            'child',
            'children',
            'articles',
            'lastArticles',
            'category',
        ));
    }

//    public function __invoke($firstCategory, $secondCategory = null)
//    {
//
//        $pageType = "category";
//
//        $main = Category::query()->where('alias', $firstCategory)->firstOrFail();
//
//
//        if ($secondCategory) {
//            $child = Category::query()->where('alias', $secondCategory)->firstOrFail();
//            $children = null;
//            if ($child->parent_id != $main->id) {
//                abort(404);
//            } else {
//                $articles = $child->articles()->orderByDesc('id')->paginate(request()->config->category_pagination_size);
//            }
//        } else {
//            $child = null;
//            if ($main->parent_id == -1) {
//                $children = Category::query()->where('parent_id', $main->id)->get();
//            } else {
//                $children = null;
//            }
//
//            $articles = $main->articles()->orderByDesc('id')->paginate(request()->config->category_pagination_size);
//        }
//
//        $lastArticles = LastArticlesService::get();
//
//        return view('client.category', compact('pageType', 'main', 'child', 'children', 'articles', 'lastArticles'));
//    }
}
