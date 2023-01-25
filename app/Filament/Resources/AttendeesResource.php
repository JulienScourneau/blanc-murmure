<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendeesResource\Pages;
use App\Filament\Resources\AttendeesResource\RelationManagers;
use App\Models\Attendees;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class AttendeesResource extends Resource
{
    protected static ?string $model = Attendees::class;

    protected static ?string $navigationGroup = 'Ateliers, Événements et Stages';

    protected static ?string $breadcrumb = 'Participants';
    protected static ?string $navigationLabel = 'Participants';
    protected static ?string $slug = 'participants';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $activeNavigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('last_name')->label('Nom')->required(),
                    Forms\Components\TextInput::make('first_name')->label('Prénom')->required(),
                    Forms\Components\TextInput::make('email')->label('Adresse Email')->email()->required(),
                    Forms\Components\Select::make('internship_id')->label('Stage')
                        ->relationship('internship', 'title'),
                    Forms\Components\DatePicker::make('date_birth')->label('Date de naissance')->required(),
                    Forms\Components\TextInput::make('parent_name')->label('Nom du parent'),
                    Forms\Components\TextInput::make('relationship')->label('Lien de parenté'),
                    Forms\Components\TextInput::make('address')->label('Adresse')->required(),
                    Forms\Components\TextInput::make('postal_code')->label('Code postal')->required(),
                    Forms\Components\TextInput::make('city')->label('Ville')->required(),
                    Forms\Components\TextInput::make('phone_number')->label('Numéro de téléphone')->required(),
                    Forms\Components\Radio::make('right_to_image')->label("Droit à l'image")->options([
                        'oui'=>'Oui',
                        'non'=>'Non',
                    ])->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
                TextColumn::make('internship.title')->limit(20)->sortable(),
            ])->defaultSort('created_at','desc')
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
            'index' => Pages\ListAttendees::route('/'),
            'create' => Pages\CreateAttendees::route('/create'),
            'edit' => Pages\EditAttendees::route('/{record}/edit'),
        ];
    }
}
