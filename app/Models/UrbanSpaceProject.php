<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanSpaceProject extends Model
{
    use HasFactory;

    public function urbanSpace()
    {
        return $this->hasMany(UrbanSpace::class);
    }
}