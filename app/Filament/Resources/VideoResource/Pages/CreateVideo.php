<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;
    protected static ?string $title = 'Ajouter une vidéo';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
