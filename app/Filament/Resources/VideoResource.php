<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $breadcrumb = 'Vidéos';
    protected static ?string $navigationLabel = 'Vidéos';
    protected static ?string $slug = 'videos';

    protected static ?string $navigationIcon = 'heroicon-o-film';
    protected static ?string $activeNavigationIcon = 'heroicon-s-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label('Titre')->required()->reactive()
                        ->afterStateUpdated(function (Closure $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    Forms\Components\Hidden::make('slug'),
                    Forms\Components\TextInput::make('description')->label('Description')->required(),
                    Forms\Components\TextInput::make('link')->label('Lien')->required(),
                    Forms\Components\FileUpload::make('thumbnail')->label('Photo de couverture')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),
                    Forms\Components\TimePicker::make('duration')->label('Durée')->format('i:s'),
                    Forms\Components\TextInput::make('author')->label('Auteur'),
                    Forms\Components\TextInput::make('partnership')->label('Partenaire'),
                    Forms\Components\TextInput::make('year')->label('Année')->numeric(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nom')->sortable()->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('description')->label('Description')->wrap()->disableClick()->html(),
                Tables\Columns\TextColumn::make('link')->label('Lien')->wrap()->disableClick(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Photo')->size(150)->disableClick(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
