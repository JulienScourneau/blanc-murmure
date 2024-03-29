<?php

namespace App\Filament\Resources\SculptureResource\Pages;

use App\Filament\Resources\SculptureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSculpture extends CreateRecord
{
    protected static string $resource = SculptureResource::class;
    protected static ?string $title = 'Ajouter une sculpture';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
