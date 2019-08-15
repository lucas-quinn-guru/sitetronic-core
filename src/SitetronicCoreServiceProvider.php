<?php

namespace LucasQuinnGuru\SitetronicCore;

use Illuminate\Support\ServiceProvider;

class SitetronicCoreServiceProvider extends ServiceProvider
{

    protected $commands = [
        //'LucasQuinnGuru\SitetronicUser\Commands\SeedRolesAndPermissionsCommand'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sitetronic-core.php',
            'sitetronic-core'
        );

        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitetronic-core');

        $this->app['router']
            ->aliasMiddleware('isAdmin', \LucasQuinnGuru\SitetronicCore\Middleware\AdminMiddleware::class);
        $this->app['router']
            ->aliasMiddleware('clearance', \LucasQuinnGuru\SitetronicCore\Middleware\ClearanceMiddleware::class);


        $this->publishes([
            __DIR__ . '/../config/sitetronic-core.php' => config_path('sitetronic-core.php'),
        ], 'sitetronic-core-config');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/lucas-quinn-guru'),
        ], 'assets');
    }
}
