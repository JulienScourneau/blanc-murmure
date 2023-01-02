<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait PhotosListTrait
{
    public static function bootPhotosListTrait()
    {
        static::updated(function ($model) {
           if (isset($model->getChanges()['thumbnail'])) {
           Storage::disk('public')->delete($model->getOriginal()['thumbnail']);
        }
            $diff = array_diff($model->getOriginal()["photo_list"], json_decode($model->getChanges()["photo_list"]));
            foreach ($diff as $photo) {
                Storage::disk('public')->delete($photo);
//                dd($photo);
            }
//           dd('Trait', $model->getOriginal());
        });

        static::deleted(function ($model) {
            dd('deleted', $model->getOriginal());
        });
    }
}
