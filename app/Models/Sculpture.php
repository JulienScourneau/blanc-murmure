<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sculpture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'photo_list' => 'array',
    ];
}
