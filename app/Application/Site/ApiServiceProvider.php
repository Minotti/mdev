<?php

namespace App\Application\Site;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'site');
    }

    public function register()
    {

    }

    public function registerRoutes(Router $router)
    {
        $router->group(['namespace' => 'App\Application\Site\Http\Controllers'], function ($router){
            require app_path('Application/Site/Http/routes.php');
        });
    }
}