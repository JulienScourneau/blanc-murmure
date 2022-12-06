<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsPhotoResource\Pages;
use App\Filament\Resources\NewsPhotoResource\RelationManagers;
use App\Models\NewsPhoto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class NewsPhotoResource extends Resource
{
    protected static ?string $model = NewsPhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')->label('Photo')->image()->directory('images')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('path')->label('Photo')->size(100)
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
            'index' => Pages\ListNewsPhotos::route('/'),
            'create' => Pages\CreateNewsPhoto::route('/create'),
            'edit' => Pages\EditNewsPhoto::route('/{record}/edit'),
        ];
    }
}
