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
                    <li class="active">
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
                        <h3 class="title_of_manager_product">QUẢN LÝ SẢN PHẨM</h3> <small id="now_time">
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="add_new_product"> <a href="{{ route('adminthemsanpham') }}" class="btn btn-primary" id="btn_add_product">Thêm sản phẩm mới</a> </div>
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
                                                <th>Mã số</th>
                                                <th>Loại</th>
                                                <th>Tên</th>
                                                <th>Giá Gốc</th>
                                                <th>Giá Khuyến Mãi</th>
                                                <th>Kích thước</th>
                                                <th>Chi tiết</th>
                                                <th>Sửa/Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($takesp as $sp)
                                            <tr>
                                                <td>{{ $sp->spid }}</td>
                                                <td>{{ $sp->type_name }}</td>
                                                <td>{{ $sp->name }}</td>
                                                <td>{{ $sp->unit_price }}</td>
                                                <td>{{ $sp->promotion_price }}</td>
                                                <td>{{ $sp->size }}</td>
                                                <td><a href="" data-toggle="modal" data-target="#modal-admin-product-detail">Xem</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="{{ route('adminsuasanpham', $sp->spid) }}" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="{{ route('adminxoasanpham', $sp->spid) }}" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
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
@endsection