<?php

namespace App\Providers;

use App\Models\Admin\Service;
use App\Models\Admin\Subservice;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Date\Date;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('path.public', function() {
//            return base_path('../public_html');
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return array
     */
    public function boot()
    {
        Date::setLocale(config('app.locale'));

        view()->composer('layouts.footer', function ($view){
            $view->with('services', Service::with('subservices')->get());
        });
    }
}
