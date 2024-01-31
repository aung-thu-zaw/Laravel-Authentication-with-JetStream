<?php

namespace App\Models;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ReelVideo extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

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

    public function playlists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    public static function getForm(): array
    {
        return [
            Section::make()
                ->columns(3)
                ->schema([
                    TextInput::make('title')
                        ->columnSpanFull()
                        ->required()
                        ->string()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255),

                    RichEditor::make('description')
                        ->columnSpanFull()
                        ->required(),

                    Select::make('topic_id')
                        ->relationship('topic', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),

                    Select::make('status')
                        ->required()
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                            'archived' => 'Archived',
                        ]),

                    TextInput::make('video_by')
                        ->string()
                        ->maxLength(255),

                    Toggle::make('is_top')->columnSpanFull(),

                    Toggle::make('is_editors_pick')->columnSpanFull(),

                    Fieldset::make()->schema([
                        FileUpload::make('thumbnail')
                            ->required()
                            ->columnSpan(1)
                            ->maxSize(1000)
                            ->image()
                            ->disk('public')
                            ->directory('reel')
                            ->imageEditor()
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())->prepend(time() . '-')),

                        FileUpload::make('video_path')
                            ->required()
                            ->label('Upload Video')
                            ->columnSpan(1)
                            ->maxSize(20000)
                            ->disk('public')
                            ->directory('videos')
                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())->prepend(time() . '-')),
                    ]),
                ]),
        ];
    }
}
