<?php

namespace Mach3builders\Ui;

use Illuminate\Support\Facades\View;
use \Illuminate\Http\RedirectResponse;
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
            return $this->app->make('Mach3builders\Ui\Alert');
        });

        $this->app->singleton('notify', function ($app) {
            return $this->app->make('Mach3builders\Ui\Notify');
        });
        
        RedirectResponse::macro('alert', function () {
            alert(...func_get_args());
            return $this;
        });

        RedirectResponse::macro('notify', function () {
            notify(...func_get_args());
            return $this;
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views/components', 'ui');

        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'ui');
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
