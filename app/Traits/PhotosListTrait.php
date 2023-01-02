<?php

namespace App\Traits;

trait PhotosListTrait
{
    public static function bootPhotosTrait()
    {
        static::updated(function ($model) {
<<<<<<< HEAD:app/Traits/PhotosTrait.php
        //    dd('Trait', $model->getOriginal());
=======
//           dd('Trait', $model->getOriginal());
>>>>>>> e0468f7789657fe39854a72950d652187e60db08:app/Traits/PhotosListTrait.php
        });
    }
}
