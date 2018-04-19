@extends('Admin.master')

@section('contentadmin')
<div class="limiter">
<div class="limiter admin-index">
        <div class="container-login100">
            <div class="wrap-login100 p-t-5 p-b-20">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                            {{session('thongbao')}}<br>
                    </div>
                @endif
                <form class="login100-form validate-form" method="POST" action="admin-index" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <span class="login100-form-title p-b-20">
						Hoàng Thuỷ Nguyên<br>Baby Love
					</span>
                    <span class="login100-form-avatar">
						<img src="source/image/favicon.png" alt="LOGO">
					</span>

                    <div class="wrap-input100 validate-input m-t-50 m-b-35" >
                        <input class="input100 focus100" type="" name="email">
                        <span class="focus-input100" data-placeholder="Tên đăng nhập"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" >
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Mật khẩu"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
							Đăng nhập
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection