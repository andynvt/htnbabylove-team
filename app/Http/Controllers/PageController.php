<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;
use App\ProductType;
use App\Feedback;
use App\Bill;
use App\BillDetail;
use DB;

class PageController extends Controller
{
    public function getIndex(){
        $promotion_product = Product::where('promotion_price', '<>', '0')->get();
        $new_product = Product::where('status', 1)->get();
        $hot_product = Product::where('status', 2)->get();
        $product = Product::all();
        $detail_product = ProductDetail::all();
        $lsp = ProductType::all();
        return view('page.trangchu',compact('new_product','hot_product','promotion_product','detail_product','lsp','product'));
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
        $detail_product = ProductDetail::all();

        $sanpham = Product::where('id_product', $req->id)->first();
        $feedback = Feedback::where('id_product', $req->id)->get();

        $id_sp = Product::where('id_product', $req->id)->value('id_type');
        $id_lsp = Product::where('id_type', $id_sp)->value('id_type');

        $type_name = ProductType::where('id_type', $id_lsp)->value('type_name');

        $getid_sp = Product::where('id_product', $req->id)->value('id_product');
        $getid_ctsp = Product::where('id_product', $getid_sp)->value('id_product');

        $product_img = ProductDetail::where('id_product', $getid_ctsp)->get();
        $get1_proimg = ProductDetail::where('id_product', $getid_ctsp)->value('image');
        // dd($get1_proimg);
        $new_product = Product::where('status', 1)->get();
        $hot_product = Product::where('status', 2)->get();

        $same_product = Product::where('id_type', $id_lsp)->take(6)->get();


        return view('page.chitiet_sanpham', compact('sanpham','feedback','type_name', 'id_lsp', 'product_img', 'get1_proimg','same_product','detail_product','hot_product','new_product'));
    }

    public function getAbout(){
        $lsp = ProductType::all();
    	return view('page.gioithieu', compact('lsp'));
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

    public function getTimkiem(Request $req){
        $tensp =$req->search;
        $value = $req->members;
        $product = Product::where('name','like','%'.$req->search.'%')->orWhere('unit_price',$req->search)->get();

        //cắt chuỗi của giá tiền
        
        $giatien = explode(',', $req->price);
        
        // dd($giatien[0]);

        //tìm kiếm theo các tuỳ chọn
        if(!empty($req->price)){
            switch(  $tensp || $giatien || $value)  {
                case $tensp :
                    $product = Product::where('name','like','%'.$req->search.'%')->orWhere('unit_price',$req->search)->get();
                break;

                case $value ;
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id_type')
                        ->Join('product_detail as detail','sp.id_product','=','detail.id_product')
                        ->select('sp.id_product','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->where('sp.id_type','=',$value)
                        ->distinct()
                        ->get();
                break;

                case $giatien :
                    $product = DB::table('products')->whereBetween('unit_price', [$giatien[0],$giatien[1]] )->get();
                break;

                case ($tensp && $value) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id_type')
                        ->Join('product_detail as detail','sp.id_product','=','detail.id_product')
                        ->Where('sp.name','like','%'.$tensp.'%')
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id_product','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($tensp && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id_type')
                        ->Join('product_detail as detail','sp.id_product','=','detail.id_product')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orWhere('sp.name','like','%'.$tensp.'%')
                        ->select('sp.id_product','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($value && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id_type')
                        ->Join('product_detail as detail','sp.id_product','=','detail.id_product')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id_product','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($tensp && $value && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id_type')
                        ->Join('product_detail as detail','sp.id_product','=','detail.id_product')
                        ->Where('sp.name','like','%'.$tensp.'%')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id_product','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;
                default:

            }
        }

    
     // dd($product);
    
        $detail_product = ProductDetail::all();
        $lsp = ProductType::all();

        return view('page.timkiem',compact('detail_product','lsp','product'));
       
       
    }


    public function getTimkiemloai(Request $req){

        if($req->pro === 'sale'){
            $product = Product::where('promotion_price', '<>', '0')->get();

        }
        if($req->pro === 'new'){
            $product = Product::where('status', 1)->get();

        }
        if($req->pro === 'hot'){
            $product = Product::where('status', 2)->get();

        }
        if($req->pro === 'giagiam'){
            $product = DB::table('products')
                ->orderByRaw('unit_price  DESC')
                ->get();

        }
        if($req->pro === 'giatang'){
            $product = DB::table('products')
                ->orderByRaw('unit_price  ASC')
                ->get();

        }


     // dd($product);
    
        $detail_product = ProductDetail::all();
        $lsp = ProductType::all();
        return view('page.timkiemloai',compact('detail_product','lsp','product'));
    }

    //Admin
    public function getAdminIndex(){
        return view('Admin.pageadmin.admindangnhap');
    }
    public function getadminCanhan(){
        return view('Admin.pageadmin.admincanhan');
    }

    public function getadminDanhgia(){
        $getlsp = ProductType::all();

        $getsp = DB::table('products as sp')
                    ->join('product_detail as ctsp', 'sp.id_product', '=', 'ctsp.id_product')
                    ->join('product_image as asp', 'ctsp.id_detail', '=' , 'asp.id_detail')
                    ->select('sp.id_product','sp.name','asp.image')
                    ->get();

        // dd($getsp);

        return view('Admin.pageadmin.admindanhgia', compact('getlsp','getsp'));

    }

    public function getadminChitietDanhgia(){
        return view('Admin.pageadmin.adminchitietdanhgia');
    }

    public function getadminDanhgiatheoloai($fbtype){
        $getlsp = ProductType::all();

        $fb_theoloai = Product::where('id_type', $fbtype)->get();

        return view('Admin.pageadmin.admindanhgiatheoloai', compact('getlsp','fb_theoloai'));
    }

    public function getadminSanpham(){
        return view('Admin.pageadmin.adminsanpham');
    }

    public function getadminLoaisanpham(){
        $adminlsp = ProductType::all();

        return view('Admin.pageadmin.adminloaisanpham', compact('adminlsp'));
    }

    public function getadminKhachhang(){
        $table  = Customer::all();
        return view('Admin.pageadmin.adminkhachhang',compact('table'));
    }

    public function getadminDonhang(){
        $get_bill = DB::table('bills as b')
                    ->Join('bill_detail as bd', 'b.id_bill', '=', 'bd.id_bill')
                    ->Join('customers as c', 'b.id_customer', '=', 'c.id_customer')
                    ->Join('product_detail as pd', 'bd.id_detail','=','pd.id_detail')
                    ->Join('products as p', 'pd.id_product', '=', 'p.id_product')
                    ->Join('product_color as pc','pd.id_detail','pc.id_detail')
                    ->Join('product_image as pi','pd.id_detail','pi.id_detail')
                    ->select('b.id_bill','b.total_price','b.total_product','b.status','b.address','bd.quantity','bd.unit_price','c.name','p.name as pname','bd.unit_price','p.size')
                    ->distinct()
                    ->orderby('b.status')
                    ->get();
        // dd($get_bill);
        return view('Admin.pageadmin.admindonhang', compact('get_bill'));
    }

    public function getadminDoanhthu(){
        return view('Admin.pageadmin.admindoanhthu');
    }

    public function getadminThemsanpham(){
        return view('Admin.pageadmin.adminthemsanpham');
    }

    public function getadminSuasanpham(){
        return view('Admin.pageadmin.adminsuasanpham');
    }

    public function postThemloaisanpham(Request $req){
        $producttype = new ProductType;
        $producttype->type_name = $req->categoriename;
        $producttype->save();

        $adminlsp = ProductType::all();

        return view('Admin.pageadmin.adminloaisanpham', compact('adminlsp'));
    }

}
