<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use InvadersXX\FilamentNestedList\Concern\ModelNestedList;

class Category extends Model
{
    use ModelNestedList;

    protected $fillable = [
        'parent_id',
        'title',
        'titre',
        'order',
        'alias',
        'keywords',
        'description',
        'intro_text',
        'body',
        'index',
        'follow',
        'publish',
    ];

    protected $table = 'categories';

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
