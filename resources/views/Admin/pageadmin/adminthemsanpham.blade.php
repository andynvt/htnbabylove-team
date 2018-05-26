@extends('Admin.master')

@section('contentadmin')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
            WeShop
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

                                <!--Phan modal them san pham-->
                                <div class="container-fluid">
                                    <form method="POST" class="form-horizontal" action="{{ route('adminthemsp') }}" enctype="multipart/form-data" id="formUpload">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="ten">Tên:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="ten" placeholder="Nhập tên" name="ten" required autofocus> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="maloai">Loại sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <select id="maloai" class="form-control w50" name="loaisanpham" required>
                                                    @foreach($addlsp as $lsp)
                                                    <option value="{{$lsp->id}}">{{ $lsp->type_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="giagoc">Giá gốc:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="giagoc" placeholder="VD: 100000" name="giagoc" min="0" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="magiamgia">Giá khuyến mãi (Nếu có):</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="magiamgia" placeholder="VD: 100000" name="giakhuyenmai" required> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="soluong">Kích thước:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="soluong" placeholder="VD: 30x30x30" name="kichthuoc" required>
                                            </div>
                                        </div>
                                        <input type="hidden" value="1" name="trangthai">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="mausac">Màu sắc:</label>
                                            <div class="admin-add-color col-sm-8">
                                                <div class="w50">
                                                    <button class=" btn btn-default btn-number-color" type="button">Chọn số lượng màu</button>
                                                    <div class="admin-num-color">
                                                        <input type="number" class="form-control" placeholder="Nhập số lượng màu" min="0" required>
                                                        <button class="btn btn-default btn-selected-number" type="button">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group admin-color">
                                            <label class="control-label col-sm-4" for="soluong">Nhập màu:</label>
                                            <div class="col-sm-8">
                                                <div class="w50 type-color">
                                                </div>
                                            </div>
                                            <p class="col-sm-8 col-sm-offset-4" style="color: #9A9A9A;">(*) Mỗi ô một màu</p>
                                        </div>
                                         <div class="form-group">
                                            <label for="files" class="control-label col-sm-4">Hình ảnh: </label>
                                            <div class="col-sm-8">
                                                <div class="w50">
                                                    <button class="btn btn-default dehinh" style="cursor: pointer">
                                                           <i class="fa fa-plus"></i> 
                                                            <input type="file" multiple id="gallery-photo-add" name="images[]" accept="image/png, image/jpg, image/jpeg" required>
                                                    </button>
                                                    <div class="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(function() {
                                                // Multiple images preview in browser
                                                var imagesPreview = function(input, placeToInsertImagePreview) {
                                                    if (input.files) {
                                                        var filesAmount = input.files.length;
                                                        for (i = 0; i < filesAmount; i++) {
                                                            var reader = new FileReader();
                                                            reader.onload = function(event) {
                                                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                                                            }
                                                            reader.readAsDataURL(input.files[i]);
                                                        }
                                                    }
                                                };
                                                $('#gallery-photo-add').on('change', function() {
                                                    imagesPreview(this, 'div.gallery');
                                                });
                                            });
                                        </script>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="thongtincoban">Thông tin sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <textarea type="text" class="form-control w50" id="thongtincoban" placeholder="Nhập thông tin mô tả" name="mota" required rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <a href="{{ route('adminsanpham') }}" type="button" class="btn btn-light btn-magrin2">Hủy</a>
                                                <button type="submit" class="btn btn-primary btn-magrin btn-submit">Lưu lại</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Script thêm sản phẩm --}}
<script>
    $('.btn-number-color').on('click',function(){
        $('.admin-num-color').css('display', 'block');
    });

    $('.btn-selected-number').on('click', function(){
        var ip = '<input type="text" class="form-control" id="soluong" placeholder="Nhập màu" name="mausp[]" multiple required>';
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

    // Bắt lỗi nhập giá
    $('#giagoc').on('blur', function(){
        var unitprice = $('#giagoc').val();
        $('#magiamgia').attr('max', unitprice);
    });
</script>

{{-- Style thêm sản phẩm --}}
<style>
    .type-color input{
        width: 25%;
        display: inline-block !important;
        margin: 5px 10px 5px 0;
    }
</style>
@endsection
