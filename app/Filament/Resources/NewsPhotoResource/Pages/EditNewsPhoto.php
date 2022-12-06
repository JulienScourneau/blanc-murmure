<?php

namespace App\Filament\Resources\NewsPhotoResource\Pages;

use App\Filament\Resources\NewsPhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsPhoto extends EditRecord
{
    protected static string $resource = NewsPhotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
