<?php

namespace App\Filament\Resources\IllustrationResource\Pages;

use App\Filament\Resources\IllustrationResource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIllustration extends EditRecord
{
    protected static string $resource = IllustrationResource::class;
    protected static ?string $title = 'Modifier';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
