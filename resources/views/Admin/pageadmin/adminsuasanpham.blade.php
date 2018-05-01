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
                        <h3 class="title_of_manager_product">SỬA SẢN PHẨM {{$product_name}}</h3> <small id="now_time">
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
                                                <input type="text" class="form-control w50" id="ten" name="newname" value="{{ $sp->name }}" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="maloai">Loại sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control w50" name="newtype" required>
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
                                                <input type="number" class="form-control w50" id="magiamgia" placeholder="VD: 100000" name="new_promotion_price" min="0" value="{{ $sp->promotion_price }}" required> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="soluong">Kích thước:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="soluong" placeholder="VD: 30x30x30" name="newsize" value="{{ $sp->size }}" required>
                                            </div>
                                        </div>
                                        {{-- <input type="hidden" value="1" name="trangthai"> --}}
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
                                                @foreach($getcl as $cl)
                                                <input type="text" class="form-control" id="soluong" placeholder="Đỏ" name="newcolor[]" multiple value="{{ $cl->color }}" >
                                                @endforeach
                                            </div>
                                            <p class="col-sm-8 col-sm-offset-4" style="color: #9A9A9A;">(*) Mỗi ô một màu</p>
                                        </div>

                                        <style>
                                            .admin-color{
                                                display: block;
                                            }
                                        </style>
                                        <script>
                                            $('.btn-number-color').on('click',function(){
                                                $('.admin-num-color').css('display', 'block');
                                            });

                                            $('.btn-selected-number').on('click', function(){
                                                var ip = '<input type="text" class="form-control" id="soluong" placeholder="Đỏ" name="newcolor[]" multiple>';
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
                                            <label for="files" class="control-label col-sm-4">Hình ảnh: </label>
                                            <div class="col-sm-4">
                                                <button class="btn btn-default dehinh" style="cursor: pointer">
                                                       <i class="fa fa-plus"></i> 
                                                        <input type="file" multiple id="gallery-photo-add" name="newimage[]" accept="image/png, image/jpg, image/jpeg">
                                                </button>
                                                <div class="gallery"></div>
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
                                                    imagesPreview(this, 'div.gallery');
                                                });
                                            });
                                        </script>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Ảnh hiện tại</label>
                                            <div class="col-sm-8 w-50">
                                                @foreach($getimg as $img)
                                                <div class="show-img">
                                                    <img src="storage/product/{{$img->image}}">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="thongtincoban">Thông tin sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control w50" name="newdesc" rows="10" required>{{ $sp->description }}</textarea>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-8">
                                                <button type="button" class="btn btn-light btn-magrin2"><a href="{{route('adminsanpham')}}">Hủy</a></button>
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
@endsection