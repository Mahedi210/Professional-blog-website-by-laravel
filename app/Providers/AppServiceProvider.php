<?php

namespace App\Providers;

use App\category;
use App\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
     * @return void
     */
    public function boot()
    {
        $categories=category::take(5)->get();
        View::share('categories',$categories);
        Schema::defaultStringLength(191);

        $setting=setting::first();
        View::share('setting',$setting);


    }
}
