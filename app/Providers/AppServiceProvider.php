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
        // view()->composer('loai_sanpham',function($view){
        //     $loai_spp = ProductType::all();
        //     $view->with('loai_spp',$loai_spp);
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
