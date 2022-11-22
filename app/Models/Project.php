<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->belongsToMany(Photo::class,'photo_projects','projects_id', 'photos_id');
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class,'project_category_id');
    }
}
