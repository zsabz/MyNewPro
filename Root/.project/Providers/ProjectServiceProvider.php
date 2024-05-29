<?php

namespace Project\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider


{
    /**
     * Register services.
     *
     * @return void
     */
        public function register()
    {
        $this->app->register(ProjectRouteServiceProvider::class);
        $this->app->register(\Admin\Providers\AdminServiceProvider::class);
        // $this->app->register(\Site\providers\SiteServiceProvider::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
