<?php

namespace App\Models;

use App\Traits\PhotosListTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory, PhotosListTrait;

    protected $guarded = [''];
}
