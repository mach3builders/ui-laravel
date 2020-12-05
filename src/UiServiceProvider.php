<?php

namespace Mach3Builders\UI;

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
            return $this->app->make('Mach3Builders\UI\Alert');
        });

        $this->app->singleton('notify', function ($app) {
            return $this->app->make('Mach3Builders\UI\Notify');
        });

        $this->app->singleton('toast', function ($app) {
            return $this->app->make('Mach3Builders\UI\Toast');
        });
        
        RedirectResponse::macro('alert', function () {
            alert(...func_get_args());
            return $this;
        });

        RedirectResponse::macro('notify', function () {
            notify(...func_get_args());
            return $this;
        });

        RedirectResponse::macro('toast', function () {
            toast(...func_get_args());
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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ui');

        $this->publishes([
            __DIR__.'/../config/ui.php' => config_path('ui.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/img' => public_path('img/vendor/ui'),
        ], 'public');

        $this->bootComposers();

        // if ($this->app->runningInConsole()) {
        //     $this->commands([
        //         UiInstallCommand::class,
        //     ]);
        // }
    }

    /**
     * Boot the view composers
     *
     * @return void
     */
    protected function bootComposers()
    {
        View::composer('ui::form.errors', function ($view) {
            $view->with(array_merge(
                ['message' => true, 'details' => false],
                $view->getData()
            ));
        });
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
            'toast',
        ];
    }
}
