@extends('Admin.master')
<link rel="stylesheet" href="source/ADMIN/css/search.css">

@section('contentadmin')
<div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
            Hoàng Thủy Nguyên
                </a> 
                </div>
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
                        @include('Admin.pageadmin.adminnav')
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
                                            <td class="bihuy">1</td>
                                            <td>Bị huỷ</td>
                                        </tr>
                                        <tr>
                                            <td class="hoantat">2</td>
                                            <td>Hoàn tất</td>
                                        </tr>
                                        <tr>
                                            <td class="danggui">3</td>
                                            <td>Hàng đang gửi</td>
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
                                    <table class="table table-bordered text-align" id="myTable">
                                        <thead>
                                            <tr class="thead_change_color">
                                                <th>Mã hoá đơn</th>
                                                <th >Trạng thái</th>
                                                <th>Tổng tiền</th>
                                                <th>Số lượng sản phẩm</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày đặt</th>
                                                <th>Đơn hàng</th>
                                                <th>Khách hàng</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bills as $b)
                                            @if($b->status == 1)
                                                <tr class="bihuy">
                                            @elseif($b->status == 2)
                                                <tr class="hoantat">
                                            @elseif($b->status == 3)
                                                <tr class="danggui">
                                            @elseif($b->status == 4)
                                                <tr class="choxacnhan">
                                        @endif
                                            <td>{{ $b->id }}</td>
                                            <td>
                                               @if($b->status == 1)
                                                    Bị huỷ
                                                @elseif($b->status == 2)
                                                    Hoàn tất
                                                @elseif($b->status == 3)
                                                    Hàng đang gửi
                                                @elseif($b->status == 4)
                                                    Chờ xác nhận
                                                @endif

                                            </td>
                                            <td>{{ number_format($b->total_price) }} đ</td>
                                            <td>{{ $b->total_product }}</td>
                                            <td class="text-left">{{ $b->address }}</td>
                                            <td>{{ date('d-m-Y / H:ip', strtotime($b->created_at)) }}</td>

                                            <td><a href="" data-toggle="modal" data-target="#{{$b->id}}">Xem</a>
                                            </td>
                                            <td><a href="" data-toggle="modal" data-target="#c{{$b->id}}">Xem</a>
                                            </td>
                                            <td>
                                                <div class="">
                                                @if($b->status == 1 || $b->status == 4)
                                              
                                                    <form action="{{ route('completedUpdate', $b->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PATCH') }}
                                                        <button class="btn btn-info btn-xs edit_icon" type="submit" data-toggle="tooltip" data-original-title="Duyệt đơn hàng">
                                                            <i class="fa fa-check"></i></button>
                                                    </form>
                                                    <form action="{{ route('cancelUpdate', $b->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PATCH') }}
                                                        <button class="btn btn-info btn-xs edit_icon" type="submit" data-toggle="tooltip" data-original-title="Huỷ đơn hàng">
                                                            <i class="fa fa-times"></i></button>
                                                    </form>
                                                @endif
                                                </div>
                                            </td>
                                            </tr>
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
<!-- Modal xem khách hàng -->
    <form action="" method="post">
        <!-- The Modal -->
        @foreach($bills as $b)
        @foreach($customers as $c)
        @if($b->id_customer == $c->id)
        <div class="modal fade modalcart" id="c{{$b->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Khách hàng {{$c->name}} đã mua <a href="" data-toggle="modal" data-target="#{{$b->id}}"><u>đơn hàng {{$b->id}}</u></a></h4>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body cart-center">
                        <ul>
                            <li>Họ tên: {{$c->name}}</li>
                            <li>Giới tính: {{$c->gender}}</li>
                            <li>SĐT: {{$c->phone}}</li>
                            <li>Email: {{$c->email}}</li>
                            <li>Địa chỉ: {{$c->address}}</li>

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        @if($b->status == 1 || $b->status == 4)
                        <form style="display: none" action=""></form>
                        <form action="{{ route('cancelUpdate', $b->id) }}" method="POST" style="display: inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button class="btn btn-primary" type="submit">Huỷ đơn hàng</button>
                        </form>
                        <form action="{{ route('completedUpdate', $b->id) }}" method="POST" style="display: inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button class="btn btn-primary" type="submit">Duyệt đơn hàng</button>
                        </form>
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </form>
    <!-- Modal xem đơn hàng -->
    <form action="" method="post">
        <!-- The Modal -->
        @foreach($get_bill as $gb)
        @foreach($bills as $b)
        @if($gb->bid == $b->id)
        <div class="modal fade modalcart" id="{{$b->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Đơn hàng {{$b->id_bill}} (có {{$b->total_product}} sản phẩm) </h4>
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
                            @foreach($get_bill as $gbb)
                            @if($gbb->bid == $b->id)
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="storage/product/{{$gbb->image}}"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                  <b style="font-size:15px;">{{$gbb->product_name}}
</b>                                                                </a> </div>
                                                        <div class="cart-product-info">
                                                            <div>Màu: {{$gbb->color}}</div>
                                                            <div> Size: {{$gbb->size}} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                {{ $gbb->quantity}}
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right;">
                                            <div style="padding: 35% 0;"> {{ number_format($gbb->price) }} đ</div>
                                        </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center">
                                            <div style="padding: 35% 0;"> 
                                                <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                            <!--end desktop-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="cart-order">
                            <div class="cart-total-price col-md-6 offset-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-12 total-price"><b style="font-size: 18px">Tổng tiền: {{number_format($b->total_price) }} đ </b></div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        @if($b->status == 1 || $b->status == 4)
                        <form style="display: none" action=""></form>

                        <form action="{{ route('cancelUpdate', $b->id) }}" method="POST" style="display: inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button class="btn btn-primary" type="submit">Huỷ đơn hàng</button>
                        </form>

                        <form action="{{ route('completedUpdate', $b->id) }}" method="POST" style="display: inline-block;">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button class="btn btn-primary" type="submit">Duyệt đơn hàng</button>
                        </form>
                        

                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </form>
        
    </script>

    

    @endsection