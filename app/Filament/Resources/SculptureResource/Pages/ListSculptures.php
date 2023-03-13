<?php

namespace App\Filament\Resources\SculptureResource\Pages;

use App\Filament\Resources\SculptureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSculptures extends ListRecords
{
    protected static string $resource = SculptureResource::class;
    protected static ?string $title = 'Sculptures';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
