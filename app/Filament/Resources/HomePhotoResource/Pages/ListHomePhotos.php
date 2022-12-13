<?php

namespace App\Filament\Resources\HomePhotoResource\Pages;

use App\Filament\Resources\HomePhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomePhotos extends ListRecords
{
    protected static string $resource = HomePhotoResource::class;
    protected static ?string $title = "Accueil";

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
