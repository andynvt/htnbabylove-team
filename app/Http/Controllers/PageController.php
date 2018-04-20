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
        $product_image = ProductImage::all();
        $product_color = ProductColor::all();
        $lsp = ProductType::all();
        return view('page.trangchu',compact('new_product','hot_product','promotion_product','detail_product','lsp','product','product_image','product_color'));
    }

    public function getLoaiSP($type){
        $lsp = ProductType::all();
        $sp_theoloai = Product::where('id',$type)->get();
        $detail_product = ProductDetail::all();
        $products = Product::all();
        $product_image = ProductImage::all();
        $product_color = ProductColor::all();
        $loai_ssp = ProductType::where('id',$type)->first();

        return view('page.loai_sanpham',compact('lsp','sp_theoloai','detail_product','products','loai_ssp','product_color','product_image'));
    }

    public function getDetail(Request $req){
        $detail_product = ProductDetail::all();

        $sanpham = Product::where('id', $req->id)->first();

        $id_sp = Product::where('id', $req->id)->value('id');
        $id_lsp = Product::where('id', $id_sp)->value('id');
        $feedback = Feedback::where('id_product', $req->id)->get();

        $type_name = ProductType::where('id', $id_lsp)->value('type_name');

        $getid_sp = Product::where('id', $req->id)->value('id');
        $getid_ctsp = Product::where('id', $getid_sp)->value('id');

        $product_img = ProductDetail::where('id', $getid_ctsp)->get();
        $get1_proimg = ProductDetail::where('id', $getid_ctsp)->value('id');
        $get2_proimg = ProductImage::where('id', $get1_proimg)->value('image');

        // dd($get1_proimg);
        $new_product = Product::where('status', 1)->get();
        $hot_product = Product::where('status', 2)->get();
        $product_image = ProductImage::all();
        $product_color = ProductColor::all();


        $same_product = Product::where('id', $id_lsp)->take(6)->get();


        return view('page.chitiet_sanpham', compact('sanpham','feedback','type_name', 'id_lsp', 'product_img', 'get2_proimg','same_product','detail_product','hot_product','new_product','product_image','product_color'));
    }

    public function postDanhGia(Request $req, $id){
        $fb = new Feedback;

        $fb->id_product = $id;
        $fb->stars = $req->ratingValue;
        $fb->reviewer = $req->name;
        $fb->review = $req->review;
        $fb->tel = $req->phone;
        $fb->save();

        return redirect()->back();
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
        $product_image = ProductImage::all();

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
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id')
                        ->Join('product_detail as detail','sp.id','=','detail.id_product')
                        ->select('sp.id','sp.name','sp.id','sp.promotion_price','sp.unit_price','sp.status')
                        ->where('sp.id_type','=',$value)
                        ->distinct()
                        ->get();
                break;

                case $giatien :
                    $product = DB::table('products')->whereBetween('unit_price', [$giatien[0],$giatien[1]] )->get();
                break;

                case ($tensp && $value) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id')
                        ->Join('product_detail as detail','sp.id','=','detail.id_product')
                        ->Where('sp.name','like','%'.$tensp.'%')
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($tensp && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id')
                        ->Join('product_detail as detail','sp.id','=','detail.id_product')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orWhere('sp.name','like','%'.$tensp.'%')
                        ->select('sp.id','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($value && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id')
                        ->Join('product_detail as detail','sp.id','=','detail.id_product')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;

                case ($tensp && $value && $giatien) :
                    $product = DB::table('products as sp')
                        ->Join('product_type as ctsp', 'sp.id_type', '=', 'ctsp.id')
                        ->Join('product_detail as detail','sp.id','=','detail.id_product')
                        ->Where('sp.name','like','%'.$tensp.'%')
                        ->whereBetween('sp.unit_price', [$giatien[0],$giatien[1]] )
                        ->orwhere('sp.id_type','=',$value)
                        ->select('sp.id','sp.name','sp.id_type','sp.promotion_price','sp.unit_price','sp.status')
                        ->distinct()
                        ->get();
                break;
                default:

            }
        }

    
     // dd($product);
    
        $detail_product = ProductDetail::all();
        $lsp = ProductType::all();

        return view('page.timkiem',compact('detail_product','lsp','product','product_image'));
       
       
    }


    public function getTimkiemloai(Request $req){
        $product_image = ProductImage::all();

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
        return view('page.timkiemloai',compact('detail_product','lsp','product','product_image'));
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
        $getsp = DB::select(DB::raw('SELECT sp.id as spid, sp.name, asp.image FROM products as sp LEFT JOIN product_detail as ctsp ON sp.id = ctsp.id_product LEFT JOIN product_image as asp ON ctsp.id = asp.id_detail GROUP BY spid'));
        return view('Admin.pageadmin.admindanhgia', compact('getlsp','getsp'));
    }

    public function getadminChitietDanhgia($idfb){
        $getlsp = ProductType::all();

        $fbsp = Feedback::where('id_product','=',$idfb)->get();

        return view('Admin.pageadmin.adminchitietdanhgia', compact('fbsp', 'getlsp'));
    }

    public function getadminDanhgiatheoloai($fbtype){
        $getlsp = ProductType::all();

        $fb_theoloai = Product::where('id_type', $fbtype)->get();

        return view('Admin.pageadmin.admindanhgiatheoloai', compact('getlsp','fb_theoloai'));
    }

    public function getadminXoadanhgia($fb){
        Feedback::find($fb)->delete();
        return redirect()->back();
    }

    public function getadminSanpham(){
        $takesp = DB::table('products as sp')
                    ->leftjoin('product_type as lsp', 'sp.id_type' , '=', 'lsp.id')
                    ->select('sp.id as spid', 'lsp.type_name' , 'sp.name' , 'sp.unit_price' , 'sp.promotion_price' ,'sp.size' , 'sp.description' , 'sp.status')
                    ->get();

        return view('Admin.pageadmin.adminsanpham', compact('takesp'));
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

    public function getadminSuasanpham($idsp){
        $product_type = ProductType::all();
        $id_product_edit = Product::where('id', $idsp)->get();
        $product_name = Product::where('id', $idsp)->value('name');

        $adminlsp = ProductType::all();

        $editsp = Product::where('id', $idsp)->get();

        $getcl = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=', 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=' , 'sp.id')
                            ->where('sp.id', '=', $idsp)
                            ->select('product_color.color')
                            ->get();
        // dd($id_type_edit);
        return view('Admin.pageadmin.adminsuasanpham', compact('product_type', 'id_product_edit', 'product_name', 'adminlsp', 'editsp', 'getcl'));
    }

    public function postadminSuasanpham($idsp, Request $req){
        $id_product = Product::find($idsp);
        $id_product->name = $req->newname;
        $id_product->id_type = $req->newtype;
        $id_product->unit_price = $req->new_unit_price;
        $id_product->promotion_price = $req->new_promotion_price;
        $id_product->size = $req->newsize;
        $id_product->description = $req->newdesc;

        $id_product->save();

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

    public function getadminLoaisanpham(){
        $adminlsp = ProductType::all();

        return view('Admin.pageadmin.adminloaisanpham', compact('adminlsp'));
    }

    public function postThemloaisanpham(Request $req){
        $producttype = new ProductType;
        $producttype->type_name = $req->categoriename;
        $producttype->save();

        $adminlsp = ProductType::all();
        return redirect()->back();
    }

    public function postadminSualoaisanpham($idtype, Request $req){
        $edittype = ProductType::find($idtype);
        $edittype->type_name  = $req->newtypename;
        $edittype->save();

        return redirect()->back();
    }

    public function getadminXoaloaisanpham($idtype){
        ProductType::find($idtype)->delete();
        return redirect()->back();
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
}
