<?php

namespace App\Filament\Resources\NewsPhotoResource\Pages;

use App\Filament\Resources\NewsPhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsPhotos extends ListRecords
{
    protected static string $resource = NewsPhotoResource::class;
    protected static ?string $title = "Mercredi s'éveille";

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
