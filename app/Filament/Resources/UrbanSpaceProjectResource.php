<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrbanSpaceProjectResource\Pages;
use App\Filament\Resources\UrbanSpaceProjectResource\RelationManagers;
use App\Models\UrbanSpaceProject;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class UrbanSpaceProjectResource extends Resource
{
    protected static ?string $model = UrbanSpaceProject::class;
    protected static ?string $navigationLabel = 'Projet Espace Urbain';
    protected static ?string $breadcrumb = 'Projet Espace Urbain';
    protected static ?string $slug = 'projet-espace-urbain';

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $activeNavigationIcon = 'heroicon-s-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label('Nom du projet')->unique(ignoreRecord: true)
                        ->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        })
                        ->required(),
                    Forms\Components\Hidden::make('slug')->label('Lien')->disabled(),
                    TinyEditor::make('description')->profile('simple')->required(),
                    Forms\Components\FileUpload::make('thumbnail')->label('Photo de couverture')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nom')->disableClick(),
                Tables\Columns\TextColumn::make('description')->label('Description')->wrap()->disableClick()->html(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Photo')->width(200)->height(150)->square()->disableClick(),
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
            'index' => Pages\ListUrbanSpaceProjects::route('/'),
            'create' => Pages\CreateUrbanSpaceProject::route('/create'),
            'edit' => Pages\EditUrbanSpaceProject::route('/{record}/edit'),
        ];
    }
}
