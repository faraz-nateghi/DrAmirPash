<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use InvadersXX\FilamentNestedList\Concern\ModelNestedList;

class MobileMenuItem extends Model
{
    use ModelNestedList;

    protected $table = 'mobile_menu_items';

    protected $fillable = [
        'parent_id',
        'order',
        'titre',
        'url',
        'publish'
    ];
}
