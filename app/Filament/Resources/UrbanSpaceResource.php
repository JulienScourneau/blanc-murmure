<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrbanSpaceResource\Pages;
use App\Filament\Resources\UrbanSpaceResource\RelationManagers;
use App\Models\UrbanSpace;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UrbanSpaceResource extends Resource
{
    protected static ?string $model = UrbanSpace::class;

    protected static ?string $navigationGroup = 'Projets';

    protected static ?string $navigationLabel = 'Oeuvres';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
