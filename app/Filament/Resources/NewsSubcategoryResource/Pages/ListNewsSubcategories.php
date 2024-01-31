<?php

namespace App\Filament\Resources\NewsSubcategoryResource\Pages;

use App\Filament\Resources\NewsSubcategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsSubcategories extends ListRecords
{
    protected static string $resource = NewsSubcategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
