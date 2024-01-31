<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReelVideoResource\Pages;
use App\Models\ReelVideo;
use Filament\Forms;
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
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReelVideoResource extends Resource
{
    protected static ?string $model = ReelVideo::class;

    protected static ?string $navigationGroup = 'Reel Management';

    protected static ?string $navigationLabel = 'Videos';

    protected static ?string $modelLabel = 'Video';

    protected static ?string $pluralModelLabel = 'Videos';

    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(ReelVideo::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               ImageColumn::make('thumbnail')->size(60),

               TextColumn::make('title')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),

                TextColumn::make('topic.name')
                    ->numeric()
                    ->sortable(),

                TextColumn::make("status")
                    ->badge(),

                IconColumn::make('is_top')
                    ->boolean()
                    ->sortable(),

               IconColumn::make('is_editors_pick')
                    ->boolean()
                    ->sortable(),

               TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),

               TextColumn::make('view')
                    ->numeric()
                    ->sortable(),

            ])
            ->defaultSort("id", "desc")
            ->filters([
                TrashedFilter::make(),

                SelectFilter::make('status')->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                    'archived' => 'Archived',
                ]),

                SelectFilter::make('topic')
                ->relationship('topic', 'name')
                ->searchable()
                ->preload(),
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
                   RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReelVideos::route('/'),
            'create' => Pages\CreateReelVideo::route('/create'),
            'edit' => Pages\EditReelVideo::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
