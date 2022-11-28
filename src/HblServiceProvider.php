<?php

namespace Bickyraj\Hbl;

use Illuminate\Support\ServiceProvider;

class HblServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Bickyraj\Hbl\Controllers\HblController');
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php','hbl'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'hbl');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/bickyraj'),
            __DIR__ . '/assets' => public_path('assets/bickyraj'),
        ]);
        $this->publishes([
          __DIR__.'/config/config.php' => config_path('hbl.php'),
        ], 'config');
    }
}
