<?php

namespace App\Listeners;

use App\Events\NewLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class popUpBox
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
     * @param  NewLogin  $event
     * @return void
     */
    public function handle(NewLogin $event)
    {
        //
    }
}
