<?php

namespace SteadfastCollective\ApiVideo;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/api-video.php' => config_path('api-video.php'),
        ], 'api-video-config');

        $this->mergeConfigFrom(__DIR__ . '/../config/api-video.php', 'api-video');
    }

    public function register()
    {
        //
    }
}
