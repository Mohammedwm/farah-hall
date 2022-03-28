<?php

namespace App\Events;

use App\Models\Hall;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class HallCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $hall;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Hall $hall)
    {
        $this->hall = $hall;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
