<?php

namespace App\Models;

use App\Events\NewsPhotoDeleted;
use App\Events\NewsPhotoUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPhoto extends Model
{
    use HasFactory;

    protected $guarded = [''];
}
