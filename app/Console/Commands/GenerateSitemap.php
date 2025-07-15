<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $this->handleArticles();
        $this->handleCategories();
        $this->handlePages();
        $this->handleIndex();
    }

    public function handlePages(): void
    {

        $sitemap = Sitemap::create();
        $sitemap->add(Url::create(route('advertising.index')));
        $sitemap->add(Url::create(route('about.index')));
        $sitemap->add(Url::create(route('aliakbar.index')));

        $sitemap->writeToFile(public_path('sitemaps/pages.xml'));
    }

    public function handleIndex(): void
    {
        $files = File::files(public_path('sitemaps'));

        $index = SitemapIndex::create();
        foreach ($files as $file) {
            $index->add(url('sitemaps/' . $file->getFilename()));
        }

        $index->writeToFile(public_path('sitemap_index.xml'));
    }
    public function handleCategories(): void
    {
        $categories = Category::all();
        $sitemap = Sitemap::create();
        foreach ($categories as $category) {
            $url = Url::create(route('category.index', $category->alias))
                ->setLastModificationDate($category->updated_at);
            $images = $this->extractImagesUrl($category->body);

            if ($images) {
                foreach ($images as $image) {
                    if (!str_starts_with($image, 'http')) {
                        $image = url($image);
                    }
                    $url->addImage($image);
                }
            }

            $sitemap->add($url);
        }

        $sitemap->writeToFile(public_path('sitemaps/categories.xml'));
    }
    public function handleArticles(): void
    {
        $i = 1;
        Article::query()->chunk(1000, function ($articles) use (&$i) {
            $sitemap = Sitemap::create();

            foreach ($articles as $article) {
                $url = Url::create(route('article.show', $article->alias))
                    ->setLastModificationDate($article->updated_at);
                $images = $this->extractImagesUrl($article->body);

                if ($images) {
                    foreach ($images as $image) {
                        if (!str_starts_with($image, 'http')) {
                            $image = url($image);
                        }

                        $url->addImage($image);
                    }
                }
                $sitemap->add($url);
            }
            $sitemap->writeToFile(public_path('sitemaps/sitemap-article-'. $i .'.xml'));

            $i++;
        });
    }

    public function extractImagesUrl(?string $html): array
    {
        if (empty($html)) {
            return [];
        }

        libxml_use_internal_errors(true); // جلوگیری از خطاهای parsing

        $doc = new \DOMDocument();
        $doc->loadHTML($html);

        $images = $doc->getElementsByTagName('img');

        $addresses = [];
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (!empty($src)) {
                $addresses[] = $src;
            }
        }

        return $addresses;
    }
}
