<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternshipResource\Pages;
use App\Filament\Resources\InternshipResource\RelationManagers;
use App\Models\Internship;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class InternshipResource extends Resource
{
    protected static ?string $model = Internship::class;

    protected static ?string $navigationGroup = 'Ateliers, Événements et Stages';

    protected static ?string $breadcrumb = 'Ateliers et Stages';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $activeNavigationIcon = 'heroicon-s-collection';

    protected static ?string $navigationLabel = 'Ateliers et Stages';

    protected static ?string $slug = 'ateliers-et-stages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')->label('Titre')->unique(),
                    TextInput::make('subtitle')->label('Sous-Titre'),
                    TinyEditor::make('description')->profile('simple'),
                    TextInput::make('age')->required(),
                    TextInput::make('price')->label('Prix')->required(),
                    DatePicker::make('begin_at')->label('Date de début'),
                    DatePicker::make('end_at')->label('Date de fin'),
                    TimePicker::make('begin_hour')->label('Heure de début'),
                    TimePicker::make('end_hour')->label('Heure de fin'),
                    FileUpload::make('thumbnail')->label('Image'),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->color('primary'),
                Tables\Columns\TextColumn::make('subtitle')->label('Sous titre')->wrap(),
                Tables\Columns\TextColumn::make('description')->wrap(),
                Tables\Columns\TextColumn::make('age'),
                ImageColumn::make('thumbnail')->label('Photo')->size(100),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInternships::route('/'),
            'create' => Pages\CreateInternship::route('/create'),
            'edit' => Pages\EditInternship::route('/{record}/edit'),
        ];
    }
}
