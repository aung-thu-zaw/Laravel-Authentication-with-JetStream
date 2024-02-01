<?php

namespace App\Filament\Resources\PlaylistResource\Pages;

use App\Filament\Resources\PlaylistResource;
use App\Models\Playlist;
use App\Models\ReelVideo;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Support\Exceptions\Halt;

class AddVideosToPlaylist extends Page implements HasForms
{
    use InteractsWithForms;

    public ?Playlist $record = null;

    public ?array $data = [];

    public ?string $previousUrl = null;

    protected static string $resource = PlaylistResource::class;

    protected static string $view = 'filament.resources.playlist-resource.pages.add-videos-to-playlist';

    public function mount(int|string $record): void
    {
        $recordArray = json_decode($record, true);

        $this->form->fill($recordArray);

        $this->previousUrl = url()->previous();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make()->schema([
                TextInput::make('title')->label("Playlist Title")->disabled(),

                    Fieldset::make("Add Videos")->schema([
                       CheckboxList::make('reel_video_ids')
                            ->relationship("reelVideos", "title")
                            ->columnSpanFull()
                            ->searchable()
                            ->bulkToggleable()
                            ->options(ReelVideo::all()->pluck("title", "id"))
                            ->columns(3)
                    ])
                ]),
            ])
        ->model($this->record)
        ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),

            Action::make('cancel')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.cancel.label'))
                ->url($this->previousUrl)
                ->color('gray')

        ];
    }

    public function save(): void
    {
        try {
            $data = $this->data;

            $this->record->reelVideos()->detach();

            $this->record->reelVideos()->attach($data['reel_video_ids']);

            Notification::make()->title('Reel videos added to the playlist successfully.')->success()->send();

            $this->redirect(PlaylistResource::getUrl());
        } catch (Halt $exception) {
            return;
        }
    }

}
