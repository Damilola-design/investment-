<?php

namespace App\Listeners;

use App\Events\UserResgisterEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;


class SendWelcomeEmailListener
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

    /**
     * Handle the event.
     *
     * @param  UserResgisterEvent  $event
     * @return void
     */
    public function handle(UserResgisterEvent $event)
    {
        // dd($event->user);
        Mail::to($event->user)->send(new WelcomeEmail($event->user));

    }
}
