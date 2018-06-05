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
                        <h3 class="title_of_manager_product" style="text-transform: uppercase;">SỬA SẢN PHẨM: {{$product_name}}</h3> <small id="now_time">
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
                                @foreach($id_product_edit as $sp)

                                <form method="post" class="form-horizontal" action="{{route('adminsuasp',$sp->id)}}" enctype="multipart/form-data">
                                <!-- Phan modal them san pham-->
                                <div class="container-fluid">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="ten">Tên:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="ten" name="newname" value="{{ $sp->name }}" required autofocus> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="maloai">Loại sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control w50" id="maloai" name="newtype" required>
                                                    @foreach($product_type as $lsp)
                                                    @if($lsp->id == $sp->id_type)
                                                        <option value="{{$id_type}}" selected>{{ $type_name }}</option>
                                                    @else
                                                        <option value="{{$lsp->id}}">{{ $lsp->type_name }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="giagoc">Giá gốc:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="giagoc" placeholder="VD: 100000" name="new_unit_price" min="0" value="{{ $sp->unit_price }}" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="magiamgia">Giá khuyến mãi (Nếu có):</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="magiamgia" placeholder="VD: 100000" name="new_promotion_price" min="0" max="{{ $sp->unit_price }}" value="{{ $sp->promotion_price }}" required> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="hot">Sản phẩm hot?</label>
                                            <div class="col-sm-1">
                                                <input type="checkbox" class="form-control" name="sphot" id="hot" style="margin: 0; padding: 0; width: 30px"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="kichthuoc">Kích thước:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="kichthuoc" placeholder="VD: 30x30x30" name="newsize" value="{{ $sp->size }}" required>
                                            </div>
                                        </div>
                                        {{-- <input type="hidden" value="1" name="trangthai"> --}}
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="mausac">Màu sắc:</label>
                                            <div class="admin-add-color col-sm-8">
                                                <div class="w50">
                                                    <button class=" btn btn-default btn-number-color" type="button">Thêm màu mới</button>
                                                    <div class="admin-num-color">
                                                        <input type="number" class="form-control" placeholder="Nhập số lượng màu" min="0">
                                                        <button class="btn btn-default btn-selected-number" type="button">Thêm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group admin-color">
                                            <label class="control-label col-sm-4" for="soluong">Nhập màu:</label>
                                            <div class="col-sm-8">
                                                <div class="w50 type-color">
                                                    @foreach($getcl as $cl)
                                                        <div class="div-color" id="{{ $cl->idcl }}">
                                                            <div class="old-color">
                                                                <input type="text" class="form-control" id="soluong" placeholder="Nhập màu" name="newcolor[]" multiple value="{{ $cl->color }}" >
                                                                <a><i data-toggle="tooltip" title="Xoá" class="fa fa-close"></i></a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <p class="col-sm-8 col-sm-offset-4" style="color: #9A9A9A;">(*) Mỗi ô một màu</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="files" class="control-label col-sm-4">Thêm ảnh mới: </label>
                                            <div class="col-sm-8">
                                                <div class="w50">
                                                    <button class="btn btn-default dehinh" style="cursor: pointer">
                                                       <i class="fa fa-plus"></i> 
                                                        <input type="file" multiple id="gallery-photo-add" name="newimage[]" accept="image/png, image/jpg, image/jpeg">
                                                    </button>
                                                    <p class="col-sm-12" style="color: #9A9A9A; padding-left: 0">(*) Kích thước ảnh nhỏ hơn 2mb (2048kb)</p>
                                                    <div class="gallery"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(function() {
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
                                                    $('.gallery').empty();
                                                    imagesPreview(this, 'div.gallery');
                                                });
                                            });
                                        </script>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Ảnh hiện tại:</label>
                                            <div class="col-sm-8">
                                                <div class="w50">
                                                    @foreach($getimg as $img)
                                                        <div class="show-img">
                                                            <img src="storage/product/{{$img->image}}">
                                                            <i class="fa fa-close"></i>
                                                            <input type="hidden" value="{{ $img->iid }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="thongtincoban">Thông tin sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control w50" name="newdesc" rows="10" required>{{ $sp->description }}</textarea>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <a type="button" class="btn btn-light btn-magrin2" href="{{route('adminsanpham')}}">Hủy</a>
                                                <button type="submit" class="btn btn-primary btn-magrin btn-submit">Lưu lại</button>
                                            </div>
                                        </div>
                                    </div>
                                <!-- ket thuc phan sưa san pham-->
                                </form>


                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Script sửa sản phẩm --}}
<script>    
    $('.btn-number-color').on('click',function(){
        $('.admin-num-color').css('display', 'block');
    });

    $('.btn-selected-number').on('click', function(){
        var ip = '<div class="div-color"> <div class="new-color"> <input type="text" class="form-control" id="soluong" placeholder="Nhập màu" name="newcolor[]" multiple value=""> <a><i data-toggle="tooltip" title="Xoá" class="fa fa-close"></i></a> </div> </div>';

        var qtycolor = $('.admin-num-color input').val();

        $('.admin-num-color').css('display', 'none');
        $('.admin-color').css('display', 'block');

        if(qtycolor > 0){
            for($i = 1; $i<=qtycolor; $i++){
                $('.type-color').append(ip);
            }
        }

        $('.div-color a').on('click', function(){
            var boolean = $(this).parent('div').attr('class');
            if(boolean == 'new-color'){
                $(this).parents('.div-color').remove();
            }
        });
    });

    $('.div-color a').on('click', function(){
        $(this).parents('.div-color').remove();
    });

    $('.show-img i').on('click', function(){
        var iid = $(this).next('input').val();
        var delimg = submitForm();
        if(delimg == true){
            $.ajax({
                type: "GET",
                url: "xoa-img",
                data: {iid: iid},
                success: function(data){}
            });
            $(this).parents('.show-img').remove();
        }
    });

    // Bắt lỗi nhập giá
    $('#giagoc').on('blur', function(){
        var unitprice = $('#giagoc').val();
        $('#magiamgia').attr('max', unitprice);
    });
</script>

{{-- style sửa sản phẩm --}}
<style>
    .admin-color{
        display: block;
    }
    .div-color{
        position: relative;
        width: 25%;
        display: inline-block !important;
        margin: 5px 10px 5px 0;
    }
    .div-color i{
        position: absolute;
        top: 0;
        right: 0;
        font-size: 16px;
        cursor: pointer;
    }
</style>

@endsection