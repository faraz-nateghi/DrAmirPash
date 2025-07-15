<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Config;
use App\Models\Article;
use App\Services\LastArticlesService;
use Illuminate\Http\Request;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __invoke($alias)
    {
        $article = Article::query()
            ->where('publish', 1)
            ->where('alias', $alias)
            ->where('publish', 1)
            ->with('author')
            ->with('categories')
            ->with('comments', function ($query){
                $query->where('status', 1);
            })
            ->firstOrFail();

        $article->hits += 1;
        $article->save();

        $mainCategory = $article->mainCategory();

        $relatedArticles = $mainCategory->articles()
            ->where('articles.id', '!=', $article->id)
            ->where('publish', 1)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        $dataStructureScript = \App\Services\StructureDataService::articleStructureData($article);
        $lastArticles = LastArticlesService::get();
        if ($article->has_tos) {
            $article = $this->addTOC($article);
        }
        $parentCategories = \App\Models\Category::where('parent_id', -1)
            ->withCount(['children'])
            ->where('publish', true)
            ->orderBy('order')
            ->get();
        $categories = $article->categories;
        $articleTags = $article->tags;
        $siteConfig = \App\Models\Config::first();
        $articleComments = $article->comments;
        return view('client.article', compact('parentCategories','article', 'relatedArticles', 'lastArticles', 'dataStructureScript', 'categories','articleTags', 'siteConfig','articleComments'));
    }

    private function addTOC($article)
    {
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML('<?xml encoding="utf-8" ?>' . $article->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $xpath = new DOMXPath($doc);

        $tocList = '';
        $slugCounts = [];

        // پیدا کردن همه heading ها (h1 تا h6)
//        for ($i = 1; $i <= 6; $i++) {
//            $headings = $doc->getElementsByTagName("h$i");
            $headings = $doc->getElementsByTagName("h2");
            foreach ($headings as $heading) {
                $headingText = trim($heading->textContent);

                if ($headingText === '') continue; // نادیده گرفتن headingهای خالی

                $baseSlug = Str::slug($headingText);
                $slug = $baseSlug;

                // بررسی تکراری بودن
                $count = $slugCounts[$baseSlug] ?? 0;
                if ($count > 0) {
                    $slug = "{$baseSlug}-{$count}";
                }
                $slugCounts[$baseSlug] = $count + 1;

                // ست کردن id روی heading
                $heading->setAttribute('id', $slug);

                // اضافه کردن به TOC
                $tocList .= '<li><a href="#' . $slug . '">' . $headingText . '</a></li>';
            }
//        }

        // ساخت TOC
        $tocHtml = '';
        if (!empty($tocList)) {
            $tocHtml = <<<HTML
<div class="toc">
    <h4>آنچه در این مطلب می‌خوانید:</h4>
    <nav>
        <ul>
            $tocList
        </ul>
    </nav>
</div>
HTML;
        }

        // قرار دادن TOC در ابتدای محتوا
        $body = $doc->saveHTML();
        $article->body = $tocHtml . $body;

        return $article;
    }

}
