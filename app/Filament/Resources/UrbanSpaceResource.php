<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrbanSpaceResource\Pages;
use App\Filament\Resources\UrbanSpaceResource\RelationManagers;
use App\Models\UrbanSpace;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class UrbanSpaceResource extends Resource
{
    protected static ?string $model = UrbanSpace::class;

    protected static ?string $navigationGroup = 'Projets';

    protected static ?string $navigationLabel = 'Oeuvres';

    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $activeNavigationIcon = 'heroicon-s-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label("Nom de l'oeuvre")->required(),
                    TinyEditor::make('description')->profile('simple')->label('Description')->required(),
                    Forms\Components\TextInput::make('location')->label('Adresse')->required(),
                    Forms\Components\TextInput::make('participant')->label('Participant'),
                    Forms\Components\TextInput::make('author')->label('Auteur'),
                    Forms\Components\TextInput::make('partnership')->label('Partenaire'),
                    Select::make('urban_space_project_id')->label('Projet')
                        ->relationship('urbanSpaceProject', 'title')->label('Espace urbain associé'),
                    Forms\Components\FileUpload::make('thumbnail_landscape')->label('Photo paysage')->image()->directory('images')->imagePreviewHeight('300')->required(),
                    Forms\Components\FileUpload::make('thumbnail_portrait')->label('Photo portrait')->image()->directory('images')->imagePreviewHeight('300')->required(),
                ]),
                Forms\Components\Card::make()->schema([
                    FileUpload::make('photo_list')
                        ->multiple()
                        ->enableReordering()
                        ->label('Photos')
                        ->image()
                        ->directory('images')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label("Nom de l'oeuvre")->wrap()->disableClick(),
                TextColumn::make('location')->label('Adresse')->wrap()->disableClick(),
                TextColumn::make('urbanSpaceProject.title')->label('Espace urbain associé')->wrap()->sortable()->disableClick(),
                ImageColumn::make('thumbnail_landscape')->label('Photo paysage')->size(150)->disableClick(),
                ImageColumn::make('thumbnail_portrait')->label('Photo portrait')->size(150)->disableClick(),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUrbanSpaces::route('/'),
            'create' => Pages\CreateUrbanSpace::route('/create'),
            'edit' => Pages\EditUrbanSpace::route('/{record}/edit'),
        ];
    }
}
