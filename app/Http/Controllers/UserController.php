<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getdangnhapAdmin(){
        
        return view('Admin.pageadmin.admindangnhap');
    }

    public function postdangnhapAdmin(Request $request){
        
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3|max:32'
            ], 
            [

                'email.required'=>'Bạn chưa nhập mail',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
                'password.max'=>'Mật khẩu được tối đa 32 ký tự'
            ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
            {
                return redirect('admin-canhan');
            }
            else
            {
                return redirect('admin-index')->with('thongbao', 'Đăng nhập không thành công');
            }
    }

    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('admin-index');
    }

    public function postSuaAdmin(Request $request,$id){
        $user = User::find($id);
        $this->validate($request,
            [
                'oldpass'=>'required',
                'newpass'=>'required|same:oldpass'
            ], 
            [
                'oldpass.required'=>'Bạn chưa nhập mật khẩu cũ',
                'newpass.required'=>'Bạn chưa nhập mật khẩu mới',
                'newpass.same'=>'Mật khẩu nhập lại chưa trùng khớp'
                
            ]);

            $user->password = bcrypt($request->oldpass);
            $user->save();
            return redirect('admin-canhan')->with('thongbao', 'Sửa thành công');

    }

}
