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
            if (isset($model->getChanges()['photo_list'])) {
                $diff = array_diff($model->getOriginal()["photo_list"], json_decode($model->getChanges()["photo_list"]));
                foreach ($diff as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
        });

        static::deleted(function ($model) {
            if (isset($model->getOriginal()['thumbnail']))
                Storage::disk('public')->delete($model->getOriginal()['thumbnail']);
            if (isset($model->getOriginal()['photo_list'])) {
                foreach ($model->getOriginal()['photo_list'] as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
        });
    }
}
