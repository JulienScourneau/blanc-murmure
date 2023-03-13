<?php

namespace App\Filament\Resources\UrbanSpaceProjectResource\Pages;

use App\Filament\Resources\UrbanSpaceProjectResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUrbanSpaceProjects extends ListRecords
{
    protected static string $resource = UrbanSpaceProjectResource::class;
    protected static ?string $title = 'Espace Urbains';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
