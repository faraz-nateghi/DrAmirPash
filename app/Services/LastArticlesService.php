<?php

namespace App\Services;

use App\Models\Article;

class LastArticlesService
{
    public static function get()
    {
        return Article::query()
            ->where('publish', 1)
            ->orderBy('id', 'desc')
            ->limit(12)
            ->get();
    }
}
