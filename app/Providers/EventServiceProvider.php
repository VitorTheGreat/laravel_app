<?php

namespace App\Providers;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],

        //For this event we have three listeners
        NewCustomerHasRegisteredEvent::class => [ //when this event here occurs, we have to run the listeners inside it either
            \App\Listeners\WelcomeNewCustomerListener::class,
            \App\Listeners\RegisterCustomerToNewsletterListener::class, //If we didn't created the listeners and wrote them here, laravel automatically create them for us
            \App\Listeners\NotifyViaSlackListener::class, //Passing the exadclty path here so it can generate the listeners for us, for that we need to run: php artisan event:generate
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
