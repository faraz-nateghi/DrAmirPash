<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'configs';

    protected $fillable = [
        'index_title',
        'index_keywords',
        'index_description',
        'category_pagination_size',
        'search_pagination_size',
        'facebook',
        'telegram',
        'youtube',
        'instagram',
        'email'
    ];
}
