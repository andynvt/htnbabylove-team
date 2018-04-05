<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;
use App\ProductType;
use App\Feedback;
use DB;

class PageController extends Controller
{
    public function getIndex(){
        $promotion_product = Product::where('promotion_price', '<>', '0')->get();
        $new_product = Product::where('status', 1)->get();
        $hot_product = Product::where('status', 2)->get();
        $detail_product = ProductDetail::all();
        $lsp = ProductType::all();

        // $array_product = Product::select('id_product')->get();
        // $array_image = DB::table('products')->join('product_detail','products.id_product','=','product_detail.id_product')->select('product_detail.image')->get();


    	return view('page.trangchu',compact('new_product','hot_product','promotion_product','detail_product','lsp'));
    }

    public function getLoaiSP($type){
        $lsp = ProductType::all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $detail_product = ProductDetail::all();
        $id_product = Product::all();

        $loai_ssp = ProductType::where('id_type',$type)->first();

    	return view('page.loai_sanpham',compact('lsp','sp_theoloai','detail_product','id_product','loai_ssp'));
    }

    public function getDetail(Request $req){
        $sanpham = Product::where('id_product', $req->id)->first();
        $feedback = Feedback::where('id_product', $req->id)->get();

        $id_sp = Product::where('id_product', $req->id)->value('id_type');
        $id_lsp = Product::where('id_type', $id_sp)->value('id_type');

        $type_name = ProductType::where('id_type', $id_lsp)->value('type_name');

        return view('page.chitiet_sanpham', compact('sanpham','feedback','type_name', 'id_lsp'));
    }

    public function getAbout(){
    	return view('page.gioithieu');
    }

    public function getPolicy(){
    	return view('page.chinhsachbaomat');
    }

    public function getTerms(){
    	return view('page.dieukhoan');
    }

    public function getCheckout(){
        return view('page.thanhtoan');
    }

    //Admin
    public function getAdminIndex(){
        return view('Admin.pageadmin.admindangnhap');
    }
    public function getadminCanhan(){
        return view('Admin.pageadmin.admincanhan');
    }

    public function getadminDanhgia(){
        return view('Admin.pageadmin.admindanhgia');
    }

    public function getadminChitietDanhgia(){
        return view('Admin.pageadmin.adminchitietdanhgia');
    }

    public function getadminSanpham(){
        return view('Admin.pageadmin.adminsanpham');
    }

    public function getadminLoaisanpham(){
        return view('Admin.pageadmin.adminloaisanpham');
    }

    public function getadminKhachhang(){
        $table  = Customer::all();
        return view('Admin.pageadmin.adminkhachhang',compact('table'));
    }

    public function getadminDonhang(){
        return view('Admin.pageadmin.admindonhang');
    }

    public function getadminDoanhthu(){
        return view('Admin.pageadmin.admindoanhthu');
    }

}
