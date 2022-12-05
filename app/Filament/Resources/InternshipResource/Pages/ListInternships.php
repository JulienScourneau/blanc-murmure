<?php

namespace App\Filament\Resources\InternshipResource\Pages;

use App\Filament\Resources\InternshipResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternships extends ListRecords
{
    protected static string $resource = InternshipResource::class;
    protected static ?string $title = 'Stages et Ateliers';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
