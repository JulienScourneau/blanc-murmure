<?php

namespace App\Filament\Resources\UrbanSpaceResource\Pages;

use App\Filament\Resources\UrbanSpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUrbanSpaces extends ListRecords
{
    protected static string $resource = UrbanSpaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
