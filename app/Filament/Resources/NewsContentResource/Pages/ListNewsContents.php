<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use App\Filament\Resources\NewsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsContents extends ListRecords
{
    protected static string $resource = NewsContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
