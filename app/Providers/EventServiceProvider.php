<?php

namespace Zeropingheroes\Lanager\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'SocialiteProviders\Manager\SocialiteWasCalled' => [
            'SocialiteProviders\Steam\SteamExtendSocialite@handle',
        ],
        'Illuminate\Auth\Events\Login' => [
            'Zeropingheroes\Lanager\Listeners\UpdateLanAttendeesTable',
            'Zeropingheroes\Lanager\Listeners\CheckAndUpdateSteamUserApps',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
