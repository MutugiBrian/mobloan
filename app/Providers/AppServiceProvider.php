<?php

namespace App\Providers;

use Schema;
use Illuminate\Support\ServiceProvider;
use View;
use App\SiteSetting;

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
        View::share('site', SiteSetting::where('status','active')->first());
        Schema::defaultStringLength(191);
            //compose all the views....
        // view()->composer('*', function ($view) 
        // {
        //     $settings = SiteSetting::where('id',1)->first();

        //     //...with this variable
        //     $view->with([
        //         'settings'=> $settings
        //         ]);    
        // }); 
    }
}
