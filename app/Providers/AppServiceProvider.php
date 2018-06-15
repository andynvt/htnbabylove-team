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
use App\BillDetail;
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
                $color = ProductColor::all();
                // dd($cart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty, 'color'=>$color]);
            }
        });

       view()->composer('header',function($view){
            $slide_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 2)->take(5)
                            ->groupBy('products.id')
                            ->get();
            $view->with('slide_product',$slide_product);
        });

       view()->composer('page.thanhtoan',function($view){
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

        view()->composer('master',function($view){
            $normal_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where([
                                ['status', 10],
                                ['promotion_price', 0]
                            ])
                            ->groupBy('products.id')
                            ->get();
            $view->with('normal_product',$normal_product);
        });

        view()->composer('master',function($view){
            // Cập nhật trạng thái
            $daysp = Product::select('id','created_at as pday', 'status')->get();
            $cntsp = count($daysp);
            for($i = 0 ; $i < $cntsp ; $i++){
                $minus = DB::select(DB::raw('SELECT DATEDIFF(now(), "'.$daysp[$i]->pday.'") as ngay'));
                $stt = $daysp[$i]->status;
                if($minus[0]->ngay > 14 && $stt != 2){
                    DB::table('products')->where('id', $daysp[$i]->id)->update(['status' => 10]); 
                }
            }
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

        view()->composer('Admin.master',function($view){
            $product_image = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=', 'ctsp.id')
                            ->join('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->get();
                            // ->where('sp.id', $id)
            $view->with('product_image',$product_image);
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
