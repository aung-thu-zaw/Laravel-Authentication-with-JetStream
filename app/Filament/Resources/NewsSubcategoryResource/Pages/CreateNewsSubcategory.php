<?php

namespace App\Filament\Resources\NewsSubcategoryResource\Pages;

use App\Filament\Resources\NewsSubcategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsSubcategory extends CreateRecord
{
    protected static string $resource = NewsSubcategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
