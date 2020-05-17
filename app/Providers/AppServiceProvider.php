<?php

namespace App\Providers;

use Schema;
use Illuminate\Support\ServiceProvider;
use view;
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
        Schema::defaultStringLength(191);
            //compose all the views....
        view()->composer('*', function ($view) 
        {
            $settings = SiteSetting::where('id',1)->get();

            //...with this variable
            $view->with([
                'settings'=> $settings
                ]);    
        }); 
    }
}
