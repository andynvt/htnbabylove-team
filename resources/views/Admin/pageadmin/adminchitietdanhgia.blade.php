@extends('Admin.master')

@section('contentadmin')
<div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo"> 
                    <a href="#" class="simple-text">
                        hoàng thủy nguyên
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
            <div class="container-fluid">
                <div class="feedback-admin">
                    <div class="feedback-typeproduct-title form-group clearfix">
                        @foreach($getlsp as $fblsp)
                        <div class="col-md-3">
                            <a href="{{ route('admindanhgiatheoloai', $fblsp->id) }}" data-toggle="tooltip" title="{{ $fblsp->type_name }}">
                                <div class="feedback-typeproduct-name">
                                    <p>{{ $fblsp->type_name }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="feedback-table clearfix">
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
                            <div class="card feedback-table-content">
                                <div>
                                    <div class="header">
                                        <div class="feedback-item-name">
                                            <p>Đánh giá sản phẩm {{ $getsp }} ({{ count($fbsp) }} đánh giá)</p>
                                        </div>
                                    </div>
                                    <div class="content table-responsive table-full-width st_table">
                                        <script type="text/javascript">
                                            $(function() {
                                                $('[data-toggle="tooltip"]').tooltip()
                                            })

                                        </script>
                                        <form method="post" onsubmit="return submitForm(this);" action="{{ route('adminxoanhieudanhgia') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <table class="table table-bordered text-align align-tooltip-feedback" id="tbl_ctfb">
                                                <thead>
                                                    <tr class="thead_change_color">
                                                        <th>Mã đánh giá</th>
                                                        <th>Người đánh giá</th>
                                                        <th>Số diện thoại</th>
                                                        <th>Số sao</th>
                                                        <th>Nội dung</th>
                                                        <th>
                                                            <a id="open-del-check">Xoá nhiều</a>
                                                            <button class="btn-delm-sp" id="del-check" type="submit">Xoá</button>
                                                            
                                                            <a class="btn-delm-sp" id="cancel-check">Huỷ</a>
                                                            <div id="del-checkall">
                                                                <a id="check-all" href="#tbl_ctfb" data-toggle="checkboxes" data-action="check">
                                                                    Chọn hết
                                                                </a>
                                                                /
                                                                <a id="uncheck-all" href="#tbl_ctfb" data-toggle="checkboxes" data-action="uncheck">
                                                                    Bỏ chọn
                                                                </a>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($fbsp as $fb)
                                                    <tr class="row-detail-feedback" data-toggle="tooltip" data-html="true" title="<p>Nội dung đánh giá:</p><p>{{ $fb->review }}</p>">
                                                        <td>{{ $fb->id }}</td>
                                                        <td>{{ $fb->reviewer }}</td>
                                                        <td>{{ $fb->tel }}</td>
                                                        <td>{{ $fb->stars }}</td>
                                                        <td>{{ $fb->review }}</td>
                                                        <td>
                                                            <div class="btn-group del1-sp">
                                                                <button type="submit" class="btn btn-danger btn-xs del_icon">
                                                                    <span class="glyphicon glyphicon-trash"></span> 
                                                                </button>
                                                                <input type="hidden" name="del1fb" value="{{ $fb->id }}">
                                                            </div>
                                                            <div class="delm-sp">
                                                                <input type="checkbox" name="delmfb[]" multiple value="{{ $fb->id }}" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row" style="text-align: center;">{{$fbsp->links() }}</div>
                                        </form>
                                    </div>
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
        $('#tbl_ctfb').checkboxes('check');
        e.preventDefault();
    });

    $('#uncheck-all').on('click', function(e){
        $('#tbl_ctfb').checkboxes('uncheck');
        e.preventDefault();
    });
</script>

@endsection