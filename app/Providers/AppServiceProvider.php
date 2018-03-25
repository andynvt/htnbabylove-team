<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });
        // view()->composer('trangchu',function($view){
        //     $loai_sp = ProductType::all();
        //     $view->with('loai_sp',$loai_sp);
        // });
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
