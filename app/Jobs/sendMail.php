<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Events\PodcastProcessed;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $request;

    public function __construct($request)
    {
       $this->request=$request;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->request->email)->send(new WelcomeEmail($this->request->email));

    }
}
