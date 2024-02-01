<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsSubcategoryResource\Pages;
use App\Models\NewsSubcategory;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsSubcategoryResource extends Resource
{
    protected static ?string $model = NewsSubcategory::class;

    protected static ?string $navigationGroup = 'News Management';

    protected static ?string $navigationLabel = 'Subcategories';

    protected static ?string $modelLabel = 'Subcategory';

    protected static ?string $pluralModelLabel = 'Subcategories';

    protected static ?string $navigationIcon = 'heroicon-s-squares-plus';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema(NewsSubcategory::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('newsCategory.name')
                    ->label("Category")
                    ->numeric()
                    ->sortable(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                ToggleColumn::make('show_on_navbar'),

                ToggleColumn::make('show_on_page'),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
           TrashedFilter::make(),

           SelectFilter::make('show_on_navbar')
                ->options([
                    true => 'show',
                    false => 'hide',
                ]),

           SelectFilter::make('show_on_page')
                ->options([
                    true => 'show',
                    false => 'hide',
                ]),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsSubcategories::route('/'),
            // 'create' => Pages\CreateNewsSubcategory::route('/create'),
            // 'edit' => Pages\EditNewsSubcategory::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
