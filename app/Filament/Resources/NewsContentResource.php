<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsContentResource\Pages;
use App\Models\NewsContent;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsContentResource extends Resource
{
    protected static ?string $model = NewsContent::class;

    protected static ?string $navigationGroup = 'News Management';

    protected static ?string $navigationLabel = 'Contents';

    protected static ?string $modelLabel = 'Content';

    protected static ?string $pluralModelLabel = 'Contents';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make()->schema([
                Forms\Components\Select::make('news_subcategory_id')
                    ->label('News Subcategory')
                    ->relationship('newsSubCategory', 'name')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('content'),

                Select::make('type')->options([
                    'article' => 'Article',
                    'video' => 'Video',
                ]),

                Forms\Components\TextInput::make('video_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('caption')
                    ->required()
                    ->maxLength(255),

                Select::make('status')->label('status')->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                    'archived' => 'Archived',
                ]),

            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail'),

                Tables\Columns\TextColumn::make('newsSubCategory.name')
                    ->label('Subcategory')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Author')
                    ->numeric()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(
                        fn (string $state): string => match ($state) {
                            'article' => 'info',
                            'video' => 'success',
                        },
                    ),

                // SelectColumn::make('status')->options([
                //     'draft' => 'Draft',
                //     'published' => 'Published',
                //     'archived' => 'Archived',
                // ]),
            ])
            ->filters([Tables\Filters\TrashedFilter::make()])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make(), Tables\Actions\ForceDeleteAction::make(), Tables\Actions\RestoreAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(), Tables\Actions\ForceDeleteBulkAction::make(), Tables\Actions\RestoreBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsContents::route('/'),
            'create' => Pages\CreateNewsContent::route('/create'),
            'edit' => Pages\EditNewsContent::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
