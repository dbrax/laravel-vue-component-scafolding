<?php

namespace Epmnzava\VueComponent;

use Epmnzava\VueComponent\Console\VueMakeComponentCommand;
use Illuminate\Support\ServiceProvider;

class VueComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        $this->commands([
            VueMakeComponentCommand::class,
        ]);

        /*

         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-vue-component-scafolding');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-vue-component-scafolding');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-vue-component-scafolding.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-vue-component-scafolding'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-vue-component-scafolding'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-vue-component-scafolding'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-vue-component-scafolding');

        // Register the main class to use with the facade
        //  $this->app->singleton('vue-component', function () {
        //       return new VueComponent;
        //  });
    }
}
