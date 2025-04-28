<?php

namespace App\Filament\Admin\Resources\SeoResource\Pages;

use App\Filament\Admin\Resources\SeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeos extends ListRecords
{
    protected static string $resource = SeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
