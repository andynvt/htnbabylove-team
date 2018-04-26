<?php

namespace App\Providers;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ProductType;
use App\Product;
use App\ProductDetail;
use App\Bill;
use App\ProductImage;
use App\ProductColor;
use DB;
use App\Cart;
use Session;
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

	view()->composer('header',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
        });

        view()->composer('master',function($view){
            $product_color = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=' , 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->select('sp.id as spid', 'product_color.color')
                            ->get();
            $view->with('product_color',$product_color);
        });


        view()->composer('master',function($view){
            $promotion_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('promotion_price', '<>', '0')
                            ->groupBy('products.id')
                            ->get();
                           
            $view->with('promotion_product',$promotion_product);
        });

        view()->composer('master',function($view){
            $new_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 1)
                            ->groupBy('products.id')
                            ->get();
            $view->with('new_product',$new_product);
        });

        view()->composer('master',function($view){
            $hot_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 2)
                            ->groupBy('products.id')
                            ->get();
            $view->with('hot_product',$hot_product);
        });

       

        view()->composer('Admin.pageadmin.admindanhgia', function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });

        view()->composer('Admin.pageadmin.admindanhgia', function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });  

        view()->composer('Admin.pageadmin.adminnav',function($view){
            $confirm_bill = Bill::where('status', 4)->get();
            $view->with('confirm_bill',$confirm_bill);
        });

        view()->composer('Admin.master',function($view){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->groupBy('products.id')
                            ->get();         
          
                $view->with('product',$product);
        });
        view()->composer('Admin.master',function($view){
            $product_color = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=' , 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->select('sp.id as spid', 'product_color.color')
                            ->get();
            $view->with('product_color',$product_color);
        });
       
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
