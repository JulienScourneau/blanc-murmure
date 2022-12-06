<?php

namespace App\Filament\Resources\HomePhotoResource\Pages;

use App\Filament\Resources\HomePhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomePhoto extends EditRecord
{
    protected static string $resource = HomePhotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
