<?php

namespace KonstantinFilin\LaraSettings\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $basepath = __DIR__.'/../../';
        //echo realpath($path); die;
        $this->loadMigrationsFrom($basepath . 'database/migrations');
        $this->loadRoutesFrom($basepath . 'routes/web.php');

        $this->loadViewsFrom($basepath . 'views', 'larasettings');
        
        if ($this->app->runningInConsole()) {
            $this->commands([
                \KonstantinFilin\LaraSettings\Console\Commands\Fixture::class
            ]);
        }
    }
}
