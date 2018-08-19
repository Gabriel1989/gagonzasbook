<?php

namespace App\Listeners;

use App\Events\MessageChatReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class listenNewChatMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
   

    /**
     * Handle the event.
     *
     * @param  MessageChatReceived  $event
     * @return void
     */
    public function handle(MessageChatReceived $event)
    {
        
        $message = $event->message;
        
       
    }
}
