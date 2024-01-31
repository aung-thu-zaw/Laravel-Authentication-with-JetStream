<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsSubcategoryResource\Pages;
use App\Filament\Resources\NewsSubcategoryResource\RelationManagers;
use App\Models\NewsSubcategory;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
        return $form->schema([
            Section::make()->schema([
                Forms\Components\Select::make('news_category_id')
                    ->relationship('newsCategory', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Fieldset::make('Status')->schema([Forms\Components\Toggle::make('show_on_navbar')->required(), Forms\Components\Toggle::make('show_on_page')->required()]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('newsCategory.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('show_on_navbar'),

                Tables\Columns\ToggleColumn::make('show_on_page'),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make('show_on_navbar')->options([
                    true => 'show',
                    false => 'hide',
                ]),
                Tables\Filters\SelectFilter::make('show_on_page')->options([
                    true => 'show',
                    false => 'hide',
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make()
                ])
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
            'index' => Pages\ListNewsSubcategories::route('/'),
            'create' => Pages\CreateNewsSubcategory::route('/create'),
            'edit' => Pages\EditNewsSubcategory::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
