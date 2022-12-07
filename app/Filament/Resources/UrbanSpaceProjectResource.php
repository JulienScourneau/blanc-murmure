<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrbanSpaceProjectResource\Pages;
use App\Filament\Resources\UrbanSpaceProjectResource\RelationManagers;
use App\Models\UrbanSpaceProject;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UrbanSpaceProjectResource extends Resource
{
    protected static ?string $model = UrbanSpaceProject::class;
    protected static ?string $navigationLabel = 'Projet';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $activeNavigationIcon = 'heroicon-s-collection';

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
            'index' => Pages\ListUrbanSpaceProjects::route('/'),
            'create' => Pages\CreateUrbanSpaceProject::route('/create'),
            'edit' => Pages\EditUrbanSpaceProject::route('/{record}/edit'),
        ];
    }
}
