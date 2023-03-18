<?php

namespace App\Providers;

use App\Events\ClubEvent;
use App\Events\CourseEvent;
use App\Events\EnrollmentEvent;
use App\Events\LoanEvent;
use App\Events\PaymentEvent;
use App\Listeners\ClubListener;
use App\Listeners\CourseListener;
use App\Listeners\EnrollmentListener;
use App\Listeners\LoanListener;
use App\Listeners\PaymentListener;
use App\Models\Enrollment;
use App\Observers\EnrollmentObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PaymentEvent::class => [
            PaymentListener::class,
        ],
        LoanEvent::class => [
            LoanListener::class,
        ],
        EnrollmentEvent::class => [
            EnrollmentListener::class,
        ],
        CourseEvent::class => [
            CourseListener::class,
        ],
        ClubEvent::class => [
            ClubListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Enrollment::observe(EnrollmentObserver::class);
    }
}
