<?php

namespace App\Filament\Resources\UrbanSpaceResource\Pages;

use App\Filament\Resources\UrbanSpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUrbanSpace extends CreateRecord
{
    protected static string $resource = UrbanSpaceResource::class;

    protected static ?string $title = 'Ajouter une oeuvre';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
