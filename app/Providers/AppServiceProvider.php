<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Blade;
//use Response;

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
        /*Blade::directive('myDir', function ($var){
            return "<h1>New Directiv - $var</h1>";
        });
        Response::macro('myResp', function ($value){
            return Response::make($value);
        });*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
