<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use App\Mail\WelcomeEmail;
use FTP\Connection;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class SendPodcastNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    


    public $request;

    public function __construct($request)
    {
       $this->request=$request;
    }

    public function handle(PodcastProcessed $event): void
    {
        $request = $event->request;

       
    }
}
