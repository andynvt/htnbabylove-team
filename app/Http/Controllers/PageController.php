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
use App\Cart;
use App\City;
use App\District;
use Session;
use Illuminate\Console\Scheduling\Schedule;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Mail;
use App\Mail\MyMail;

class PageController extends Controller
{
	public function getAddtoCart(Request $req){
        $color = $req->colorbuy;
        $sl = $req->qtybuy;
        $id = $req->id;
        $product = Product::find($id);
        $img = DB::select(DB::raw('SELECT image FROM product_image WHERE id_detail in (SELECT id FROM product_detail WHERE id_product in (SELECT id FROM products WHERE id='.$id.')) LIMIT 1'));

        $product['sl'] = $sl;
        $product['img'] = $img[0]->image;
        $product['color'] = $color;
        // $product['color'] = $color[0]->color;
        
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $sl);
        $req->session()->put('cart',$cart);
        // dd($cart);
        $req->session()->flash('add-cart','Thêm vào giỏ hàng thành công!');
        return response()->json(['cl' => $color, 'qty' => $sl, 'id'=> $id, 'cart' => $cart]);
    }

    public function getQuickAddCart(Request $req, $id){
        $product = Product::find($id);
        $img = DB::select(DB::raw('SELECT image FROM product_image WHERE id_detail in (SELECT id FROM product_detail WHERE id_product in (SELECT id FROM products WHERE id='.$id.')) LIMIT 1'));
        $color = DB::select(DB::raw('SELECT color FROM product_color WHERE id_detail in (SELECT id FROM product_detail WHERE id_product in (SELECT id FROM products WHERE id='.$id.')) LIMIT 1'));
        $sl = 1;
        $product['sl'] = $sl;
        $product['img'] = $img[0]->image;
        $product['color'] = $color[0]->color;
        
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $sl);
        $req->session()->put('cart',$cart);

        return redirect()->back()->with('add-cart','Thêm vào giỏ hàng thành công!');
    }

    public function getChangeqty(Request $req){
        $id = $req->id;
        $newqty = $req->newqty;
        $oldqty = $req->oldqty;
        // $kq = $newqty - $oldqty;

        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;

        // tổng số lượng của cart cũ (chắc v)
        // $oldtotalCart = $oldCart->totalQty;
        // $totalNewQty = $oldtotalCart + $kq;

        $cart = new Cart($oldCart);

        $cart->update($product,$id, $newqty, $oldqty);
        $req->session()->put('cart',$cart);

        // oldqty và sl chỉ dùng để ktra, có thể xoá về sau

        return response()->json(['data' => $cart, 'oldqty' => $oldqty]);
    }
    
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back()->with('del-cart','Đã xoá sản phẩm khỏi giỏ hàng!');
    }

    public function getThanhToan(){
        return view('page.thanhtoan');
    }

    public function postDatHang(Request $req){
        $cart = Session::get('cart');

        $city = City::where('id', $req->city)->value('name');
        $district = District::where('id', $req->district)->value('name');
        $full_address = $city.", ".$district.", ".$req->address;

        $cus = new Customer;
        $cus->name = $req->cusname;
        $cus->gender = $req->gender;
        $cus->email = $req->email;
        $cus->address = $full_address;
        $cus->phone = $req->phone;
        $cus->save();

        $bill = new Bill;
        $bill->id_customer = $cus->id;
        $bill->total_product = $cart->totalQty;
        $bill->total_price = $cart->totalPrice;
        $bill->address = $full_address;
        $bill->status = 4;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->product_name = $value['item']['name'];
            $bill_detail->color = $value['item']['color'];
            $bill_detail->quantity = $value['qty'];
            $bill_detail->size = $value['item']['size'];
            $bill_detail->price = ($value['price']/$value['qty']);
            $bill_detail->image = $value['item']['img'];
            $bill_detail->save(); 
        }
        Session::forget('cart');
        return redirect()->action('PageController@getIndex')->with('dathang', 'Đặt hàng thàng công. Bạn chờ nhận mail xác nhận nhé!');
    }

    public function getIndex(){
        $promotion_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('promotion_price', '<>', '0')
                            ->select('products.*', 'ctsp.id_product', 'asp.id_detail','asp.image', 'products.created_at')
                            ->orderByRaw('unit_price  ASC')
                            ->groupBy('products.id')
                            ->paginate(6,['*'],'promotion_product');
        // dd($promotion_product);
        $new_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 1)
                            ->orderByRaw('unit_price  ASC')
                            ->groupBy('products.id')
                            ->paginate(6,['*'],'new_product');
        $hot_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 2)
                            ->orderByRaw('unit_price  ASC')
                            ->groupBy('products.id')
                            ->paginate(6,['*'],'hot_product');

        $lsp = ProductType::all();
        return view('page.trangchu',compact('new_product','hot_product','promotion_product','detail_product','lsp','product','product_image','product_color'));
    }

    public function getLoaiSP($type){
        $lsp = ProductType::all();
        $sp_theoloai = Product::where('id',$type)->get();
        $detail_product = ProductDetail::all();
        // $products = Product::all();
        $product_image = ProductImage::all();
        $product_color = ProductColor::all();
        $loai_ssp = ProductType::where('id',$type)->first();

        $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->where('ty.id','=',$type)
                            ->groupBy('products.id')
                            ->get();

        return view('page.loai_sanpham',compact('lsp','sp_theoloai','detail_product','product','loai_ssp','product_color','product_image'));
    }

    public function getDetail($id){
        $detail_product = ProductDetail::all();

        $sanpham = Product::where('id', $id)->first();

        $feedback = Feedback::leftjoin('products as sp', 'feedbacks.id_product', '=' ,'sp.id')
                            ->where('sp.id', $id)
                            ->select('sp.id as spid', 'feedbacks.id as fbid', 'feedbacks.stars', 'feedbacks.reviewer', 'feedbacks.tel', 'feedbacks.review', 'feedbacks.created_at')
                            ->paginate(5,['*'],'feedback');

        $type_name = ProductType::join('products as sp', 'product_type.id', '=', 'sp.id_type')
                            ->where('sp.id', $id)
                            ->value('type_name');

        $id_lsp = Product::join('product_type as lsp', 'products.id_type', '=', 'lsp.id')
                            ->where('products.id', $id)
                            ->value('id_type');

        $same_product = Product::leftjoin('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->leftjoin('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->leftjoin('product_type as lsp' , 'lsp.id', '=', 'products.id_type')
                            ->where('products.id_type', $id_lsp)
                            ->groupBy('products.id')
                            ->take(6)
                            ->get();

        $get1_proimg = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=', 'ctsp.id')
                            ->join('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->where('sp.id', $id)
                            ->value('image');

        $new_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 1)
                            ->groupBy('products.id')->take(5)
                            ->get();

        $hot_product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 2)
                            ->groupBy('products.id')->take(5)
                            ->get();

        $getcl = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=' , 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->where('sp.id', $id)
                            ->select('sp.id as spid', 'product_color.color')
                            ->get();

        $getimg = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=' , 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->where('sp.id', $id)
                            ->select('sp.id as spid', 'sp.name', 'product_image.id as imgid' , 'product_image.image')
                            ->get();

        return view('page.chitiet_sanpham', compact('detail_product', 'sanpham','feedback','type_name', 'id_lsp', 'same_product', 'get1_proimg', 'hot_product','new_product','getcl', 'getimg'));
    }

    public function postDanhGia(Request $req, $id){
        $fb = new Feedback;

        $fb->id_product = $id;
        $fb->stars = $req->ratingValue;
        $fb->reviewer = $req->name;
        $fb->review = $req->review;
        $fb->tel = $req->phone;
        $fb->status = 1;
        $fb->save();

        return redirect()->back()->with('danhgia', 'Đã gửi đánh giá');
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

    public function postCheckout(Request $req){
        $city = City::where('id', $req->city)->value('name');
        $district = District::where('id', $req->district)->value('name');
        $full_address = $city.", ".$district.", ".$req->address;

        $cus = new Customer;
        $cus->name = $req->cusname;
        $cus->gender = $req->gender;
        $cus->email = $req->email;
        $cus->address = $full_address;
        $cus->phone = $req->phone;
        $cus->save();

        $bill = new Bill;
        $bill->id_customer = $cus->id;
        $bill->total_product = $req->qty;
        $bill->total_price = $req->tongtien;
        $bill->address = $full_address;
        $bill->status = 4;
        $bill->save();

        $bill_detail = new BillDetail;
        $bill_detail->id_bill = $bill->id;
        $bill_detail->product_name = $req->proname;
        $bill_detail->color = $req->color;
        $bill_detail->quantity = $req->qty;
        $bill_detail->size = $req->size;
        $bill_detail->price = $req->price;
        $bill_detail->image = $req->img;
        $bill_detail->save();

        // dd($req->tongtien);

        return redirect()->action('PageController@getIndex')->with('dathang', 'Đặt hàng thàng công. Bạn chờ nhận mail xác nhận nhé!');
    }

    public function postChitietsp($id, Request $req){
        $spmua = Product::leftjoin('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                        ->leftjoin('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                        ->where('products.id', $id)
                        ->select('products.id as spid', 'products.name', 'products.unit_price', 'products.promotion_price', 'products.size', 'asp.image')
                        ->groupBy('products.id')
                        ->get();
        $qtymua = $req->qtyspbuy;
        $colormua = $req->colorbuy;

        return view('page.thanhtoan', compact('spmua','qtymua', 'colormua'));
    }

    public function getTimkiem(Request $req){
        $tensp =$req->search;
        $value = $req->members;
        $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('products.name','like','%'.$req->search.'%')->orWhere('unit_price',$req->search)
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
        // dd($product);
        //cắt chuỗi của giá tiền
        
        $giatien = explode(',', $req->price);
        
        // dd($giatien[0]);

        //tìm kiếm theo các tuỳ chọn

      if(!empty($req->price)){
            if(!empty($tensp) && !empty($value) && !empty($giatien)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->Where([
                                    ['products.name','like','%'.$req->search.'%'],
                                    ['ty.id','=',$value],
                                    ['products.unit_price', '>=', $giatien[0]],
                                    ['products.unit_price', '<=', $giatien[1]],
                                    ])
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($tensp) && !empty($value)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->Where([
                                    ['products.name','like','%'.$tensp.'%'],
                                    ['ty.id','=',$value],
                                    ])
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($tensp) && !empty($giatien)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->Where([
                                    ['products.name','like','%'.$tensp.'%'],
                                    ['products.unit_price', '>=', $giatien[0]],
                                    ['products.unit_price', '<=', $giatien[1]],
                                    ])
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($value) && !empty($giatien)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->Where([
                                    ['ty.id','=',$value],
                                    ['products.unit_price', '>=', $giatien[0]],
                                    ['products.unit_price', '<=', $giatien[1]],
                                    ])
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($tensp)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('products.name','like','%'.$req->search.'%')->orWhere('products.unit_price',$req->search)
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($value)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->where('ty.id','=',$value)
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
            elseif(!empty($giatien)){
                $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->whereBetween('products.unit_price', [$giatien[0],$giatien[1]] )
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
            }
        }

    
     // dd($product);
    
        
        $lsp = ProductType::all();

        return view('page.timkiem',compact('lsp','product'));
       
       
    }


    public function getTimkiemloai(Request $req){
       
        if($req->pro === 'sale'){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('promotion_price', '<>', '0')
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');

        }
        if($req->pro === 'new'){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 1)
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');

        }
        if($req->pro === 'hot'){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->where('status', 2)
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');

        }
        if($req->pro === 'giagiam'){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->orderByRaw('unit_price  DESC')
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
           
        }
        if($req->pro === 'giatang'){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                            ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                            ->orderByRaw('unit_price  ASC')
                            ->groupBy('products.id')
                            ->paginate(9,['*'],'product');
           

        }
        
        $lsp = ProductType::all();
        return view('page.timkiemloai',compact('lsp','product'));
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

        $getsp = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                        ->join('feedbacks as fb', 'fb.id_product', '=', 'products.id')
                        ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                        ->select('products.id as spid', 'products.name', 'asp.image', 'fb.id as fbid')
                        ->groupBy('spid')->get();

        $getnumfb = DB::select(DB::raw('SELECT count(*) as numfb, sp.id, sp.name
                                        FROM feedbacks as fb, products as sp
                                        WHERE fb.id_product = sp.id
                                        AND fb.status = 1
                                        GROUP BY sp.id'));

        return view('Admin.pageadmin.admindanhgia', compact('getlsp','getsp', 'getnumfb'));

    }

    public function getadminChitietDanhgia($idfb){
        $getlsp = ProductType::all();

        $getsp = Product::where('id', '=', $idfb)->value('name') ;
        
        $fbsp = Feedback::where('id_product', $idfb)->paginate(10,['*'],'fbsp');


        foreach($fbsp as $key){
            $key->status = '0';
            $key->save();
        }
        return view('Admin.pageadmin.adminchitietdanhgia', compact('fbsp', 'getlsp', 'getsp'));
    }

    public function getadminDanhgiatheoloai($fbtype){
        $getlsp = ProductType::all();

        $fb_theoloai = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                        ->join('feedbacks as fb', 'fb.id_product', '=', 'products.id')
                        ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                        ->select('products.id as spid', 'products.name', 'asp.image', 'fb.id as fbid')
                        ->where('id_type', $fbtype)
                        ->groupBy('spid')
                        ->get();

        $getnumfb = DB::select(DB::raw('SELECT count(*) as numfb, sp.id, sp.name
                                        FROM feedbacks as fb, products as sp
                                        WHERE fb.id_product = sp.id
                                        AND fb.status = 1
                                        GROUP BY sp.id'));

        return view('Admin.pageadmin.admindanhgiatheoloai', compact('getlsp','fb_theoloai', 'getnumfb'));
    }

    public function postadminXoanhieudanhgia(Request $req){
        if($req->delmfb){
            $fb = $req->delmfb;
            $numdelfb = count($req->delmfb);
            foreach($fb as $key){
                Feedback::find($key)->delete();
            }

            return redirect()->back()->with('deletefb', 'Đã xoá '.$numdelfb.' đánh giá');
        }

        elseif ($req->del1fb) {
            Feedback::find($req->del1fb)->delete();
            return redirect()->back()->with('deletefb', 'Đã xoá 1 đánh giá');
        }
    }

    public function getadminSanpham(){
        $takesp = DB::table('products as sp')
                    ->leftjoin('product_type as lsp', 'sp.id_type' , '=', 'lsp.id')
                    ->select('sp.id as spid', 'lsp.type_name' , 'sp.name' , 'sp.unit_price' , 'sp.promotion_price' ,'sp.size' , 'sp.description' , 'sp.status')
                    ->paginate(10,['*'],'product');
                    // ->get();

        return view('Admin.pageadmin.adminsanpham', compact('takesp'));
    }

    public function getadminThemsanpham(){
        $addlsp = ProductType::all();
        return view('Admin.pageadmin.adminthemsanpham', compact('addlsp'));
    }

    public function postadminThemsanpham(Request $req){
        $sanpham = new Product;
        $ctsanpham = new ProductDetail;
        if($req->hasfile('images')){
            foreach($req->file('images') as $image){
                $name=date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
                $image->move('storage/product', $name);  
                $img[] = $name;  
            }
        }

        $sanpham->name = $req->ten;
        $sanpham->unit_price = $req->giagoc;
        $sanpham->promotion_price = $req->giakhuyenmai;
        $sanpham->size = $req->kichthuoc;
        $sanpham->status = $req->trangthai;
        $sanpham->description = $req->mota;
        $id_type = $req->loaisanpham;
        $sanpham->id_type = $id_type;
        $sanpham->save();

        $ctsanpham->id_product = $sanpham->id;
        $ctsanpham->save();

        foreach ($req->mausp as $key) {
            $colorsp = new ProductColor;
            $colorsp->id_detail = $ctsanpham->id;
            $colorsp->color = $key;
            $colorsp->save();
        }
        foreach($img as $i){
            ProductImage::insert( [
                'id_detail'=>$ctsanpham->id,
                'image'=>$i,
            ]);
        }

        $spname = $req->ten;
        return redirect()->back()->with('addsp', 'Đã thêm: '.$spname);    
    }

    public function getadminSuasanpham($idsp){
        $product_type = ProductType::all();
        $id_product_edit = Product::where('id', $idsp)->get();
        $product_name = Product::where('id', $idsp)->value('name');

        $id_type = Product::where('id',$idsp)->value('id_type');
        $type_name = ProductType::where('id',$id_type)->value('type_name');

        $adminlsp = ProductType::all();

        $editsp = Product::where('id', $idsp)->get();

        $getcl = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=', 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=' , 'sp.id')
                            ->where('sp.id', '=', $idsp)
                            ->select('product_color.id as idcl','product_color.color')
                            ->get();
        $getimg = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=', 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=' , 'sp.id')
                            ->where('sp.id', '=', $idsp)
                            ->select('product_image.id as iid','product_image.image')
                            ->get();
        // dd($getimg);
        return view('Admin.pageadmin.adminsuasanpham', compact('product_type', 'id_product_edit', 'product_name', 'id_type', 'type_name','not_type_name', 'adminlsp', 'editsp', 'getcl','getimg'));
    }

    public function postadminSuasanpham($idsp, Request $req){
        $id_product = Product::find($idsp);
        Product::where('id',$idsp)->update([
            'name'=>$req->newname,
            'id_type'=>$req->newtype,
            'unit_price'=>$req->new_unit_price,
            'promotion_price'=>$req->new_promotion_price,
            'size'=>$req->newsize,
            'description'=>$req->newdesc
        ]);
        $id_product->save();
        $idctsp = ProductDetail::where('id_product',$idsp)->value('id');
        $ctsanpham = ProductDetail::find($idctsp);
        
        $ctsanpham->id_product = $id_product->id;
        $ctsanpham->save();

        $id_detail = ProductDetail::where('id_product',$idsp)->value('id');
        $id_color = ProductColor::where('id',$id_detail)->value('id');
        $id_image = ProductImage::where('id_detail',$id_detail)->get();

        $colorsp = ProductColor::where('id_detail',$idsp)->select('id')->get();
        foreach($colorsp as $cl){
            $cl->delete();
        }
        foreach ($req->newcolor as $key) {
            $colorsp = new ProductColor;
            $colorsp->id_detail = $ctsanpham->id;
            $colorsp->color = $key;
            $colorsp->save();
        }

        if($req->hasfile('newimage')){
            foreach($req->file('newimage') as $image){
                $name=date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
                $image->move('storage/product', $name);  
                $img[] = $name;  
            }

            foreach ($img as $i) {
                ProductImage::insert( [
                    'id_detail'=>$ctsanpham->id,
                    'image'=>$i,
                ]);
            }
        }
        return redirect()->back()->with('editsp', 'Đã sửa: '.$id_product->name);
    }

    public function AjaxXoaimg(Request $req){
        $idimg = ProductImage::find($req->iid);

        ProductImage::find($idimg->id)->delete();
        Storage::delete('app/public/product/'.$idimg->image);
        unlink(storage_path('app/public/product/'.$idimg->image));

        $req->session()->flash('deleleimg', 'Đã xoá ảnh');
        return response()->json(['data' => $idimg->id]);
    }
    

    public function postadminXoanhieusanpham(Request $req){
        if($req->delmsp){
            $spdel = $req->delmsp;
            $numdel = count($req->delmsp);
            foreach($spdel as $key){
                $cl = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=', 'ctsp.id')
                                    ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                                    ->where('sp.id', $key)
                                    ->select('product_color.id')
                                    ->get();

                $img = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=', 'ctsp.id')
                                    ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                                    ->where('sp.id', $key)
                                    ->select('product_image.id')
                                    ->get();

                $dt = ProductDetail::leftjoin('products as sp', 'product_detail.id_product', '=', 'sp.id')
                                    ->where('sp.id', $key)
                                    ->select('product_detail.id')
                                    ->get();

                if($cl){
                    foreach($cl as $temp){
                        $temp->delete();
                    }
                }
                
                if($img){
                    foreach($img as $temp){
                        $temp->delete();
                    }
                }

                if($dt){
                    foreach($dt as $temp){
                        $temp->delete();
                    }
                }
                
                Product::find($key)->delete();
            }

            return redirect()->back()->with('deletesp', 'Đã xoá '.$numdel.' sản phẩm');
        }
        elseif($req->del1sp){
            $cl = ProductColor::leftjoin('product_detail as ctsp', 'product_color.id_detail', '=', 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->where('sp.id', $req->del1sp)
                            ->select('product_color.id')
                            ->get();

            $img = ProductImage::leftjoin('product_detail as ctsp', 'product_image.id_detail', '=', 'ctsp.id')
                            ->leftjoin('products as sp', 'ctsp.id_product', '=', 'sp.id')
                            ->where('sp.id', $req->del1sp)
                            ->select('product_image.id')
                            ->get();

            $dt = ProductDetail::leftjoin('products as sp', 'product_detail.id_product', '=', 'sp.id')
                            ->where('sp.id', $req->del1sp)
                            ->select('product_detail.id')
                            ->get();

            if($cl){
                foreach($cl as $key){
                    $key->delete();
                }
            }
            
            if($img){
                foreach($img as $key){
                    $key->delete();
                }
            }

            if($dt){
                foreach($dt as $key){
                    $key->delete();
                }
            }
            
            $spname = Product::where('id', $req->del1sp)->value('name');
            Product::find($req->del1sp)->delete();
            return redirect()->back()->with('deletesp', 'Đã xoá: '.$spname);
        }

    }

    public function getadminLoaisanpham(){
        $adminlsp = ProductType::paginate(10,['*'],'product');
        $product = Product::join('product_type as ty', 'products.id_type', '=', 'ty.id')
                            ->groupBy('products.id')
                            ->get();

        return view('Admin.pageadmin.adminloaisanpham', compact('adminlsp','product'));
    }

    public function postThemloaisanpham(Request $req){
        $producttype = new ProductType;
        $producttype->type_name = $req->categoriename;
        $producttype->save();

        $adminlsp = ProductType::all();
        return redirect()->back()->with('addlsp', 'Đã thêm: '.$req->categoriename);
    }

    public function postadminSualoaisanpham($idtype, Request $req){
        $lspname = ProductType::where('id', $idtype)->value('type_name');

        $edittype = ProductType::find($idtype);
        $edittype->type_name  = $req->newtypename;
        $edittype->save();

        return redirect()->back()->with('editlsp', 'Đã sửa: '.$lspname);
    }

    public function postadminXoanhieuloaisanpham(Request $req){
        if($req->delmlsp){
            $lsp = $req->delmlsp;

            $numdellsp = count($req->delmlsp);

        foreach($lsp as $key){
            ProductType::find($key)->delete();
            }
            return redirect()->back()->with('deletelsp', 'Đã xoá '.$numdellsp.' loại');
        }
        elseif($req->del1lsp){

            $lspname = ProductType::where('id', $req->del1lsp)->value('type_name');
            ProductType::find($req->del1lsp)->delete();
            return redirect()->back()->with('deletelsp', 'Đã xoá: '.$lspname);
        }
        
    }
    
    public function getadminKhachhang(){
        $table  = Customer::paginate(10,['*'],'product');
        return view('Admin.pageadmin.adminkhachhang',compact('table'));
    }

    public function getadminDonhang(){
        $customers = Customer::all();
        $bills = Bill::orderBy('status','desc')->paginate(10,['*'],'product');

        $checkbill = Bill::where('status', 4)->paginate(10,['*'],'product');
        $sendbill = Bill::where('status', 3)->paginate(10,['*'],'product');
        $otherbill = Bill::where('status','<', 3)->orderBy('status','desc')->paginate(10,['*'],'product');

        $get_bill = DB::select(DB::raw('SELECT bd.id as bdid, b.id as bid, b.total_price, bd.product_name, bd.color, bd.image, bd.size, bd.quantity, bd.price, c.name FROM bill_detail as bd, customers as c, bills as b WHERE bd.id_bill in (SELECT b.id FROM bills WHERE b.id_customer in (SELECT c.id FROM customers))'));
        // dd($checkbill);
                        // dd($get_bill);
        return view('Admin.pageadmin.admindonhang', compact('get_bill','bills','customers', 'checkbill', 'sendbill', 'otherbill'));
    }

    public function completedUpdate(Request $req){
        $id = $req->checkid;
        DB::table('bills')->where('id', $id)->update(['status' => 3]);
		$customers = Customer::all();
        $bills = Bill::all();

        $e = Customer::join('bills as b','customers.id','=','b.id_customer')->where('b.id',$id)->value('email');

        if($e){
            // $to =  $customers->email;
            $subject = 'Đơn Hàng Đã Được Xác Nhận';
            $data = array(
                'contents' => ''
            );
            
            Mail::send('email.xacnhan', $data, function($message) use ($e, $subject) {
                $message->from('nguyenkimhan2013@gmail.com', 'HTN BabyLove');
                $message->to($e,'')->subject($subject);
            });

            $req->session()->flash('confirmbill', 'Đã xác nhận đơn hàng');
            return response()->json();  
        }

        else{
            $req->session()->flash('confirmbillnomail', 'Đã xác nhận đơn hàng - Không gửi được mail');
            return response()->json(); 
        }
    }

    public function cancelUpdate(Request $req){
        $id = $req->cancleid;
        DB::table('bills')->where('id', $id)->update(['status' => 1]);
		$customers = Customer::all();
        $bills = Bill::all();

        $e = Customer::join('bills as b','customers.id','=','b.id_customer')->where('b.id',$id)->value('email');

        if($e){
            $subject = 'Đơn Hàng Bị Huỷ';
            $data = array(
                'contents' => ''
            );
            
            Mail::send('email.huydonhang', $data, function($message) use ($e, $subject) {
                $message->from('nguyenkimhan2013@gmail.com', 'HTN BabyLove');
                $message->to($e,'')->subject($subject);
            });

            $req->session()->flash('cancelbill', 'Đã huỷ đơn hàng');
            return response()->json();
        }
        else{
            $req->session()->flash('cancelbillnomail', 'Đã huỷ đơn hàng - Không gửi được mail');
            return response()->json();
        }
    }

    public function AjaxSuccessbill(Request $req){
        $bill = Bill::find($req->successid);
        $bill->status = 2;
        $bill->save();

        $req->session()->flash('successbill','Đơn hàng đã gửi thành công');
        return response()->json(['data'=>$bill]);
    }
    public function AjaxFailbill(Request $req){
        $bill = Bill::find($req->failid);
        $bill->status = 1;
        $bill->save();

        $req->session()->flash('failbill','Đơn hàng đã gửi thất bại');
        return response()->json(['data'=>$bill]);
    }

    public function getadminDoanhthu(){
        $dtdh = DB::select(DB::raw('SELECT month(created_at) as month, sum(total_price) as tongtien, sum(total_product) as tongsp, count(*) as numbill FROM bills WHERE status = 2 GROUP BY month'));

        $totalbill = DB::select(DB::raw('SELECT month(created_at) as month, count(*) as numbill FROM bills GROUP BY month'));

        $successbill = DB::select(DB::raw('SELECT month(created_at) as month, count(*) as succbill FROM bills WHERE status = 2 GROUP BY month'));

        $failbill = DB::select(DB::raw('SELECT month(created_at) as month, count(*) as failbill FROM bills WHERE status = 1 GROUP BY month'));
        // dd($failbill);
        return view('Admin.pageadmin.admindoanhthu', compact('dtdh', 'totalbill', 'successbill', 'failbill'));
    }
	
	public function gettimkiemall(Request $request){
        
        $tukhoa = $request->tukhoa;
        $tk_lsp = $request->tk_lsp;
        $tk_kh = $request->tk_kh;

        if(!empty($tukhoa)){
            $product = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                ->where('name','like','%'.$tukhoa.'%')
                ->groupBy('products.id')
                ->get();

        }

        if(!empty($tk_lsp)){
            $pro_type = Product::join('product_detail as ctsp', 'products.id', '=', 'ctsp.id_product')
                ->join('product_image as asp', 'ctsp.id', '=', 'asp.id_detail')
                ->join('product_type as ty', 'products.id_type', '=', 'ty.id')
                ->where('type_name','like','%'.$tk_lsp.'%')
                ->groupBy('ty.id')
                ->get();
        }

        if(!empty($tk_kh)){
            // $product = Customer::where('name','like','%'.$tk_kh.'%')->orWhere('email','like','%'.$tk_kh.'%')->groupBy('id')
            //     ->get();

            $pro = DB::select(DB::raw("SELECT * FROM customers WHERE name LIKE '%".$tk_kh."%' GROUP BY id"));
        }
        
        return view('Admin.pageadmin.admintimkiem', compact('product','pro_type','tukhoa','tk_lsp', 'tk_kh','pro'));

    }
	
	//Lien he
    public function postlh(Request $request){
        $subject = $request->subject;
        $email = $request->email;
        $comment = $request->comment;

        Mail::send('email.lienhe', array('email'=>$request["email"],'subject'=>$request["subject"], 'comment'=>$request['comment']), function($message){
            $message->to('nguyenkimhan2013@gmail.com','HTN BabyLove')->subject('Liên hệ từ khách hàng');
        });
        return redirect()->back()->with('lienhe', 'Đã gửi!');
    }
}
