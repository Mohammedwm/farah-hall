<?php

namespace App\Listeners;

use App\Events\HallCreated;
use App\Models\User;
use App\Notifications\AddNewHallNotification as NotificationsAddNewHallNotification;

class AddNewHallNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(HallCreated $event)
    {
        $hall = $event->hall;

        $users = User::where('type','admin')->get();
        foreach ($users as $user) {
            $user->notify(new NotificationsAddNewHallNotification($hall));
        }

    }
}
