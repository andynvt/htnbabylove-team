@extends('master')
@section('content')
<div class="container-full">
            <!-- Trang Chu -->
            <div class="container-fluid">
                <!-- fluid or full -->
                <div class="space30">&nbsp;</div>
                <!-- End SlideShow -->
                <div class="container-full">
                    <!-- Sam pham va tim kiem nhanh -->
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12  ">
                            <!-- Tim kiem nhanh san pham -->
                            <div id="navbar">
                                <div class="well1">
                                    <h5 class="text-left">Menu</h5>
                                    <div class="row">
                                        <div class="col-sm col-md">
                                            <div class="panel-group" id="accordion">
                                                @foreach($ds_loai as $loai)
                                                <hr>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="{{-- {{route('loaisanpham',$idloai)}} --}}"> {{$loai->type_name}}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                {{-- <hr> --}}
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Menu -->
                                <div class="well">
                                    <h5 class="text-left">Tìm Kiếm Sản Phẩm</h5>
                                    <form class="form-horizontal" action="#" method="">
                                        <div class="form-group">
                                            <label for="priceto" class="control-label">Tên sản phẩm:</label>
                                            <input type="text" class="form-control" id="priceto" name="tensp" aria-describedby="basic-addon1"> </div>
                                        <div class="form-group">
                                            <label for="location1" class="control-label">Loại sản phẩm:</label>
                                            <select class="form-control" name="" id="location1">
                                                <option value="#">Chọn loại sản phẩm</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="priceto" class="control-label">Trạng thái:</label>
                                            <br>
                                            <div class="space10">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai sale">Sale</div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai new">New</div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai hot">Hot</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6"> <a href="#" class="search-price">Giá giảm dần <i class="fa fa-sort-amount-desc"></i></a> </div>
                                                <div class="col-sm-6"> <a href="#" class="search-price">Giá tăng dần <i class="fa fa-sort-amount-asc"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='row'>
                                                <div style="width: 90%; margin-left: 5%">
                                                    <label for="pricefrom" class="control-label">Giá:&nbsp;&nbsp;<b><span id="outputmin"></span> Đồng</b></label>
                                                    <div class="input-group" style="width: 90%; margin-left: 5%; top: 10px;">
                                                        <input id="pricefrom" type="text" class="span2" /> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="form-group">
                                            <p class="text-center"><a href="#" class="btn btn-themvaogio" role="button">Tìm Kiếm </a></p>
                                        </div>
                                        <!-- Form tim kiem -->
                                    </form>
                                    <!-- Tim kiem -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <!-- San pham -->
                            <!-- Hang 1 -->
                            <!-- San pham khuyen mai -->
                            <div class="text-left" style="font-size: 25px; font-weight: 600">Tên loại sản phẩm </div>
                            <div class="space15">&nbsp;</div>
                            <div class="row">
                            	@foreach($sp_theoloai as $sp)
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                        	@if($sp->status==1)
                                            <div class="ribbon1 sale">Sale</div>
                                            @elseif($sp->status==2)
                                            <div class="ribbon1 new">New</div>
                                            @elseif($sp->status==3)
                                            <div class="ribbon1 hot">Hot</div>
                                            @else
                                            @endif

                                        </div>
                                        <div class="thumbnail">
                                            <div class="containeroverlay">
                                                <a href="#"><img src="source/image/img_1.jpg" class="img-responsive"></a>
                                                <div class="overlay">
                                                    <div class="text">Xem chi tiết</div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="space5">&nbsp;</div>
                                                <a href="#"> 
                                                    <b class="text-price">
														@if($sp->promotion_price==0)
														<span class="text-danger ">
                                                            {{number_format($sp->unit_price)}} đ
                                                        </span> 
                                                        @else
                                                        <span class="text-danger ">
                                                            {{number_format($sp->unit_price)}} đ
                                                        </span>  &nbsp;
                                                        <span class="flash-del">
                                                         {{number_format($sp->promotion_price)}}đ
                                                        </span>
                                                        @endif
                                                    </b>


                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-left text-title'><b>{{$sp->name}}</b></p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
