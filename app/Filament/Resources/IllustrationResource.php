<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IllustrationResource\Pages;
use App\Filament\Resources\IllustrationResource\RelationManagers;
use App\Models\Illustration;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IllustrationResource extends Resource
{
    protected static ?string $model = Illustration::class;

    protected static ?string $navigationGroup = 'Projets';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';
    protected static ?string $activeNavigationIcon = 'heroicon-s-pencil-alt';

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
            'index' => Pages\ListIllustrations::route('/'),
            'create' => Pages\CreateIllustration::route('/create'),
            'edit' => Pages\EditIllustration::route('/{record}/edit'),
        ];
    }
}
