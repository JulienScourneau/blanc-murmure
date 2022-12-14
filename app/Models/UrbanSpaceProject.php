<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanSpaceProject extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function urbanSpace()
    {
        return $this->hasMany(UrbanSpace::class);
    }

    public function transformTitle()
    {
        return str_replace(' ', '_', $this->title);
    }
}
