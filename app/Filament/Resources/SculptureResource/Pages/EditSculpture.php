<?php

namespace App\Filament\Resources\SculptureResource\Pages;

use App\Filament\Resources\SculptureResource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSculpture extends EditRecord
{
    protected static string $resource = SculptureResource::class;
    protected static ?string $title = 'Modifier';

    protected function getFormSchema(): array
    {
        return [
            Card::make()->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),
                TextInput::make('description'),
                TextInput::make('partnership'),
                TextInput::make('date'),
                FileUpload::make('thumbnail')->label('Photo')->image()->directory('images')->imagePreviewHeight('300'),
            ])
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
