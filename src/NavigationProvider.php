<?php

namespace Atin\LaravelNavigation;

use Illuminate\Support\ServiceProvider;

class NavigationProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-navigation');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-navigation');
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-navigation');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-navigation')
        ], 'laravel-navigation-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-navigation'),
        ], 'laravel-navigation-lang');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-navigation.php')
        ], 'laravel-navigation-config');
    }
}