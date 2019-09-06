<?php

use Illuminate\Support\ServiceProvider;
use Imanghafoori\NiceMiddlewares\Memoizer;
use Imanghafoori\NiceMiddlewares\CacheMiddleware;

class NiceMiddlewaresServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cacherPipe', CacheMiddleware::class);
        $this->app->singleton('memo', Memoizer::class);
    }
}