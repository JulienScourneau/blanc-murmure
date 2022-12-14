<?php

namespace App\Filament\Resources\UrbanSpaceProjectResource\Pages;

use App\Filament\Resources\UrbanSpaceProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUrbanSpaceProject extends CreateRecord
{
    protected static string $resource = UrbanSpaceProjectResource::class;
    protected static ?string $title = 'Ajouter un espace urbain';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
