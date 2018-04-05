<?php

namespace Mahdinickdel\Reminders;

use Illuminate\Support\ServiceProvider;

class RemindersServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    public function register()
    {
    }
}