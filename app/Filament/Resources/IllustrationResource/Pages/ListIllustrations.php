<?php

namespace App\Filament\Resources\IllustrationResource\Pages;

use App\Filament\Resources\IllustrationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIllustrations extends ListRecords
{
    protected static string $resource = IllustrationResource::class;
    protected static ?string $title = 'Illustrations';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
