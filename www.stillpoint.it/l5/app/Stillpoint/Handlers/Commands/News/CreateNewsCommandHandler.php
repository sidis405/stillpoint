<?php

namespace Stillpoint\Handlers\Commands\News;

use Stillpoint\Commands\News\CreateNewsCommand;
use Stillpoint\Models\News;
use Illuminate\Queue\InteractsWithQueue;
use Stillpoint\Repositories\NewsRepo;
use Stillpoint\Events\News\NewsWasCreated;
use Event;


class CreateNewsCommandHandler
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
     * @param  CreateNewsCommand  $command
     * @return void
     */
    public function handle(CreateNewsCommand $command)
    {
        $news_object = News::make();

        $news = $this->repo->save($news_object);

        Event::fire(new NewsWasCreated($news));

        return $news;

    }
}
