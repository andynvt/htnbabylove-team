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
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <form action="{{route('admintimkiem')}}"  method="get">
                                                <input id="search" name="tukhoa" type="text" placeholder="Tìm kiếm..." required="" />
                                                <button id="search_submit" value="Rechercher" type="submit"></button> 
                                            </form>
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
                                    <form method="post" onsubmit="return submitForm(this);" action="{{ route('adminxoanhieusanpham') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <table class="table table-bordered text-align" id="tbl_sanpham" >
                                            <thead>
                                                <tr class="thead_change_color">
                                                    <th>Mã số</th>
                                                    <th onclick="sortTable(1)">Loại <span class="glyphicon glyphicon-triangle-top" style="opacity: 0.6"></span></th>
                                                    <th>Tên</th>
                                                    <th>Giá Gốc</th>
                                                    <th>Giá Khuyến Mãi</th>
                                                    <th>Kích thước</th>
                                                    <th>Chi tiết</th>
                                                    <th>
                                                        <a id="open-del-check">Xoá nhiều</a>
                                                        <button class="btn-delm-sp" id="del-check" type="submit">Xoá</button>
                                                        
                                                        <a class="btn-delm-sp" id="cancel-check">Huỷ</a>
                                                        <div id="del-checkall">
                                                            <a id="check-all" href="#tbl_sanpham" data-toggle="checkboxes" data-action="check">
                                                                Chọn hết
                                                            </a>
                                                            /
                                                            <a id="uncheck-all" href="#tbl_sanpham" data-toggle="checkboxes" data-action="uncheck">
                                                                Bỏ chọn
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($takesp as $sp)
                                                <tr>
                                                    <td>{{ $sp->spid }}</td>
                                                    <td>{{ $sp->type_name }}</td>
                                                    <td class="text-left">{{ $sp->name }}</td>
                                                    <td>{{ $sp->unit_price }}</td>
                                                    <td>{{ $sp->promotion_price }}</td>
                                                    <td>{{ $sp->size }}</td>
                                                    <td><a href="" data-toggle="modal" data-target="#ctsp_{{ $sp->spid }}">Xem</a></td>
                                                    <td class="text-center">
                                                        <div class="del1-sp">
                                                            <a href="{{ route('adminsuasanpham', $sp->spid) }}" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                            <button type="submit" class="btn btn-danger btn-xs del_icon" data-toggle="tooltip" data-original-title="Xóa">
                                                                <span class="glyphicon glyphicon-trash"></span> 
                                                            </button>
                                                            <input type="hidden" name="del1sp" value="{{ $sp->spid }}">
                                                        </div>
                                                        <div class="delm-sp">
                                                            <input type="checkbox" name="delmsp[]" multiple value="{{ $sp->spid }}" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            	@endforeach
                                            </tbody>
                                        </table>
                                        <div class="row " style="text-align: center;">{{$takesp->links() }}</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script>
    $('#check-all').on('click', function(e){
        $('#tbl_sanpham').checkboxes('check');
        e.preventDefault();
    });

    $('#uncheck-all').on('click', function(e){
        $('#tbl_sanpham').checkboxes('uncheck');
        e.preventDefault();
    });
</script>

@endsection