<?php

namespace App\Traits;

trait PhotosListTrait
{
    public static function bootPhotosTrait()
    {
        static::updated(function ($model) {
//           dd('Trait', $model->getOriginal());
        });
    }
}
