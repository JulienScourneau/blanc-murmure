<?php

namespace App\Observers;

use App\Models\NewsPhoto;
use Illuminate\Support\Facades\Storage;

class NewsObserver
{
    /**
     * Handle the NewsPhoto "updated" event.
     *
     * @param \App\Models\NewsPhoto $newsPhoto
     * @return void
     */
    public function updated(NewsPhoto $newsPhoto)
    {

        Storage::disk('public')->delete($newsPhoto->getOriginal('path'));
    }

}
