<?php

namespace Vcian\LaravelDataScraping\Providers;

use Illuminate\Support\ServiceProvider;

class ScrapingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/data-scraping.php', 'data-scraping'
        );
        $this->publishes([
            __DIR__.'/../../config/data-scraping.php' => config_path('data-scraping.php'),
        ], 'data-scraping-config');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'data-scraping');
    }
}
