<?php

namespace App\Filament\Resources\IllustrationResource\Pages;

use App\Filament\Resources\IllustrationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIllustration extends EditRecord
{
    protected static string $resource = IllustrationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
