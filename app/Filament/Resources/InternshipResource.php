<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternshipResource\Pages;
use App\Filament\Resources\InternshipResource\RelationManagers;
use App\Models\Internship;
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
    protected static ?string $navigationLabel = 'Ateliers et Stages';
    protected static ?string $slug = 'ateliers-et-stages';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $activeNavigationIcon = 'heroicon-s-collection';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')->label('Titre')->required(),
                    TextInput::make('subtitle')->label('Sous-Titre'),
                    TinyEditor::make('description')->profile('simple'),
                    TextInput::make('age')->required(),
                    TextInput::make('price')->numeric()->suffix('€')->label('Prix')->required(),
                    DatePicker::make('begin_at')->label('Date de début')->required(),
                    DatePicker::make('end_at')->label('Date de fin')->required(),
                    TimePicker::make('begin_hour')->label('Heure de début')->required(),
                    TimePicker::make('end_hour')->label('Heure de fin')->required(),
                    FileUpload::make('thumbnail')->label('Photo')->image()->directory('images')->imagePreviewHeight('300')->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->color('primary')->wrap(),
                Tables\Columns\TextColumn::make('subtitle')->label('Sous titre')->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('price')->label('Prix')->suffix('€')->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('age')->label('Age')->disableClick(),
                ImageColumn::make('thumbnail')->label('Photo')->size(150)->disableClick(),
                Tables\Columns\TextColumn::make('begin_at')->label('Date de début')->disableClick()->date('d F Y'),
                Tables\Columns\TextColumn::make('end_at')->label('Date de fin')->disableClick()->date('d F Y'),


            ])->defaultSort('created_at','desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ;
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
