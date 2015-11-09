<?php

namespace Stillpoint\Events\News;

use Stillpoint\Events\Event;
use Stillpoint\Acam\Models\News;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewsWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
