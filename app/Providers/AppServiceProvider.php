<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerInformationRepo();
    }


    public function registerInformationRepo()
    {
        return $this->app->bind('App\\Repositories\\Information\\InformationRepository',
            'App\\Repositories\\Information\\EloquentInformation');
    }
}
