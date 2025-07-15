<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Forms;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'title',
        'titre',
        'alias',
        'index',
        'follow'
    ];

    public function articles(): belongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    public static function filamentForm(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('titre')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('alias')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255)
                ->columnSpanFull(),
            Forms\Components\Toggle::make('index')
                ->default(false)
                ->required(),
            Forms\Components\Toggle::make('follow')
                ->default(false)
                ->required(),
        ];
    }
}
