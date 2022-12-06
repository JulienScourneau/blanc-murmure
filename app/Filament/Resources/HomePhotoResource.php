<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePhotoResource\Pages;
use App\Filament\Resources\HomePhotoResource\RelationManagers;
use App\Models\HomePhoto;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class HomePhotoResource extends Resource
{
    protected static ?string $model = HomePhoto::class;

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
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('path')
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
            'index' => Pages\ListHomePhotos::route('/'),
            'create' => Pages\CreateHomePhoto::route('/create'),
            'edit' => Pages\EditHomePhoto::route('/{record}/edit'),
        ];
    }
}
