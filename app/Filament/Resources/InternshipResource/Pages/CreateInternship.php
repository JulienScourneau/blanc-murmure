<?php

namespace App\Filament\Resources\InternshipResource\Pages;

use App\Filament\Resources\InternshipResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInternship extends CreateRecord
{
    protected static string $resource = InternshipResource::class;
    protected static ?string $title = "Créer un stage ou ateliers";

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
