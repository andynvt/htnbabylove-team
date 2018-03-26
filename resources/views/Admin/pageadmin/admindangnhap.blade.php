@extends('Admin.master') @section('contentadmin')
<div class="limiter admin-login">
    <div class="container-login100">
        <div class="wrap-login100 p-t-5 p-b-20">
            <form class="login100-form validate-form">
                <span class="login100-form-avatar">
						<img src="source/image/logo mobile.png" alt="LOGO">
					</span>

                <div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate="Chưa nhập Tên đăng nhập">
                    <input class="input100 focus100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Chưa nhập mật khẩu">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Mật khẩu"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
							Đăng nhập
						</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
