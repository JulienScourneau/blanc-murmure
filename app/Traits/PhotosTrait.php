<?php

namespace App\Traits;

trait PhotosTrait
{
    public static function bootPhotosTrait()
    {
        static::updated(function ($model) {
//           dd('Trait', $model->getOriginal());
        });
    }
}
