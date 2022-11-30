<?php

namespace App\Filament\Resources\InternshipResource\Pages;

use App\Filament\Resources\InternshipResource;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;

class CreateInternship extends CreateRecord
{
    protected static string $resource = InternshipResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->label('Titre')->required()->unique(),
            TextInput::make('subtitle')->label('Sous-Titre')->required(),
            RichEditor::make('description')->required(),
        ];
    }
}
