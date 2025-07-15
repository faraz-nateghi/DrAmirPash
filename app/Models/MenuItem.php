<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use InvadersXX\FilamentNestedList\Concern\ModelNestedList;

class MenuItem extends Model
{
    use ModelNestedList;

    protected $table = 'menu_items';

    protected $fillable = [
        'parent_id',
        'order',
        'titre',
        'url',
        'type',
        'publish'
    ];
}
