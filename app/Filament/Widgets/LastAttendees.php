<?php

namespace App\Filament\Widgets;

use App\Models\Attendees;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LastAttendees extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Dernières inscriptions';

    protected function getTableQuery(): Builder
    {
        return Attendees::query()->latest()->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('last_name')->label('Nom'),
            TextColumn::make('first_name')->label('Prénom'),
            TextColumn::make('internship.title')->label('Stage'),
            TextColumn::make('email')->label('Email'),
            TextColumn::make('phone_number')->label('Téléphone'),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
