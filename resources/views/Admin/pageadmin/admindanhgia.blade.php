@extends('Admin.master')

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
                    <li>
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
                    <li class="active">
                        <a href="{{ route('admindanhgia') }}">
                            <i class="ti-comment-alt"></i>
                            <p>Quản lý đánh giá</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default ">
                <div class="container-fluid ">
                    <div class="navbar-header ">
                        <button type="button " class="navbar-toggle "> <span class="sr-only ">Toggle navigation</span> <span class="icon-bar bar1 "></span> <span class="icon-bar bar2 "></span> <span class="icon-bar bar3 "></span> </button>
                        <h3 class="title_of_manager_product ">QUẢN LÝ LOẠI SẢN PHẨM</h3> <small id="now_time ">
              <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
            </small> </div>
                    <div class="collapse navbar-collapse ">
                        @include('Admin.pageadmin.adminnav')
                    </div>
                </div>
            </nav>
            <!-- KET THUC PHAN TABLE -->
            <div class="container-fluid">
                <div class="feedback-admin">
                    <div class="feedback-typeproduct-title form-group clearfix">
                        @foreach($loai_sp as $fblsp)
                        <div class="col-md-3">
                            <a href="{{ route('admindanhgiatheoloai', $fblsp->id) }}" data-toggle="tooltip" title="{{ $fblsp->type_name }}">
                                <div class="feedback-typeproduct-name">
                                    <p>{{ $fblsp->type_name }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="feedback-typeproduct-content clearfix">
                        <div class="col-md-12">
                            <div class="feedback-search clearfix">
                                <div class="col-md-12 div-form-search-feedback">
                                    <form class="form-search-feedback" action="#" autocomplete="on">
                                        <input id="search" name="search" type="text" placeholder="Search...">
                                        <input id="search_submit" value="" type="submit"> </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="feedback-typeproduct-item clearfix">
                                @foreach($getsp as $fbsp)
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="{{ route('adminchitietdanhgia', $fbsp->spid) }}"><img src="storage/product/{{ $fbsp->image }}" alt="Thumbnail Image 1" class="img-responsive">
                                            @foreach($getnumfb as $numfb)
                                            @if($fbsp->spid == $numfb->id)
                                                <div class="feedback-qty">
                                                    <div class="qty-feedback">{{ $numfb->numfb }}</div>
                                                </div>
                                            @else
                                            @endif
                                            @endforeach
                                            <p>{{ $fbsp->name }}</p>
                                        </a>
                                    </div>
                                </div>
                                
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="row" >{{$getsp->links() }}</div> --}}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection