<?php

namespace App\Filament\Resources\UrbanSpaceResource\Pages;

use App\Filament\Resources\UrbanSpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUrbanSpace extends EditRecord
{
    protected static string $resource = UrbanSpaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
