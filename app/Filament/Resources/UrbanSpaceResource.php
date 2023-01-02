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
                    Forms\Components\TextInput::make('title'),
                    Forms\Components\TextInput::make('description'),
                    Forms\Components\TextInput::make('location'),
                    Forms\Components\TextInput::make('participant'),
                    Forms\Components\TextInput::make('author'),
                    Forms\Components\TextInput::make('partnership'),
                    Select::make('urban_space_project_id')->label('Projet')
                        ->relationship('urbanSpaceProject', 'title'),
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
                TextColumn::make('title')->label('Titre')->wrap()->disableClick(),
                TextColumn::make('description')->label('Description')->wrap()->disableClick(),
                TextColumn::make('location')->label('Adresse')->wrap()->disableClick(),
                TextColumn::make('author')->label('Auteur')->wrap()->disableClick(),
                TextColumn::make('partnership')->label('Partenaire')->wrap()->disableClick(),
                TextColumn::make('urbanSpaceProject.title')->label('Projet Urbain')->wrap()->disableClick(),
                ImageColumn::make('thumbnail_landscape')->label('Photo paysage')->size(150)->disableClick(),
                ImageColumn::make('thumbnail_portrait')->label('Photo portrait')->size(150)->disableClick(),
            ])
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
