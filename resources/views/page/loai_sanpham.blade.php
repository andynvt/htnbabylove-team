<head>
    <title>{{$loai_ssp->type_name}} | HTN Baby Love</title>
</head>
@extends('master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12  ">
            <!-- Tim kiem nhanh san pham -->
            @include('filter')
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="space10">&nbsp;</div>
            <div class="text-left" style="font-size: 25px; font-weight: 600">Tìm Thấy {{count($product)}} Sản Phẩm Loại: {{$loai_ssp->type_name}}</div>
            <div class="space15">&nbsp;</div>
            <div class="row">
             
                @foreach($product as $pro)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="single-item">
                        <div class="ribbon-wrapper">
                        @if($pro->promotion_price != 0)
                            <div class="ribbon1 sale">Sale</div>
                        @elseif($pro->status == 1)
                            <div class="ribbon1 new">New</div>
                        @elseif($pro->status == 2)
                            <div class="ribbon1 hot">Hot</div>
                        @endif
                        </div>
                        <div class="thumbnail">
                            <div class="containeroverlay">
                                <a href="{{ route('chitietsanpham', $pro->id_product) }}"> 
                                            <img src="storage/product/{{$pro->image}}" alt="Thumbnail Image 1" class="img-responsive" width="480px">
                                           </a>
                                <div class="overlay">
                                    <div class="text">Xem chi tiết</div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="space5">&nbsp;</div>
                                <b class="text-price">
                                @if($pro->promotion_price == 0)
                                    <span class="text-danger ">{{number_format($pro->unit_price)}} đ</span> &nbsp;
                                @else
                                    <span class="text-danger ">{{number_format($pro->promotion_price)}} đ</span> &nbsp;
                                    <span class="flash-del">{{number_format($pro->unit_price)}} đ</span>
                                @endif
                                </b>
                                <div class="space10">&nbsp;</div>
                                <p class='text-left text-title'><b>{{$pro->name}}</b>&nbsp;</p>
                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="@if($pro->promotion_price != 0)
                                            #pro{{$pro->id_product}}
                                            @elseif($pro->status == 1)
                                            #new{{$pro->id_product}}
                                            @elseif($pro->status == 2)
                                            #hot{{$pro->id_product}}
                                            @endif"><span>Mua Ngay </span></button>
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


@endsection