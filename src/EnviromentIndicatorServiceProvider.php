<?php

namespace NedalNetwork\EnviromentIndicator;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use NedalNetwork\EnviromentIndicator\View\Components\EnviromentIndicator;

class EnviromentIndicatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('enviroment-indicator', EnviromentIndicator::class);
    }
}
