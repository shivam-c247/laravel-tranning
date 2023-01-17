<?php

namespace App\Listeners;

use App\Events\LoginInfo;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\LoginInfoMail;
use Illuminate\Queue\InteractsWithQueue;

class LoginInfoNotification
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
     * @param  \App\Events\LoginInfo  $event
     * @return void
     */
    public function handle(LoginInfo $event)
    {
        //
        
        \Mail::to($event->user->email)->send(
            new LoginInfoMail($event->user)
        );
    
    }
}
