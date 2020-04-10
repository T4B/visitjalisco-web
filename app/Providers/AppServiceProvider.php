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
        $footer_links = \App\Link::where('position', 'footer')->get();
        View::share('locale', app()->getLocale());
        View::share('footer_links', $footer_links);

        VisitJalisco::bootSearchable();

        Blade::if('env', function ($environment) {
            return app()->environment($environment);
        });
    }
}
