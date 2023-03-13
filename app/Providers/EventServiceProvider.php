<?php

namespace App\Providers;

use App\Models\HomePhoto;
use App\Models\NewsPhoto;
use App\Models\UrbanSpace;
use App\Observers\HomeObserver;
use App\Observers\NewsObserver;
use App\Observers\UrbanSpaceObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        NewsPhoto::observe(NewsObserver::class);
        HomePhoto::observe(HomeObserver::class);
        UrbanSpace::observe(UrbanSpaceObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
