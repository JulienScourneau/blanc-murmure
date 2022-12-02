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

class CreateInternship extends CreateRecord
{
    protected static string $resource = InternshipResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->label('Titre')->unique(),
            TextInput::make('subtitle')->label('Sous-Titre'),
//            RichEditor::make('description')->required(),
            SummerNote::make('description')->required(),
            TextInput::make('age')->required(),
            TextInput::make('price')->required(),
            DatePicker::make('begin_at'),
            DatePicker::make('end_at'),
            TimePicker::make('begin_hour'),
            TimePicker::make('end_hour'),
            FileUpload::make('thumbnail')
        ];
    }
}
