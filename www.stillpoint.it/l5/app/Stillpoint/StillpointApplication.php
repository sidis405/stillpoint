<?php

namespace Stillpoint;

use Illuminate\Foundation\Application;

class StillpointApplication extends Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'../';
    }
}
