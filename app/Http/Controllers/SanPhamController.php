<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SanPhamController extends Controller
{
    public function getDanhSach(){
    	$product = Product::all();
    	return view('Admin.pageadmin.adminsanpham', ['product'=>$product]);
    }

    // public function getXoa($id_product){
    // 	$product = Product::find($id_product);
    // 	$product->delete();

    // 	return redirect('admin-sanpham')->with('thongbao', 'Xoá thành công');
    // }
}
