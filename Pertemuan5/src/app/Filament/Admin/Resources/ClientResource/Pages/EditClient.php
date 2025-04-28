<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;

use App\Filament\Admin\Resources\ClientResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
           Action::make('requestApiToken')
                ->label('Request New API Token')
                ->color('danger')
                ->icon('heroicon-m-key')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->api_token = Str::random(10);
                    $this->record->save();
                    $this->fillform();
                    Notification::make()
                        ->title('new api token generated')
                        ->success()
                        ->send();
                }),

        ];
    }
}
