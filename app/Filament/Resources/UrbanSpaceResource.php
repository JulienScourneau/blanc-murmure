<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrbanSpaceResource\Pages;
use App\Filament\Resources\UrbanSpaceResource\RelationManagers;
use App\Models\UrbanSpace;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                        ->relationship('urbanSpaceProject', 'title')
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('location'),
                TextColumn::make('author'),
                TextColumn::make('partnership'),
                TextColumn::make('urbanSpaceProject.title')
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
            'index' => Pages\ListUrbanSpaces::route('/'),
            'create' => Pages\CreateUrbanSpace::route('/create'),
            'edit' => Pages\EditUrbanSpace::route('/{record}/edit'),
        ];
    }
}
