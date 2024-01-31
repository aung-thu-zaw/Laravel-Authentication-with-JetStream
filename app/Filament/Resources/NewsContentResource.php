<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsContentResource\Pages;
use App\Filament\Resources\NewsContentResource\RelationManagers\NewsTagsRelationManager;
use App\Models\NewsContent;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
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

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form->schema(NewsContent::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->size(60),

               TextColumn::make('newsSubCategory.name')
                    ->label('Subcategory')
                    ->numeric()
                    ->sortable(),

               TextColumn::make('author.name')
                    ->label('Author')
                    ->numeric()
                    ->sortable(),

               TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->searchable(),

               TextColumn::make('type')
                    ->badge()
                    ->color(
                        fn (string $state): string => match ($state) {
                            'article' => 'info',
                            'video' => 'success',
                            default => 'warning',
                        },
                    ),
            ])
            ->defaultSort("id", "desc")
            ->filters([
                TrashedFilter::make(),

                SelectFilter::make('type')->options([
                    'article' => 'Article',
                    'video' => 'Video',
                ]),

                SelectFilter::make('newsSubCategory')
                ->label('Subcategory')
                ->relationship('newsSubCategory', 'name')
                ->searchable()
                ->preload(),

                SelectFilter::make('author')
                ->label('Author')
                ->relationship('author', 'name')
                ->searchable()
                ->preload()

            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                ForceDeleteAction::make(),
                RestoreAction::make()
            ])
            ->bulkActions([
                BulkActionGroup::make([
                DeleteBulkAction::make(),
                ForceDeleteBulkAction::make(),
                RestoreBulkAction::make()
                ])
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // NewsTagsRelationManager::class
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
