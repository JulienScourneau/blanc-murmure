<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePhotoResource\Pages;
use App\Filament\Resources\HomePhotoResource\RelationManagers;
use App\Models\HomePhoto;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class HomePhotoResource extends Resource
{
    protected static ?string $model = HomePhoto::class;

    protected static ?string $navigationGroup = 'Accueil';
    protected static ?string $breadcrumb = 'Accueil';
    protected static ?string $navigationLabel = 'Accueil';
    protected static ?string $slug = 'accueil';

    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $activeNavigationIcon = 'heroicon-s-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    FileUpload::make('path')->label('Photo')->image()->directory('images')->imagePreviewHeight('300')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nom')->disableClick(),
                Tables\Columns\ImageColumn::make('path')->label('Photo')->width(200)->height(150)->square()->disableClick()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomePhotos::route('/'),
            'edit' => Pages\EditHomePhoto::route('/{record}/edit'),
        ];
    }
}
