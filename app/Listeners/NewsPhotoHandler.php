<?php

namespace App\Listeners;

use App\Events\NewsPhotoDeleted;
use App\Events\NewsPhotoUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsPhotoHandler implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public $listen = [
        'App\Events\NewsPhotoDeleted' => 'handleNewsPhotoDeleted',
        'App\Events\NewsPhotoUpdated' => 'handleNewsPhotoUpdated',
    ];

    public function handleNewsPhotoDeleted(NewsPhotoDeleted $event)
    {
        dd($event);
    }

    public function handleNewsPhotoUpdated(NewsPhotoUpdated $event)
    {
        // Code à exécuter lorsqu'une image est mise à jour en base de données
    }
}
