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
            <div class="text-left" style="font-size: 25px; font-weight: 600">{{$loai_ssp->type_name}} có {{count($product)}} sản phẩm </div>
            <div class="space15">&nbsp;</div>
            <div class="row">
             
                @foreach($product as $promo)
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    @if($promo->promotion_price != 0)
                                    <div class="ribbon1 sale">Sale</div>
                                    @elseif($promo->status == 1)
                                    <div class="ribbon1 new">New</div>
                                    @elseif($promo->status == 2)
                                    <div class="ribbon1 hot">Hot</div>
                                    @endif
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ route('chitietsanpham', $promo->id_product) }}">
                                        <div class="containeroverlay">
                                            
                                            <img src="storage/product/{{$promo->image}}" alt="Thumbnail Image 1" class="img-responsive" width="1024px">
                                            
                                             
                                            <div class="overlay">
                                                <div class="text">Xem chi tiết</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="{{ route('chitietsanpham', $promo->id_product) }}">
                                        <b class="text-price text-price-re">
                                                @if($promo->promotion_price == 0)
                                                    <span class="text-danger ">{{number_format($promo->unit_price)}} đ</span> &nbsp;
                                                @else
                                                    <span class="text-danger ">{{number_format($promo->promotion_price)}} đ</span> &nbsp;
                                                    <span class="flash-del">{{number_format($promo->unit_price)}} đ</span>
                                                @endif
                                                </b>
                                        <div class="space10">&nbsp;</div>
                                        <p class='text-left text-title text-title-re'>
                                            <b>{{$promo->name}}
                                            </b>&nbsp;
                                        </p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-buy-re btn-full button" data-toggle="modal" data-target="@if($promo->promotion_price != 0)
                                                #pro{{$promo->id_product}}
                                                @elseif($promo->status == 1)
                                                #new{{$promo->id_product}}
                                                @elseif($promo->status == 2)
                                                #hot{{$promo->id_product}}
                                                @endif"><span>Mua Ngay </span></button>
                                        <a class="btn btn-themvaogio btn-themvaogio-re btn-full " href="{{route('themgiohang',$promo->id_product)}}" style="color: white">Thêm vào giỏ</a>
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