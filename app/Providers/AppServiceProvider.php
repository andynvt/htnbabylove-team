<?php

namespace App\Providers;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ProductType;
use App\Product;
use App\ProductDetail;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('header',function($view){
            $loai_sanpham = ProductType::all();
            $view->with('loai_sanpham',$loai_sanpham);
        });

        view()->composer('master',function($view){
            $promotion_product = Product::where('promotion_price', '<>', '0')->get();
            $view->with('promotion_product',$promotion_product);
        });

        view()->composer('master',function($view){
            $new_product = Product::where('status', 1)->get();
            $view->with('new_product',$new_product);
        });

        view()->composer('master',function($view){
            $hot_product = Product::where('status', 2)->get();
            $view->with('hot_product',$hot_product);
        });

        view()->composer('master',function($view){
            $detail_product = ProductDetail::all();
            $view->with('detail_product',$detail_product);
        });

        view()->composer('Admin.pageadmin.admindanhgia', function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });

        // view()->composer('page.loai_sanpham',function($view){
        //     $l_sanpham = ProductType::all();
        //     $view->with('l_sanpham',$l_sanpham);
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
