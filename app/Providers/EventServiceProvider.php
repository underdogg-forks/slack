<?php

namespace App\Providers;

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
        \App\Events\UserRegistered::class => [
            \App\Listeners\DownloadGravatarImage::class,
        ],
        \App\Events\EmailUpdated::class => [
            \App\Listeners\DownloadGravatarImage::class,
        ],
        \App\Events\ChannelJoined::class => [
            \App\Listeners\SendInformationMessage::class,
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
