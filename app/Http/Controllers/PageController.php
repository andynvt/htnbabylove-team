<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex(){
        $promotion_product = Product::where('promotion_price', '<>', '0')->get();
        $new_product = Product::where('status', 1)->get();
        $hot_product = Product::where('status', 2)->get();

<<<<<<< HEAD
        $detail_product = ProductDetail::all();
       
       
        // dd($anh);
        // $detail_product = ProductDetail::where('id_product', 2)->get();
    	return view('page.trangchu',compact('new_product','hot_product','promotion_product','detail_product'));
=======
        $lsp = ProductType::all();
        // dd($new_product);
        // $detail_product = ProductDetail::where('id_product', 2)->get();
    	return view('page.trangchu',compact('new_product','hot_product','promotion_product','lsp'));
>>>>>>> 390cd59b481bcc0ed980d0f50e436d5bc5ac0eed
    }

    public function getLoaiSP(){
    	return view('page.loai_sanpham');
    }

    public function getDetail(){
        return view('page.chitiet_sanpham');
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