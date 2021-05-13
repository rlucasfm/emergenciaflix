<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        Blade::directive('user_initials', function(){
            $name = Auth::user()->name;
            $arr_name = explode(' ', $name);
            if(count($arr_name) == 1)
            {
                return strtoupper($arr_name[0][0]);
            } else {
                return strtoupper($arr_name[0][0] . $arr_name[1][0]);
            }
        });
    }
}
