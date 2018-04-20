@extends('Admin.master')

@section('contentadmin')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
            Hoàng Thuỷ Nguyên
        </a> 
        </div>
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
                        <h3 class="title_of_manager_product">THÊM SẢN PHẨM</h3> <small id="now_time">
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

                                <!-- Phan modal them san pham-->
                                <div class="container-fluid">
                                    <form class="form-horizontal" action="#" enctype="multipart/form-data" id="formUpload">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="ten">Tên:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="ten" placeholder="Nhập tên" name="ten"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="maloai">Loại sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control w50" name="loaisanpham">
                                                    @foreach($adminlsp as $lsp)
                                                    <option>{{ $lsp->type_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="giagoc">Giá gốc:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="giagoc" placeholder="VD: 100000" name="giagoc" min="0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="magiamgia">Giá khuyến mãi (Nếu có):</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="magiamgia" placeholder="VD: 100000" name="giakhuyenmai" min="0"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="soluong">Kích thước:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="soluong" placeholder="VD: 30x30x30" name="kichthuoc">
                                            </div>
                                        </div>
                                        <input type="hidden" value="1" name="trangthai">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="mausac">Màu sắc:</label>
                                            <div class="admin-add-color col-sm-8">
                                                <div class="w50">
                                                    <button class=" btn btn-default btn-number-color" type="button">Chọn số lượng màu</button>
                                                    <div class="admin-num-color">
                                                        <input type="number" class="form-control" placeholder="Nhập số lượng màu" min="0">
                                                        <button class="btn btn-default btn-selected-number" type="button">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group admin-color">
                                            <label class="control-label col-sm-4" for="soluong">Nhập màu:</label>
                                            <div class="col-sm-4 type-color">
                                            </div>
                                            <p class="col-sm-8 col-sm-offset-4" style="color: #9A9A9A;">(*) Mỗi ô một màu</p>
                                        </div>
                                            <script>
                                                $('.btn-number-color').on('click',function(){
                                                    $('.admin-num-color').css('display', 'block');
                                                });

                                                $('.btn-selected-number').on('click', function(){
                                                    var ip = '<input type="text" class="form-control" id="soluong" placeholder="Đỏ" name="mausp[]" multiple>';
                                                    var qtycolor = $('.admin-num-color input').val();

                                                    $('.admin-num-color').css('display', 'none');
                                                    $('.type-color').empty();
                                                    
                                                    $('.admin-color').css('display', 'block');

                                                    if(qtycolor > 0){
                                                        for($i = 1; $i<=qtycolor; $i++){
                                                            $('.type-color').append(ip);
                                                        }
                                                    }
                                                    else{
                                                        $('.admin-color').css('display', 'none');
                                                    }
                                                    
                                                });
                                            </script>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="hinhanh">hình ảnh:</label>
                                            <div class="col-sm-8">
                                                <div class="box-upload">
                                                    <div class="themhinh">
                                                        <button class="btn btn-default dehinh" style="cursor: pointer">
                                                           <i class="fa fa-plus"></i>
                                                           <input type="file" name="hinh[]" multiple>
                                                       </button>
                                                    </div>
                                                </div>
                                                <p style="color: #9A9A9A;">(*) Trỏ chuột vào dấu cộng để xem tên các ảnh đã chọn</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="thongtincoban">Thông tin sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <textarea type="text" class="form-control w50" id="thongtincoban" placeholder="Nhập thông tin mô tả" name="mota"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-8">
                                                <button type="button" class="btn btn-light btn-magrin2"><a href="product.php">Hủy</a></button>
                                                <button type="submit" class="btn btn-primary btn-magrin btn-submit">Lưu lại</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--                           ket thuc phan modal them san pham-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection