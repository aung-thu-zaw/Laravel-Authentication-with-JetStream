<?php

namespace App\Filament\Resources\ReelVideoResource\Pages;

use App\Filament\Resources\ReelVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReelVideo extends EditRecord
{
    protected static string $resource = ReelVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
