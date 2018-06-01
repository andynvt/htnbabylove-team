<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Main page
Route::get('index', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSP'
]);

Route::get('gioi-thieu', [
	'as' => 'gioithieu',
	'uses' => 'PageController@getAbout'
]);

Route::get('chinh-sach-bao-mat', [
	'as' => 'baomat',
	'uses' => 'PageController@getPolicy'
]);

Route::get('dieu-khoan-su-dung', [
	'as' => 'dieukhoan',
	'uses' => 'PageController@getTerms'
]);

Route::post('thanhtoan', [
	'as' => 'thanhtoantest',
	'uses' => 'PageController@postCheckout'
]);

Route::post('dathang/{id}', [
	'as' => 'chitietsp',
	'uses' => 'PageController@postChitietsp'
]);

Route::get('chi-tiet-san-pham/{id}', [
	'as' => 'chitietsanpham',
	'uses' => 'PageController@getDetail'
]);

Route::post('danh-gia/{id}',[
	'as' => 'danhgia',
	'uses' => 'PageController@postDanhGia'
]);

Route::get('tim-kiem', [
	'as' => 'timkiem',
	'uses' => 'PageController@getTimkiem'
]);

Route::get('tim-kiem-loai/{pro}', [
	'as' => 'timkiemloai',
	'uses' => 'PageController@getTimkiemloai'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('quick-add-cart/{id}',[
	'as'=>'themnhanh',
	'uses'=>'PageController@getQuickAddCart'
]);

Route::get('del-cart/{id}/{color}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);

Route::get('thanh-toan',[
	'as' => 'thanhtoan',
	'uses' => 'PageController@getThanhToan'
]);

Route::post('dat-hang',[
	'as' => 'dathang',
	'uses' => 'PageController@postDatHang'
]);

//Admin
Route::get('admin-index', [
	'as' => 'adminindex',
	'uses' => 'PageController@getAdminIndex'
]);

Route::get('admin-canhan', [
	'as' => 'admincanhan',
	'uses' => 'PageController@getadminCanhan'
])->middleware('adminLogin');

Route::get('admin-danhgia', [
	'as' => 'admindanhgia',
	'uses' => 'PageController@getadminDanhgia'
])->middleware('adminLogin');

Route::get('admin-chitietdanhgia/{idfb}', [
	'as' => 'adminchitietdanhgia',
	'uses' => 'PageController@getadminChitietDanhgia'
])->middleware('adminLogin');

Route::get('admin-danhgiatheoloai/{fbtype}', [
	'as' => 'admindanhgiatheoloai',
	'uses' => 'PageController@getadminDanhgiatheoloai'
])->middleware('adminLogin');

Route::post('admin-xoanhieudanhgia', [
	'as' => 'adminxoanhieudanhgia',
	'uses' => 'PageController@postadminXoanhieudanhgia'
])->middleware('adminLogin');

Route::get('admin-sanpham', [
	'as' => 'adminsanpham',
	'uses' => 'PageController@getadminSanpham'
])->middleware('adminLogin');

Route::post('admin-themsp', [
	'as' => 'adminthemsp',
	'uses' => 'PageController@postadminThemsanpham'
])->middleware('adminLogin');

Route::get('admin-themsanpham', [
	'as' => 'adminthemsanpham',
	'uses' => 'PageController@getadminThemsanpham'
])->middleware('adminLogin');

Route::get('admin-suasanpham/{idsp}', [
	'as' => 'adminsuasanpham',
	'uses' => 'PageController@getadminSuasanpham'
])->middleware('adminLogin');

Route::post('admin-edit/{idsp}', [
	'as' => 'adminsuasp',
	'uses' => 'PageController@postadminSuasanpham'
])->middleware('adminLogin');

Route::get('xoa-img', 'PageController@AjaxXoaimg');

Route::post('admin-xoanhieusanpham', [
	'as' => 'adminxoanhieusanpham',
	'uses' => 'PageController@postadminXoanhieusanpham'
])->middleware('adminLogin');

Route::post('admin-themloaisanpham', [
	'as' => 'adminthemloaisanpham',
	'uses' => 'PageController@postThemloaisanpham'
])->middleware('adminLogin');

Route::get('admin-loaisanpham', [
	'as' => 'adminloaisanpham',
	'uses' => 'PageController@getadminLoaisanpham'
])->middleware('adminLogin');

Route::post('admin-themloaisanpham', [
	'as' => 'adminthemloaisanpham',
	'uses' => 'PageController@postThemloaisanpham'
])->middleware('adminLogin');

Route::post('admin-sualoaisanpham/{idtype}', [
	'as' => 'adminsualoaisanpham',
	'uses' => 'PageController@postadminSualoaisanpham'
])->middleware('adminLogin');

Route::post('admin-xoanhieuloaisanpham', [
	'as' => 'adminxoanhieuloaisanpham',
	'uses' => 'PageController@postadminXoanhieuloaisanpham'
])->middleware('adminLogin');

Route::get('admin-khachhang', [
	'as' => 'adminkhachhang',
	'uses' => 'PageController@getadminKhachhang'
])->middleware('adminLogin');

Route::get('admin-donhang', [
	'as' => 'admindonhang',
	'uses' => 'PageController@getadminDonhang'
])->middleware('adminLogin');

Route::get('check-bill', 'PageController@completedUpdate');
Route::get('cancle-bill', 'PageController@cancelUpdate');

Route::get('success-bill', 'PageController@AjaxSuccessbill');
Route::get('fail-bill', 'PageController@AjaxFailbill');

Route::get('admin-doanhthu', [
	'as' => 'admindoanhthu',
	'uses' => 'PageController@getadminDoanhthu'
])->middleware('adminLogin');

Route::get('dangxuat',[
	'as'=>'dangxuat',
	'uses'=>'UserController@getDangXuatAdmin'
])->middleware('adminLogin');

Route::get('admin-index', 'UserController@getdangnhapAdmin');
Route::post('admin-index', 'UserController@postdangnhapAdmin');
Route::post('sua/{id}',[
	'as' => 'suaAdmin',
	'uses' => 'UserController@postSuaAdmin'
])->middleware('adminLogin');

Route::get('admin-timkiem', [
	'as' => 'admintimkiem',
	'uses' => 'PageController@gettimkiemall'
])->middleware('adminLogin');

Route::post('lien-he', [
	'as' => 'lienhe',
	'uses' => 'PageController@postlh'
]);

Route::get('mausp', 'PageController@getAddtoCart');
Route::get('changeqty', 'PageController@getChangeqty');
