<?php

namespace App\Filament\Resources\ReelVideoResource\Pages;

use App\Filament\Resources\ReelVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReelVideo extends CreateRecord
{
    protected static string $resource = ReelVideoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['uploaded_by'] = auth()->id();

        if(isset($data['status']) && $data['status'] === 'published') {
            $data['published_at'] = now();
        }

        return $data;
    }
}
