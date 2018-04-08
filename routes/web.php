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

Route::get('thanh-toan', [
	'as' => 'thanhtoan',
	'uses' => 'PageController@getCheckout'
]);

Route::get('chi-tiet-san-pham/{id}', [
	'as' => 'chitietsanpham',
	'uses' => 'PageController@getDetail'
]);

Route::get('tim-kiem', [
	'as' => 'timkiem',
	'uses' => 'PageController@getTimkiem'
]);

//Admin
Route::get('admin-index', [
	'as' => 'adminindex',
	'uses' => 'PageController@getAdminIndex'
]);

Route::get('admin-canhan', [
	'as' => 'admincanhan',
	'uses' => 'PageController@getadminCanhan'
]);

Route::get('admin-danhgia', [
	'as' => 'admindanhgia',
	'uses' => 'PageController@getadminDanhgia'
]);

Route::get('admin-chitietdanhgia', [
	'as' => 'adminchitietdanhgia',
	'uses' => 'PageController@getadminChitietDanhgia'
]);

Route::get('admin-sanpham', [
	'as' => 'adminsanpham',
	'uses' => 'PageController@getadminSanpham'
]);

Route::get('admin-loaisanpham', [
	'as' => 'adminloaisanpham',
	'uses' => 'PageController@getadminLoaisanpham'
]);

Route::get('admin-khachhang', [
	'as' => 'adminkhachhang',
	'uses' => 'PageController@getadminKhachhang'
]);

Route::get('admin-donhang', [
	'as' => 'admindonhang',
	'uses' => 'PageController@getadminDonhang'
]);

Route::get('admin-doanhthu', [
	'as' => 'admindoanhthu',
	'uses' => 'PageController@getadminDoanhthu'
]);
