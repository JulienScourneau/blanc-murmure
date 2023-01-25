<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Date;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationGroup = 'Ateliers, Événements et Stages';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $activeNavigationIcon = 'heroicon-s-calendar';

    protected static ?string $breadcrumb = 'Événements';
    protected static ?string $navigationLabel = 'Événements';
    protected static ?string $slug = 'evenements';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('title')->label('Titre')->required(),
                    Forms\Components\TextInput::make('subtitle')->label('Sous titre'),
                    Forms\Components\DatePicker::make('begin_at')->label('Date de début')
                        ->after('tomorrow')
                        ->required(),
                    Forms\Components\DatePicker::make('end_at')->label('Date de fin')
                        ->afterOrEqual('begin_at'),
                    Forms\Components\FileUpload::make('thumbnail')->label('Photo')
                        ->image()->directory('images')->imagePreviewHeight('300')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Titre')->color('primary')->wrap()->disableClick(),
                Tables\Columns\TextColumn::make('subtitle')->label('Sous titre')->wrap()->disableClick(),
                ImageColumn::make('thumbnail')->label('Photo')->width(200)->square()->disableClick(),
                Tables\Columns\TextColumn::make('begin_at')->label('Date de début')->date('d F Y')->disableClick(),
                Tables\Columns\TextColumn::make('end_at')->label('Date de fin')->date('d F Y')->disableClick(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
