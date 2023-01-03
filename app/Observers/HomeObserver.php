<?php

namespace App\Observers;

use App\Models\HomePhoto;
use Illuminate\Support\Facades\Storage;

class HomeObserver
{
    /**
     * Handle the HomePhoto "updated" event.
     *
     * @param \App\Models\HomePhoto $homePhoto
     * @return void
     */
    public function updated(HomePhoto $homePhoto)
    {
        Storage::disk('public')->delete($homePhoto->getOriginal('path'));
    }

}
