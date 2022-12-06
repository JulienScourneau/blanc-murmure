<?php

namespace App\Filament\Resources\HomePhotoResource\Pages;

use App\Filament\Resources\HomePhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomePhoto extends CreateRecord
{
    protected static string $resource = HomePhotoResource::class;
}
