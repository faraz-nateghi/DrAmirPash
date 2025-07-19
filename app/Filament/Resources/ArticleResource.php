<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Filament\Resources\ArticleResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\ArticleResource\RelationManagers\TagsRelationManager;
use App\Models\Article;
use App\Models\Tag;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('id', 'desc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(debounce: 1000)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('alias', fa_slug($state));
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('alias')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('hits')
                    ->numeric()
                    ->default(0),
                Forms\Components\Select::make('categories')
                    ->label('دسته‌بندی‌ها')
                    ->preload()
                    ->searchable()
                    ->relationship('categories', 'titre')
                    ->multiple()
                    ->required()
                    ->reactive(),
                Forms\Components\Select::make('main_category_id')
                    ->label('دسته‌بندی اصلی')
                    ->options(fn(callable $get) => \App\Models\Category::whereIn('id', $get('categories') ?? [])->pluck('titre', 'id'))
                    ->required()
                    ->searchable()
                    ->visible(fn(callable $get) => is_array($get('categories')) && count($get('categories')) > 0)
                    ->helperText('یکی از دسته‌بندی‌های بالا را به عنوان دسته اصلی انتخاب کنید.')
                    ->reactive(),
                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'titre')
                    ->preload()
                    ->searchable()
                    ->createOptionForm(Tag::filamentForm()),
                Forms\Components\SpatieMediaLibraryFileUpload::make('image'),
                Forms\Components\Textarea::make('keywords')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('intro_text')
                    ->columnSpanFull(),
//                Forms\Components\RichEditor::make('body')
//                    ->columnSpanFull(),
                TinyEditor::make('body')
                    ->profile('full')
                    ->rtl()
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Toggle::make('index')
                    ->default(true)
                    ->required(),
                Forms\Components\Toggle::make('follow')
                    ->default(true)
                    ->required(),
                Forms\Components\Toggle::make('has_toc')
                    ->default(true)
                    ->required(),
                Forms\Components\Toggle::make('publish')
                    ->required(),
                Forms\Components\Toggle::make('comment_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('titre')
                    ->searchable(),
                Tables\Columns\IconColumn::make('publish')
                    ->boolean(),
                Tables\Columns\TextColumn::make('hits')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('comment_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            CategoriesRelationManager::class,
            TagsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
