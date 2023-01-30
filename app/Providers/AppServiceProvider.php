<?php

namespace App\Providers;

use App\Models\Admin\Subservice;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return array
     */
    public function boot()
    {
        view()->composer('front.header', function ($view){
            $view->with('subservices', Subservice::with('projects', 'service')->get());
        });
    }
}
