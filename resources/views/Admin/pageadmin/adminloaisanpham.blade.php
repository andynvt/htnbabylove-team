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
                <li class="active">
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
    <div class="main-panel ">
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
        <div class="container-fluid ">
            <div class="space10">&nbsp;</div>
            <div class="row ">
                <div class="col-lg-3 col-md-6 ">
                    <div class="panel panel-default ">
                        <div class="panel-heading "> <strong>
            <span class="glyphicon glyphicon-th "></span>
            <span>Thêm loại mới</span>
          </strong> </div>
                        <div class="panel-body ">
                            <form method="post" action="{{ route('adminthemloaisanpham') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group ">
                                    <input type="text " class="form-control" name="categoriename" placeholder="Tên loại sản phẩm " required> 
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <div class="row">
                                <div class="col-md-8"> <strong>
            <span class="glyphicon glyphicon-th "></span>
            <span>Loại sản phẩm</span>
          </strong> </div>
                            </div>
                        </div>
                        <div class="panel-body ">
                            <div class="row">
                                <div class="col-lg-7 col-md-8">
                                    <p>Có {{ count($adminlsp) }} loại sản phẩm</p>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                    <p> &nbsp;</p>
                                </div>
                                <div class="col-lg-4 col-md-3 ">
                                    <div id="wrap">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <form action="{{route('admintimkiem')}}"  method="get">
                                            <input id="search" name="tk_lsp" type="text" placeholder="Tìm kiếm..." required="">
                                            <input id="search_submit" value="Rechercher" type="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <form method="post" onsubmit="return submitForm(this);" action="{{ route('adminxoanhieuloaisanpham') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-bordered table-striped table-hover" id="tbl_lsp">
                                <thead>
                                    <tr>
                                        <th onclick="sortTable(0)">Mã Loại<span class="glyphicon glyphicon-triangle-top" style="opacity: 0.6; height: 1px; width: 1px; margin-top: 0.3em"></span></th>
                                        <th>Tên Loại</th>
                                        <th class="text-center">
                                            Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($adminlsp as $adlsp)
                                    <tr>
                                        <td>{{ $adlsp->id }}</td>
                                        <td>{{ $adlsp->type_name }}</td>
                                        <td class="text-center ">
                                            <a class="btn btn-info btn-xs edit_icon" data-toggle="modal" data-target="#{{ $adlsp->id }}"> <span class="glyphicon glyphicon-edit"></span> </a>

                                            {{--STAR lấy số sp theo loại --}}
                                            @if($adlsp->id !=0)
                                                <?php  $i=0;?>
                                                @foreach($product as $pro)
                                                    @if($pro->id == $adlsp->id)
                                                        <?php  $i++;?>
                                                    @endif
                                                @endforeach
                                            @endif
                                            {{--END lấy số sp theo loại --}}

                                            <?php  
                                                if($i == 0){
                                                    ?>
                                                    <button data-toggle="tooltip" title="Xoá" class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                    <?php
                                                }
                                                else{
                                            ?>
                                                    <div data-toggle="modal" data-target="#sp_{{ $adlsp->id }}" title="Không thể xóa khi còn sản phẩm" style="cursor: pointer;">
                                                        (Có
                                                        <?php echo $i;?>
                                                        sản phẩm)
                                                    </div>
                                            <?php
                                                }
                                            ?>
                                            <input type="hidden" name="del1lsp" value="{{ $adlsp->id }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="row" style="text-align: center;" >{{$adminlsp->links() }}</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($adminlsp as $lsp)
<form action="{{ route('adminsualoaisanpham', $lsp->id, $lsp->type_name) }}" method="post">
<div class="modal fade" id="{{ $lsp->id }}" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sửa loại sản phẩm</h4>
        </div>
        <div class="modal-body modal-edit-lsp">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{ csrf_field() }}
            <input type="text" name="newtypename" value="{{ $lsp->type_name }}" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
      </div>
    </div>
</div>
</form>

<div class="modal fade" id="sp_{{ $lsp->id }}" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ $lsp->type_name }}</h4>
        </div>
        <div class="modal-body">
            <ul>
                @foreach($product as $pro)
                    @if($pro->id == $lsp->id)
                        <li>{{ $pro->name }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endforeach

<style>
    .modal-edit-lsp input{
        display: inline-block;
        font-weight: 500;
        border: 1px solid #9A9A9A;
        outline: none;
        color: black;
        padding: none !important;
        padding-right: none !important;
        width: 100%;
        position: unset;
        top: 0;
        right: 0;
        background: none;
        z-index: 3;
        transition: none;
        cursor: inherit;
    }

    .modal-edit-lsp input:focus:hover {
        border-bottom: 1px solid #9A9A9A;
    }

    .modal-edit-lsp input:focus {
        width: 100%;
        z-index: 1;
        margin-right: none;
        border-bottom: 1px solid #9A9A9A;
        cursor: text;
    }
</style>

@endsection