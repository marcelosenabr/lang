<?php

namespace I9w3b\Lang;

use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->regConfig();
        $this->regViews();
        $this->regMiddleware();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    public function regConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('lang.php'),
        ], 'multilingual-config');
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'lang');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function regViews()
    {
        $viewPath = resource_path('views/vendor/multilingual');
        $sourcePath = __DIR__ . '/Resources/views';
        $this->publishes([
            $sourcePath => $viewPath
        ],'multilingual-views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/vendor/multilingual';
        }, \Config::get('view.paths')), [$sourcePath]), 'multilingual');
    }

    /**
     * Register middleware.
     *
     * @return void
     */
    public function regMiddleware()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', 'I9w3b\Lang\Http\Middleware\Lang');
    }

}
