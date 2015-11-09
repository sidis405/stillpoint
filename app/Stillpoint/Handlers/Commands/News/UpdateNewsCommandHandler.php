<?php

namespace Stillpoint\Handlers\Commands;

use Stillpoint\Commands\CreateTestCommand;
use Stillpoint\Models\News;
use Illuminate\Queue\InteractsWithQueue;
use Stillpoint\Repositories\NewsRepo;
use Stillpoint\Events\News\NewsWasUpdated;
use Events;


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
    public function handle(CreateNewsCommand $command)
    {
        $news_object = News::edit(
            $command->id,
            $command->title,
        $command->slug,
        $command->excerpt,
        $command->body,
        $command->featured_photo_id
            );

        $news = $this->repo->save($news_object);

        Event::fire(new NewsWasUpdated($news));

        return $news;
    }
}
