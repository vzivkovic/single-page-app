<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as DebugBarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(DebugBarServiceProvider::class);
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
