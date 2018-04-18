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
            <div class="text-left" style="font-size: 25px; font-weight: 600"> {{$loai_ssp->type_name}} ({{count($sp_theoloai)}} sản phẩm)</div>
            <div class="space15">&nbsp;</div>
            <div class="row">
            
                @foreach($id_product as $product)
                @foreach($sp_theoloai as $sp)
                    @if($product->id_type ==$sp->id_type )
                        @foreach($detail_product as $detail)
                            @if($product->id_product == $detail->id_product)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="single-item">
                        <div class="ribbon-wrapper">
                        @if($product->promotion_price != 0)
                            <div class="ribbon1 sale">Sale</div>
                        @elseif($product->status == 1)
                            <div class="ribbon1 new">New</div>
                        @elseif($product->status == 2)
                            <div class="ribbon1 hot">Hot</div>
                        @endif
                        </div>
                        <div class="thumbnail">
                            <div class="containeroverlay">
                                <a href="{{ route('chitietsanpham', $product->id_product) }}"><img src="source/image/{{ $detail->image }}" class="img-responsive" width="480px"></a>
                                <div class="overlay">
                                    <div class="text">Xem chi tiết</div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="space5">&nbsp;</div>
                                <b class="text-price">
                                @if($product->promotion_price == 0)
                                    <span class="text-danger ">{{number_format($product->unit_price)}} đ</span> &nbsp;
                                @else
                                    <span class="text-danger ">{{number_format($product->promotion_price)}} đ</span> &nbsp;
                                    <span class="flash-del">{{number_format($product->unit_price)}} đ</span>
                                @endif
                                </b>
                                <div class="space10">&nbsp;</div>
                                <p class='text-left text-title'><b>{{$product->name}}</b>&nbsp;</p>
                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#{{$product->id_product}}"><span>Mua Ngay </span></button>
                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>      
                               
                            @endif
                        @endforeach
                        @break
                    @endif

                @endforeach
            @endforeach
            </div>
       








        </div>
        </div>
        
    </div>


@endsection