<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanSpace extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function urbanSpaceProject()
    {
        return $this->belongsTo(UrbanSpaceProject::class);
    }

    protected $casts = [
        'photo_list' => 'array',
    ];
}
