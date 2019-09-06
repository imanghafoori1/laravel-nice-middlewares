<?php

namespace Imanghafoori\NiceMiddlewares;

use Illuminate\Support\ServiceProvider;

class NiceMiddlewaresServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cacherPipe', CacheMiddleware::class);
        $this->app->singleton('memo', Memoizer::class);
    }
}
