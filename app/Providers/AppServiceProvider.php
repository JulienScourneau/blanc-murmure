<?php

namespace App\Providers;

use App\Filament\Resources\CatalogResource;
use App\Filament\Resources\EventResource;
use App\Filament\Resources\HomePhotoResource;
use App\Filament\Resources\IllustrationResource;
use App\Filament\Resources\InternshipResource;
use App\Filament\Resources\NewsPhotoResource;
use App\Filament\Resources\SculptureResource;
use App\Filament\Resources\UrbanSpaceProjectResource;
use App\Filament\Resources\UrbanSpaceResource;
use App\Filament\Resources\VideoResource;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') == 'production') URL::forceScheme('https');
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder
                ->items([
                    NavigationItem::make('Tableau de bord')
                        ->icon('heroicon-o-home')
                        ->activeIcon('heroicon-s-home')
                        ->isActiveWhen(fn(): bool => request()->routeIs('filament.pages.dashboard'))
                        ->url(route('filament.pages.dashboard')),
                ])
                ->groups([
                    NavigationGroup::make('Ateliers, Événements et Stages')
                        ->items([
                            ...InternshipResource::getNavigationItems(),
                            ...EventResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Photos')
                        ->items([
                            ...HomePhotoResource::getNavigationItems(),
                            ...NewsPhotoResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Projets')
                        ->items([
                            ...CatalogResource::getNavigationItems(),
                            ...IllustrationResource::getNavigationItems(),
                            ...SculptureResource::getNavigationItems(),
                            ...VideoResource::getNavigationItems(),
                            NavigationGroup::make('Espace Urbain')
                                ->items([
                                    ...UrbanSpaceProjectResource::getNavigationItems(),
                                    ...UrbanSpaceResource::getNavigationItems(),
                                ])
                        ]),
                ]);
        });

    }
}
