<?php

namespace Stillpoint\Commands;

use Stillpoint\Commands\Command;

class CreateNewsCommand extends Command
{

    public $title;
      public $slug;
      public $excerpt;
      public $body;
      public $featured_photo_id;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($title, $slug, $excerpt, $body, $featured_photo_id)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->featured_photo_id = $featured_photo_id;
    }
}
