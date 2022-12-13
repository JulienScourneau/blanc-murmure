<?php

namespace App\Filament\Resources\CatalogResource\Pages;

use App\Filament\Resources\CatalogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatalogs extends ListRecords
{
    protected static string $resource = CatalogResource::class;
    protected static ?string $title = "Livres";

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
