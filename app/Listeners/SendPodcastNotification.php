<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class SendPodcastNotification 
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(PodcastProcessed $event): void
    {
        $data = $event->data;
 
        Mail::to($data->email)->send(new WelcomeEmail($data));
    }
}
