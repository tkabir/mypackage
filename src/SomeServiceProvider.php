<?php

namespace Tkabir\Somepackage;

use Illuminate\Support\ServiceProvider;

class SomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Route
        include __DIR__.'/routes.php';

        //Language
        $this->loadTranslationsFrom( __DIR__.'/Lang', 'somepackage');

        $this->publishes([
            __DIR__.'/Config/somepackage.php' => config_path('somepackage.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/Config/somepackage.php', 'somepackage');

        // View
        $this->loadViewsFrom(__DIR__ . '/Views', 'somepackage');

        $this->app['somepackage'] = $this->app->share(function($app) {
            return new Somepackage;
        });
        
        //publish the view to the app
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/somepackage'),
        ]);
    }
}
