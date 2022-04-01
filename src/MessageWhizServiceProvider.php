<?php

namespace Rosemalejohn\MessageWhiz;

use Illuminate\Support\ServiceProvider;

class MessageWhizServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('messagewhiz', function () {
            return new MessageWhiz();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/messagewhiz.php' => config_path('messagewhiz.php'),
        ]);
    }
}
