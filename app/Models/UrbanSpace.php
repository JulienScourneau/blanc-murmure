<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanSpace extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'photo_urbanspaces', 'urban_spaces_id', 'photos_id');
    }

    public function urbanSpaceProject()
    {
        return $this->belongsTo(UrbanSpaceProject::class);
    }
}
