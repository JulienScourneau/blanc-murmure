<?php

namespace App\Filament\Resources\IllustrationResource\Pages;

use App\Filament\Resources\IllustrationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIllustration extends CreateRecord
{
    protected static string $resource = IllustrationResource::class;
    protected static ?string $title = 'Ajouter une illustration';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
