<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Morilog\Jalali\Jalalian;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'articles';

    protected $fillable = [
        'user_id',
        'main_category_id',
        'title',
        'titre',
        'alias',
        'keywords',
        'description',
        'intro_text',
        'body',
        'index',
        'follow',
        'has_toc',
        'publish',
        'comment_status',
        'comment_count',
        'hits'
    ];

    public function getCleanedContentAttribute()
    {
        return \Illuminate\Support\Str::words(html_entity_decode(strip_tags($this->body)), 20);
    }

    public function getPersianCreatedAtShortAttribute()
    {
        return Jalalian::fromCarbon($this->created_at)->format('d F Y');
    }

    public function getPersianCreatedAtAttribute()
    {
        return Jalalian::fromCarbon($this->created_at)->format('d F Y - H:i');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function mainCategory(): Category
    {
        return $this->categories->sortBy('id')->first();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
