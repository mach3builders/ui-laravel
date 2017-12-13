<?php

namespace Mach3builders\Ui;

use Mach3builders\Ui\Alert\Alert;
use Mach3builders\Ui\Notify\Notify;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('alert', function ($app) {
            return new Alert();
        });

        $this->app->singleton('notify', function ($app) {
            return new Notify();
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views', 'ui');
        $this->loadTranslationsFrom(__DIR__.'/../../translations', 'ui');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'alert',
            'notify',
        ];
    }
}