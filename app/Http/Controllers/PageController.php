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
use App\ProductColor;
use App\ProductImage;
use Illuminate\Console\Scheduling\Schedule;
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

        $loai_ssp = ProductType::where('id',$type)->first();

    	return view('page.loai_sanpham',compact('lsp','sp_theoloai','detail_product','id_product','loai_ssp'));
    }

    public function getDetail(Request $req){
        $detail_product = ProductDetail::all();

        $sanpham = Product::where('id', $req->id)->first();
        $feedback = Feedback::where('id_product', $req->id)->get();

        $id_sp = Product::where('id', $req->id)->value('id_type');
        $id_lsp = Product::where('id_type', $id_sp)->value('id_type');

        $type_name = ProductType::where('id', $id_lsp)->value('type_name');

        $getid_sp = Product::where('id', $req->id)->value('id');
        $getid_ctsp = Product::where('id', $getid_sp)->value('id');

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
                    ->join('product_detail as ctsp', 'sp.id', '=', 'ctsp.id_product')
                    ->join('product_image as asp', 'ctsp.id', '=' , 'asp.id_detail')
                    ->select('sp.id','sp.name','asp.image')
                    ->get();

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
        $takesp = DB::table('products as sp')
                    ->join('product_type as lsp', 'sp.id_type' , '=', 'lsp.id')
                    ->get();

        return view('Admin.pageadmin.adminsanpham', compact('takesp'));
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
        $customers = Customer::all();
        $bills = Bill::all();
        $bill_detail = BillDetail::all();

        $get_bill = DB::select(DB::raw('SELECT bd.id as bdid, b.id as bid, b.total_price, bd.product_name, bd.color, bd.image, bd.size, bd.quantity, bd.price, c.name FROM bill_detail as bd, customers as c, bills as b WHERE bd.id_bill in (SELECT b.id FROM bills WHERE b.id_customer in (SELECT c.id FROM customers))'));
                        // dd($get_bill);
        return view('Admin.pageadmin.admindonhang', compact('get_bill','bills','customers','bill_detail'));
    }

    // public function postadminSuadonhang(Request $req){
    //     $bills = new Bill;
    //     $bills->status = $req->stt +1;
    //     dd($req->stt);
    //     $b->save();
    //     // return redirect()->back();
    // }
    public function completedUpdate($id){
        DB::table('bills')->where('id', $id)->update(['status' => 2]);
        return redirect()->back();
    }

    public function cancelUpdate($id){
        DB::table('bills')->where('id', $id)->update(['status' => 3]);
        return redirect()->back();
    }

    public function getadminDoanhthu(){
        return view('Admin.pageadmin.admindoanhthu');
    }

    public function getadminThemsanpham(){
        $addlsp = ProductType::all();
        return view('Admin.pageadmin.adminthemsanpham', compact('addlsp'));
    }

    public function postadminThemsanpham(Request $req){
        $sanpham = new Product;
        $sanpham->name = $req->ten;
        $sanpham->unit_price = $req->giagoc;
        $sanpham->promotion_price = $req->giakhuyenmai;
        $sanpham->size = $req->kichthuoc;
        $sanpham->status = $req->trangthai;
        $sanpham->description = $req->mota;
        $typename = $req->loaisanpham;
        $getidloai = ProductType::where('type_name','=',$typename)->value('id');
        $sanpham->id_type = $getidloai;
        $sanpham->save();

        $ctsanpham = new ProductDetail;
        $ctsanpham->id_product = $sanpham->id;
        $ctsanpham->save();

        foreach ($req->mausp as $key) {
            $colorsp = new ProductColor;
            $colorsp->id_detail = $ctsanpham->id;
            $colorsp->color = $key;
            $colorsp->save();
        }

        foreach ($req->hinh as $key) {
            $imgsp = new ProductImage;
            $imgsp->id_detail = $ctsanpham->id;
            $imgsp->image = $key;
            $imgsp->save();
        }
        
        return redirect()->back();
    }

    public function getadminSuasanpham($idtype){
        $adminlsp = ProductType::all();

        $editsp = Product::where('id', $idtype)->value('id');

        return view('Admin.pageadmin.adminsuasanpham', compact('adminlsp', 'editsp'));
    }

    public function postThemloaisanpham(Request $req){
        $producttype = new ProductType;
        $producttype->type_name = $req->categoriename;
        $producttype->save();

        $adminlsp = ProductType::all();
        return redirect()->back();
    }

}
