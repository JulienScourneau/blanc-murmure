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

    protected static ?string $breadcrumb = 'Illustrations';
    protected static ?string $navigationLabel = 'Illstrations';
    protected static ?string $slug = 'illustrations';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';
    protected static ?string $activeNavigationIcon = 'heroicon-s-pencil-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title'),
                    Forms\Components\TextInput::make('subtitle'),
                    Forms\Components\TextInput::make('description'),
                    Forms\Components\TextInput::make('parternship'),
                    Forms\Components\TextInput::make('date'),

                ]),
                Forms\Components\Card::make()->schema([
                    Forms\Components\Repeater::make('photo')
                        ->relationship()
                        ->schema([
                        Forms\Components\FileUpload::make('path'),
                        Forms\Components\TextInput::make('alt'),
                    ])->createItemButtonLabel('Ajouter une photo')->grid(2)
                ])
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
