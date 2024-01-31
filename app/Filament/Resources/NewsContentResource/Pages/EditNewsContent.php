<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use App\Filament\Resources\NewsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsContent extends EditRecord
{
    protected static string $resource = NewsContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
