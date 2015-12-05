<?php

namespace Stillpoint\Handlers\Commands\News;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Stillpoint\Commands\News\UpdateNewsCommand;
use Stillpoint\Events\News\NewsWasUpdated;
use Stillpoint\Models\News;
use Stillpoint\Repositories\NewsRepo;


class UpdateNewsCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(NewsRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateNewsCommand  $command
     * @return void
     */
    public function handle(UpdateNewsCommand $command)
    {
        $news_object = News::edit(
            $command->news_id,
            $command->title,
        str_slug($command->title),
        $command->excerpt,
        $command->body,
        $command->featured_image_id
            );

        $news = $this->repo->save($news_object);

        Event::fire(new NewsWasUpdated($news));

        return $news;
    }
}
