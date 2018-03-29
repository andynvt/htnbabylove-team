<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
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
        return view('Admin.pageadmin.adminkhachhang');
    }

    public function getadminDonhang(){
        return view('Admin.pageadmin.admindonhang');
    }

    public function getadminDoanhthu(){
        return view('Admin.pageadmin.admindoanhthu');
    }

}
