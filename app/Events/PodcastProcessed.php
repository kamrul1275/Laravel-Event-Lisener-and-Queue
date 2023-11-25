<?php

namespace App\Events;

use App\Models\Email;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PodcastProcessed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    // public $data;
    // public function __construct($data)
    // {
       
    //     $this->data=$data;
    //     //dd($data);
    // }


    public $request;

    public function __constructEmail ($request)
    {
       $this->request=$request;
    }

    /**
     * Create a new message instance.
     *
     * @return void
     */
  

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
