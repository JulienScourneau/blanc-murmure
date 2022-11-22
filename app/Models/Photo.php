<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(Project::class,'photo_project','photos_id', 'projects_id');
    }
}
