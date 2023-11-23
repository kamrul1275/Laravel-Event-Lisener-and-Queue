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
    use InteractsWithQueue;

    public $tries = 5;


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
