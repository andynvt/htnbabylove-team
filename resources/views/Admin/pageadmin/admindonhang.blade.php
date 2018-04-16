@extends('Admin.master')
<link rel="stylesheet" href="source/ADMIN/css/search.css">

@section('contentadmin')
<div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
            Hoàng Thủy Nguyên
        </a> </div>
                <ul class="nav">
                    <li>
                        <a href="{{ route('admincanhan') }}"> <i class="ti-unlock"></i>
                            <p>CÁ NHÂN</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminsanpham') }}">
                            <i class="ti-package"></i>
                            <p>SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminloaisanpham') }}">
                            <i class="glyphicon glyphicon-th-large"></i>
                            <p>LOẠI SẢN PHẨM</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('admindonhang') }}">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Quản lý đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminkhachhang') }}">
                            <i class="ti-user"></i>
                            <p>Quản lý khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admindoanhthu') }}">
                            <i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admindanhgia') }}">
                            <i class="ti-comment-alt"></i>
                            <p>Quản lý đánh giá</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar bar1"></span> <span class="icon-bar bar2"></span> <span class="icon-bar bar3"></span> </button>
                        <h3 class="title_of_manager_product">QUẢN LÝ ĐƠN HÀNG</h3> <small id="now_time">
                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
            </small> </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-globe"></i>
                                    <p>Thông Báo</p> <span class="badge" style="background-color:#FF4066">1</span> </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-bell"></i>
                                    <p>Admin</p> <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Cá Nhân</a></li>
                                    <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>Cài Đặt</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="space10">&nbsp;</div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 ">
                        <div class="panel panel-default ">
                            <div class="panel-heading "> <strong>
                <span class="glyphicon glyphicon-th "></span>
                <span>Chú thích</span>
              </strong> </div>
                            <div class="container-fluid">
                                <div class="space10">&nbsp;</div>
                                <table class="table table-bordered text-align">
                                    <thead>
                                        <tr class="thead_change_color">
                                            <th>Màu sắc</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="danggui">1</td>
                                            <td>Đang gửi</td>
                                        </tr>
                                        <tr>
                                            <td class="hoantat">2</td>
                                            <td>Hoàn thành</td>
                                        </tr>
                                        <tr>
                                            <td class="bihuy">3</td>
                                            <td>Bị huỷ</td>
                                        </tr>
                                        <tr>
                                            <td class="choxacnhan">4</td>
                                            <td>Chờ xác nhận</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <div class="feedback-item-name">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Danh sách đơn hàng</p>
                                        </div>
                                        <div class="col-md-1">
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div id="wrap">
                                                <form action="#" autocomplete="on">
                                                    <input id="search" name="search" type="text" placeholder="Search...">
                                                    <input id="search_submit" value="Rechercher" type="submit"> </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width st_table">
                                <script type="text/javascript">
                                    $(function() {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })

                                </script>
                                <div class="container-fluid">
                                    <table class="table table-bordered text-align">
                                        <thead>
                                            <tr class="thead_change_color">
                                                <th>Mã hoá đơn</th>
                                                <th>Khách hàng</th>
                                                <th>Tổng tiền</th>
                                                <th>Số lượng sản phẩm</th>
                                                <th>Địa chỉ</th>
                                                <th>Trạng thái</th>
                                                <th>Xem chi tiết</th>
                                                <th>Xác nhận</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bill as $b)
                                        @foreach($customer as $c)
                                        @if($b->id_customer  == $c->id_customer)
                                            @if($b->status == 1)
                                                <tr class="danggui">
                                            @elseif($b->status == 2)
                                                <tr class="hoantat">
                                            @elseif($b->status == 3)
                                                <tr class="bihuy">
                                            @elseif($b->status == 4)
                                                <tr class="choxacnhan">
                                            @endif
                                            <td>{{$b->id_bill}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>{{ number_format($b->total_price) }} đ</td>
                                            <td>{{ $b->total_product }}</td>
                                            <td>{{ $b->address }}</td>
                                            <td>
                                                @if($b->status == 1)
                                                    Đang gửi
                                                @elseif($b->status == 2)
                                                    Hoàn tất
                                                @elseif($b->status == 3)
                                                    Bị huỷ
                                                @elseif($b->status == 4)
                                                    Chờ xác nhận
                                                @endif

                                            </td>
                                            <td><a href="" data-toggle="modal" data-target="#{{$b->id_bill}}">Chi Tiết đơn hàng</a></td>
                                            <td>
                                                <div class="">
                                                    <a href="#" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Xác nhận"> <i class="fa fa-check"></i> </a>
                                                </div>
                                            </td>
                                            </tr>

                                        @endif
                                        @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- Phan popup madal cua xem chi tiet -->
    <form action="" method="post">
        <!-- The Modal -->
        @foreach($bill as $b)
        @foreach($customer as $c)
        <div class="modal fade modalcart" id="{{$b->id_bill}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Đơn hàng {{$b->id_bill}} (có {{$b->total_product}} sản phẩm)</h4>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body cart-center">
                        <div class="row cart-title">
                            <div class="col-sm-6"> Sản phẩm </div>
                            <div class="col-sm-2" style="text-align: center"> Số lượng </div>
                            <div class="col-sm-2" style="text-align: right"> Đơn giá </div>
                            <div class="col-sm-2" style="text-align: center"> Xóa </div>
                        </div>
                        <div class="cart-content">
                            <!--desktop-->
                            <div class="desktop-cart">
                            @foreach($bill as $bi)
                            @foreach($bill_detail as $bd)
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="source/ADMIN/image/products/2.jpg"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                   HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062
                                                               </a> </div>
                                                        <div class="cart-product-info">
                                                            <div class="form-group change-color">
                                                                <div class="color-dropdown">
                                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                                </div>
                                                            </div>
                                                            <div> Kích thước: 30x30cm </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                {{ $bd->quantity}}
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right;">
                                            <div style="padding: 35% 0;"> {{ number_format($bd->unit_price) }} </div>
                                        </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center">
                                            <div style="padding: 35% 0;"> 
                                                <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endforeach
                            </div>
                            <!--end desktop-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="cart-order">
                            <div class="cart-total-price col-md-6 offset-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-12 total-price">Tổng tiền: </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Duyệt đơn hàng</button>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
        @endforeach
    </form>

    @endsection