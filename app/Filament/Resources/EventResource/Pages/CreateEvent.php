<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
    protected static ?string $title = 'Créer un événement';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
