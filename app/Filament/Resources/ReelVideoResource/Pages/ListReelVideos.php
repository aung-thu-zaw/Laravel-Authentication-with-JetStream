<?php

namespace App\Filament\Resources\ReelVideoResource\Pages;

use App\Filament\Resources\ReelVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReelVideos extends ListRecords
{
    protected static string $resource = ReelVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
