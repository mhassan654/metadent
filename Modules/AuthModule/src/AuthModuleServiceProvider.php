<?php

namespace Metadent\AuthModule;

use Illuminate\Support\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'auth-module');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth-module');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutes();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('auth-module.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/auth-module'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/auth-module'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/auth-module'),
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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'auth-module');

        // Register the main class to use with the facade
        $this->app->singleton('auth-module', function () {
            return new AuthModule;
        });
    }


    /**
     * Load api routes
     */
    private function loadRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/auth.php');
    }
}
