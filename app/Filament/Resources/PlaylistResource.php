<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaylistResource\Pages;
use App\Models\Playlist;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlaylistResource extends Resource
{
    protected static ?string $model = Playlist::class;

    protected static ?string $navigationGroup = 'Reel Management';

    protected static ?string $navigationLabel = 'Playlists';

    protected static ?string $modelLabel = 'Playlist';

    protected static ?string $pluralModelLabel = 'Playlists';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Playlist::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')
                ->sortable()
                ->searchable(),

            TextColumn::make('description')
                ->limit(80)
                ->sortable()
                ->searchable(),

                TextColumn::make('reel_videos_count')
                ->sortable()
                ->label("Total Videos")
                ->counts('reelVideos')
            ])
            ->defaultSort("id", "desc")
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Action::make("Add Videos To Playlist")
                ->color('success')
                ->icon('heroicon-o-plus')
                ->url(fn (Playlist $record) => self::getUrl('add-videos', ['record' => $record])),
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
            'index' => Pages\ListPlaylists::route('/'),
            'add-videos' => Pages\AddVideosToPlaylist::route('/{record}/add-videos'),
            // 'create' => Pages\CreatePlaylist::route('/create'),
            // 'edit' => Pages\EditPlaylist::route('/{record}/edit'),
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
