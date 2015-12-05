<?php

namespace Stillpoint\Commands\News;

use Stillpoint\Commands\Command;

class UpdateNewsCommand extends Command
{

      public $title;
      public $excerpt;
      public $body;
      public $featured_image_id;
      public $news_id;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($title, $excerpt, $body, $featured_image_id, $news_id)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->featured_image_id = $featured_image_id;
        $this->news_id = $news_id;
    }
}
