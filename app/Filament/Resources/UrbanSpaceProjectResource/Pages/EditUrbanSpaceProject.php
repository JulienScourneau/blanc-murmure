<?php

namespace App\Filament\Resources\UrbanSpaceProjectResource\Pages;

use App\Filament\Resources\UrbanSpaceProjectResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUrbanSpaceProject extends EditRecord
{
    protected static string $resource = UrbanSpaceProjectResource::class;
    protected static ?string $title = 'Modifier';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
