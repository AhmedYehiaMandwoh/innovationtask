<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;
use Session;
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
        Paginator::useBootstrap();

        if(Session::has('currency') == false) {
            Session::put('currency', 'USD');
        }
        if(Session::get('currency') == '' || Session::get('currency') == null) {
            Session::put('currency', 'USD');
        }
    }
}
