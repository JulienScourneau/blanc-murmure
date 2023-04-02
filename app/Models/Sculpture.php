<?php

namespace App\Models;

use App\Traits\PhotosListTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sculpture extends Model
{
    use HasFactory, PhotosListTrait;

    protected $guarded = [];

    protected $casts = [
        'photo_list' => 'array',
    ];
}
