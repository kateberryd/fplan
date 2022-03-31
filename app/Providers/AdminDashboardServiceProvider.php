<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminDashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\AdminDashboard\AdminDashboardContract',
            'App\Repositories\AdminDashboard\EloquentAdminDashboardRepository');
    }
}
