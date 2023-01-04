<?php

namespace App\Observers;

use App\Models\UrbanSpace;
use Illuminate\Support\Facades\Storage;

class UrbanSpaceObserver
{
    /**
     * Handle the UrbanSpace "updated" event.
     *
     * @param \App\Models\UrbanSpace $urbanSpace
     * @return void
     */
    public function updated(UrbanSpace $urbanSpace)
    {
        if (isset($urbanSpace->getChanges()['thumbnail_landscape']))
            Storage::disk('public')->delete($urbanSpace->getOriginal('thumbnail_landscape'));
        if (isset($urbanSpace->getChanges()['thumbnail_portrait']))
            Storage::disk('public')->delete($urbanSpace->getOriginal('thumbnail_portrait'));
        if (isset($urbanSpace->getChanges()['photo_list'])) {
            $diff = array_diff($urbanSpace->getOriginal()["photo_list"], json_decode($urbanSpace->getChanges()["photo_list"]));
            foreach ($diff as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }
//        dd($urbanSpace);
    }

    /**
     * Handle the UrbanSpace "deleted" event.
     *
     * @param \App\Models\UrbanSpace $urbanSpace
     * @return void
     */
    public function deleted(UrbanSpace $urbanSpace)
    {
        if (isset($urbanSpace->getChanges()['thumbnail_landscape']))
            Storage::disk('public')->delete($urbanSpace->getOriginal('thumbnail_landscape'));
        if (isset($urbanSpace->getChanges()['thumbnail_portrait']))
            Storage::disk('public')->delete($urbanSpace->getOriginal('thumbnail_portrait'));
        if (isset($urbanSpace->getOriginal()['photo_list'])) {
            foreach ($urbanSpace->getOriginal()['photo_list'] as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }
    }

}
