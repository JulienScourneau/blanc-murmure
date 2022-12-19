<?php

namespace App\Models;

use App\Traits\PhotosTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    use HasFactory, PhotosTrait;

    protected $guarded = [];

    protected $casts = [
        'photo_list' => 'array',
    ];

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'photo_illustrations', 'illustrations_id', 'photos_id');
    }

//    protected $dispatchesEvents = [
//        'updated' => IllustrationUpdated::class,
//        'deleted' => IllustrationDeleted::class,
//    ];

}
