<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsPhotoResource\Pages;
use App\Filament\Resources\NewsPhotoResource\RelationManagers;
use App\Models\NewsPhoto;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class NewsPhotoResource extends Resource
{
    protected static ?string $model = NewsPhoto::class;

    protected static ?string $navigationGroup = "Mercredi s'éveille";
    protected static ?string $breadcrumb = "Mercredi s'éveille";
    protected static ?string $navigationLabel = "Mercredi s'éveille";
    protected static ?string $slug = "mercredi-s-eveille";

    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static ?string $activeNavigationIcon = 'heroicon-s-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\FileUpload::make('path')->label('Photo')->image()->directory('images')->imagePreviewHeight('300')
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
            'index' => Pages\ListNewsPhotos::route('/'),
            'edit' => Pages\EditNewsPhoto::route('/{record}/edit'),
        ];
    }
}
