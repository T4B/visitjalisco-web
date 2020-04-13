<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\Search\VisitJalisco;

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
     * @return void
     */
    public function boot()
    {
        try {
            View::share('locale', app()->getLocale());
        } catch (\Exception $e) {
            logger($e);
        }

        VisitJalisco::bootSearchable();

        Blade::if('env', function ($environment) {
            return app()->environment($environment);
        });
    }
}
