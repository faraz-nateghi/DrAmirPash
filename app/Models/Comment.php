<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Morilog\Jalali\Jalalian;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'article_id',
        'parent_id',
        'author_name',
        'author_email',
        'author_ip',
        'author_agent',
        'body',
        'status',
        'old_id'
    ];
    public function getPersianCreatedAtAttribute()
    {
        return Jalalian::fromCarbon($this->created_at)->format('d F Y - H:i');
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
