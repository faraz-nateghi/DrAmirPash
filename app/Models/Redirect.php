<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $table = 'redirects';

    protected $fillable = [
        'from',
        'to',
        'status_code',
        'hits',
        'publish'
    ];
}
