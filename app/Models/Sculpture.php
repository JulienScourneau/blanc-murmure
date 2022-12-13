<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sculpture extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'photo_sculptures', 'sculptures_id', 'photos_id');
    }
}
