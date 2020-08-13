<?php

namespace App\Listeners\Users;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserChannelListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {   // Channel created when user register's / is created
        $event->user->channel()->create([
            // Channel is the user's name
            'name' => $event->user->name,
        ]);
    }
}
