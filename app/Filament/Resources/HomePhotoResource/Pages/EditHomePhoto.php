<?php

namespace App\Filament\Resources\HomePhotoResource\Pages;

use App\Filament\Resources\HomePhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomePhoto extends EditRecord
{
    protected static string $resource = HomePhotoResource::class;
    protected static ?string $title = 'Modifier';

    protected function getActions(): array
    {
        return [

        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
