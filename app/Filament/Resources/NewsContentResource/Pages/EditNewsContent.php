<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use App\Filament\Resources\NewsContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsContent extends EditRecord
{
    protected static string $resource = NewsContentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if(isset($data["content"])) {
            $totalWords = str_word_count(strip_tags($data['content']));
            $averageWordsPerMinute = 200;
            $readingTime = ceil($totalWords / $averageWordsPerMinute);

            $data['reading_time'] = (int)$readingTime;
        }

        return $data;
    }
}
