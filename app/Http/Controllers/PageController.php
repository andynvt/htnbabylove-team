<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }

    public function getLoaiSP($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        // $l_sp = DB::table('products')->select('id_product','=',$sp_theoloai)->get();
        $ds_loai = DB::table('product_type')->select('type_name')->get(); 
        $id_loai = DB::table('product_type')->select('id_type')->get(); 
    	return view('page.loai_sanpham',compact('sp_theoloai'), compact('ds_loai'), compact('id_loai'));
    }

    public function getDetail(){
        return view('page.chitietsp');
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

}
