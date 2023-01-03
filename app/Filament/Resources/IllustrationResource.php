<?php

namespace App\Filament\Resources;

use App\Filament\RelationManagers\PhotosRelationManager;
use App\Filament\Resources\IllustrationResource\Pages;
use App\Filament\Resources\IllustrationResource\RelationManagers;
use App\Models\Illustration;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

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
                    Forms\Components\TextInput::make('title')->label('Nom du projet')->required(),
                    Forms\Components\TextInput::make('subtitle')->label('Sous titre'),
                    TinyEditor::make('description')->profile('simple')->label('Description'),
                    Forms\Components\TextInput::make('partnership')->label('Partenaire'),
                    Forms\Components\TextInput::make('date')->label('Période'),
                    FileUpload::make('thumbnail')->label('Photo de couverture')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),

                ]),
                Forms\Components\Card::make()->schema([
                    FileUpload::make('photo_list')
                        ->multiple()
                        ->enableReordering()
                        ->label('Photos')
                        ->image()
                        ->directory('images'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nom')->sortable()->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('subtitle')->label('Sous titre')->sortable()->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('description')->label('Description')->sortable()->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('partnership')->label('Partenaire')->sortable()->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('date')->label('Date')->sortable()->wrap()->disableClick(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Photo de couverture')->size(150),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
