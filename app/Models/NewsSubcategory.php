<?php

namespace App\Models;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class NewsSubcategory extends Model
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
            ->generateSlugsFrom('name')
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

    public function newsSubcategories(): HasMany
    {
        return $this->hasMany(NewsSubcategory::class);
    }

    public function newsCategory(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function newsContents(): HasMany
    {
        return $this->hasMany(NewsContent::class);
    }

    public static function getForm(): array
    {
        return [
            Section::make()->schema([

                Select::make('news_category_id')
                    ->relationship('newsCategory', 'name')
                    ->exists("news_categories", "id")
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->string()
                    ->unique(ignoreRecord:true)
                    ->maxLength(255),

                Fieldset::make('Status')->schema([
                    Toggle::make('show_on_navbar')
                        ->required()
                        ->markAsRequired(false),

                    Toggle::make('show_on_page')
                        ->required()
                        ->markAsRequired(false)
                ]),
            ]),
        ];
    }
}
