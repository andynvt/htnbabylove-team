
<ul class="nav navbar-nav navbar-right">
    <li>
        <a href="{{ route('admindonhang') }}" > <i class="fa fa-globe"></i>
            <p>Đơn Hàng Chờ Duyệt</p><span class="badge" style="background-color:#FF4066">{{count($confirm_bill)}}</span> </a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-bell"></i>
            <p>Admin</p> <b class="caret"></b> </a>
        <ul class="dropdown-menu">
            @if(Auth::check())
            <li><a href="admin-canhan"><i class="fa fa-user" aria-hidden="true"></i>{{Auth::user()->name}}</a></li>
            <li><a href="admin-canhan"><i class="fa fa-cogs" aria-hidden="true"></i>Cài Đặt</a></li>
            <li><a href="dangxuat"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng Xuất</a></li>
            @endif
        </ul>
    </li>
</ul>
