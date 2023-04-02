<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogResource\Pages;
use App\Filament\Resources\CatalogResource\RelationManagers;
use App\Models\Catalog;
use Filament\Forms;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static ?string $breadcrumb = 'Livres';
    protected static ?string $navigationLabel = 'Livres';
    protected static ?string $slug = 'livres';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $activeNavigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label('Nom')->unique(ignoreRecord: true)->required(),
                    Forms\Components\TextInput::make('description')->label('Description')->required(),
                    Forms\Components\TextInput::make('link')->label('Lien')->required(),
                    Forms\Components\TextInput::make('page_number')->label('Nombre de page')->numeric()->required(),
                    Forms\Components\TextInput::make('size')->label('Taille')->prefix("Format '00 x 00'")->required(),
                    Forms\Components\FileUpload::make('thumbnail')->label('Photo')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nom')->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(80)->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('page_number')->label('Nombre de page')->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('size')->label('Taille')->disableClick(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Photo')->size(150)->disableClick(),
            ])->defaultSort('created_at','desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListCatalogs::route('/'),
            'create' => Pages\CreateCatalog::route('/create'),
            'edit' => Pages\EditCatalog::route('/{record}/edit'),
        ];
    }
}
