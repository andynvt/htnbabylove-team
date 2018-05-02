@extends('master') @section('content')

@if (session('success'))
    <body onload="alertbabyproject()"><div class="alert-babyproject">Cám ơn bạn đã đặt hàng của chúng tôi</div></body>
@endif

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
                    @include('filter')
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- San pham -->
                    <!-- Hang 1 -->
                    <!-- San pham khuyen mai -->
                    <div class="text-left" style="font-size: 25px; font-weight: 600"> Sản Phẩm Khuyến Mãi ({{count($promotion_product)}} sản phẩm)</div>
                    <div class="space15">&nbsp;</div>
                    <div class="row">
                        @foreach($promotion_product as $promo ) 
                       
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon1 sale">Sale</div>
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
                                        <button type="button" class="btn btn-buy btn-buy-re btn-full button" data-toggle="modal" data-target="#pro{{$promo->id_product}}"><span>Mua Ngay </span></button>
                                        <a class="btn btn-themvaogio btn-themvaogio-re btn-full " href="{{route('themgiohang',$promo->id_product)}}" style="color: white">Thêm vào giỏ</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        @endforeach
                    </div>
                    <div class="row justify-content-center">{{$promotion_product->links() }}
                    </div>
                    <div class="space20">&nbsp;</div>
                    <!-- Hang 2 -->
                    <!-- San pham moi -->
                    <div class="space10">&nbsp;</div>
                    <div class="text-left" style="font-size: 25px; font-weight: 600"> Sản Phẩm Mới ({{count($new_product)}} sản phẩm)</div>
                    <div class="space15">&nbsp;</div>
                    <div class="row">
                        @foreach($new_product as $new) 
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    @if($new->promotion_price != 0)
                                    <div class="ribbon1 sale">Sale</div>
                                    @elseif($new->status == 1)
                                    <div class="ribbon1 new">New</div>
                                    @elseif($new->status == 2)
                                    <div class="ribbon1 hot">Hot</div>
                                    @endif
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ route('chitietsanpham', $new->id_product) }}">
                                        <div class="containeroverlay">
                                            
                                            <img src="storage/product/{{$new->image}}" alt="Thumbnail Image 1" class="img-responsive" width="1024px">
                                            
                                             
                                            <div class="overlay">
                                                <div class="text">Xem chi tiết</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="{{ route('chitietsanpham', $new->id_product) }}">
                                        <b class="text-price text-price-re">
                                                @if($new->promotion_price == 0)
                                                    <span class="text-danger ">{{number_format($new->unit_price)}} đ</span> &nbsp;
                                                @else
                                                    <span class="text-danger ">{{number_format($new->promotion_price)}} đ</span> &nbsp;
                                                    <span class="flash-del">{{number_format($new->unit_price)}} đ</span>
                                                @endif
                                                </b>
                                        <div class="space10">&nbsp;</div>
                                        <p class='text-left text-title text-title-re'>
                                            <b>{{$new->name}}
                                            </b>&nbsp;
                                        </p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-buy-re btn-full button" data-toggle="modal" data-target="#new{{$new->id_product}}"><span>Mua Ngay </span></button>
                                        <a class="btn btn-themvaogio btn-themvaogio-re btn-full " href="{{route('themgiohang',$new->id_product)}}" style="color: white">Thêm vào giỏ</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                    <div class="row justify-content-center">{{$new_product->links() }}
                    </div>
                    <div class="space20">&nbsp;</div>
                    <!-- Hang 3 -->
                    <!-- San pham -->
                    <div class="space10">&nbsp;</div>
                    <div class="text-left" style="font-size: 25px; font-weight: 600">Sản Phẩm Hot ({{count($hot_product)}} sản phẩm)</div>
                    <div class="space15">&nbsp;</div>
                    <div class="row">
                        @foreach($hot_product as $hot) 
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    @if($hot->promotion_price != 0)
                                    <div class="ribbon1 sale">Sale</div>
                                    @elseif($hot->status == 1)
                                    <div class="ribbon1 new">New</div>
                                    @elseif($hot->status == 2)
                                    <div class="ribbon1 hot">Hot</div>
                                    @endif
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ route('chitietsanpham', $hot->id_product) }}">
                                        <div class="containeroverlay">
                                            <img src="storage/product/{{$hot->image}}" alt="Thumbnail Image 1" class="img-responsive" width="1024px">
                                           
                                            <div class="overlay">
                                                <div class="text">Xem chi tiết</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="{{ route('chitietsanpham', $hot->id_product) }}"> <b class="text-price text-price-re">
                                                    @if($hot->promotion_price == 0)
                                                        <span class="text-danger ">{{number_format($hot->unit_price)}} đ</span> &nbsp;
                                                    @else
                                                        <span class="text-danger ">{{number_format($hot->promotion_price)}} đ</span> &nbsp;
                                                        <span class="flash-del">{{number_format($hot->unit_price)}} đ</span>
                                                    @endif
                                                </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-left text-title text-title-re'><b>{{$hot->name}}</b>&nbsp;</p>
                                            </a>
                                        <button type="button" class="btn btn-buy btn-buy-re btn-full button" data-toggle="modal" data-target="#hot{{$hot->id_product}}"><span>Mua Ngay </span></button>
                                        <a class="btn btn-themvaogio btn-themvaogio-re btn-full " href="{{route('themgiohang',$hot->id_product)}}" style="color: white">Thêm vào giỏ</a>
                                        <hr> </div>
                                </div>
                            </div>
                        </div>
                        
                         @endforeach
                    </div>
                    <div class="row justify-content-center">{{$hot_product->links() }}
                    </div>
                    <div class="space20">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onscroll = function() {
        myFunction()
    };
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= 180) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }

    }

</script>
@endsection
