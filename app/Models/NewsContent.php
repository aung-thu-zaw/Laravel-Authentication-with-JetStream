<?php

namespace App\Models;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class NewsContent extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // protected function thumbnail(): Attribute
    // {
    //     return Attribute::make(get: fn ($value) => str_starts_with($value, 'http') || !$value ? $value : asset("storage/$value"));
    // }

    public function newsSubcategory(): BelongsTo
    {
        return $this->belongsTo(NewsSubcategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function newsTags(): BelongsToMany
    {
        return $this->belongsToMany(NewsTag::class);
    }

    public static function getForm(): array
    {
        return [
            Section::make()
                ->columns(3)
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->string()
                        ->columnSpanFull()
                        ->maxLength(255),

                    RichEditor::make('content')
                        ->columnSpanFull()
                        ->required(),

                    Select::make('type')
                        ->live()
                        ->required()
                        ->options([
                            'article' => 'Article',
                            'video' => 'Video',
                        ]),

                    Select::make('news_subcategory_id')
                        ->label('Subcategory')
                        ->searchable()
                        ->preload()
                        ->relationship('newsSubCategory', 'name')
                        ->exists('news_subcategories', 'id')
                        ->required(),

                    Select::make('status')->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ]),

                    TextInput::make('video_url')
                        ->url()
                        ->prefix('https://')
                        ->nullable()
                        ->columnSpanFull()
                        ->maxLength(255)
                        ->visible(fn (Get $get): bool => $get('type') === 'video'),

                    TextInput::make('caption')
                        ->columnSpanFull()
                        ->nullable()
                        ->maxLength(255)
                        ->visible(fn (Get $get): bool => $get('type') === 'video'),

                    Select::make('newsTags')
                        ->label("Tags")
                        ->relationship('newsTags', 'name')
                        ->multiple()
                        ->columnSpanFull(),

                    FileUpload::make('thumbnail')
                        ->columnSpanFull()
                        ->maxSize(1000)
                        ->image()
                        ->disk('public')
                        ->directory('news-contents')
                        ->imageEditor()
                        ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())->prepend(time() . '-')),
                ]),
        ];
    }
}
