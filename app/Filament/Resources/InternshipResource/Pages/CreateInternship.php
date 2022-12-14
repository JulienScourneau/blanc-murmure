<?php

namespace App\Filament\Resources\InternshipResource\Pages;

use App\Filament\Resources\InternshipResource;
use App\Forms\Components\SummerNote;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Pages\CreateRecord;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class CreateInternship extends CreateRecord
{
    protected static string $resource = InternshipResource::class;
    protected static ?string $title = "Créer un stage ou ateliers";

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
