<?php

namespace App\Filament\Resources;

use App\Filament\RelationManagers\PhotosRelationManager;
use App\Filament\Resources\SculptureResource\Pages;
use App\Filament\Resources\SculptureResource\RelationManagers;
use App\Models\Sculpture;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SculptureResource extends Resource
{
    protected static ?string $model = Sculpture::class;

    protected static ?string $navigationGroup = 'Projets';

    protected static ?string $breadcrumb = 'Sculptures';
    protected static ?string $navigationLabel = 'Sculptures';
    protected static ?string $slug = 'sculptures';

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $activeNavigationIcon = 'heroicon-s-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label('Nom du projet')->required(),
                    Forms\Components\TextInput::make('subtitle')->label('Sous titre'),
                    TinyEditor::make('description')->label('Description'),
                    Forms\Components\TextInput::make('partnership')->label('Partenaire'),
                    Forms\Components\TextInput::make('date')->label('Date'),
                    FileUpload::make('thumbnail')->label('Photo')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),

                ]),
                Forms\Components\Card::make()->schema([
                    Forms\Components\Repeater::make('photos')
                        ->relationship()
                        ->schema([
                            Forms\Components\FileUpload::make('path')
                                ->label('Photo')
                                ->image()
                                ->directory('images')
                                ->required(),
                            Forms\Components\TextInput::make('alt')->label('Description')->required(),
                        ])->createItemButtonLabel('Ajouter une photo')
                        ->grid(2)
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
                    ->action(function (Sculpture $record): void {
                        $record->photos()->each(function ($photo) {
                            $photo->delete();
                        });
                        $record->delete();
                    })
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PhotosRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSculptures::route('/'),
            'create' => Pages\CreateSculpture::route('/create'),
            'edit' => Pages\EditSculpture::route('/{record}/edit'),
        ];
    }
}
