<?php

namespace App\Filament\Resources\NewsContentResource\Pages;

use App\Filament\Resources\NewsContentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsContent extends CreateRecord
{
    protected static string $resource = NewsContentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['author_id'] = auth()->id();

        if(isset($data['status']) && $data['status'] === 'published') {
            $data['published_at'] = now();
        }

        if(isset($data["content"])){
            $totalWords = str_word_count(strip_tags($data['content']));
            $averageWordsPerMinute = 200;
            $readingTime = ceil($totalWords / $averageWordsPerMinute);

            $data['reading_time'] = (int)$readingTime;
        }

        return $data;
    }
}
