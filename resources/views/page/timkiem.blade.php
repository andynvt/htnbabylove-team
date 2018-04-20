@extends('master') @section('content')
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
                   
                    <div class="space10">&nbsp;</div>
                    <div class="text-left" style="font-size: 25px; font-weight: 600"> Tìm Thấy {{count($product)}} Sản Phẩm </div>
                    <div class="space15">&nbsp;</div>
                    <div class="row">
                          @foreach($product as $promo ) 
                        @foreach($detail_product as $det ) 
                        @if($promo->id == $det->id  )
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                    <a href="{{ route('chitietsanpham', $promo->id) }}">
                                        <div class="containeroverlay">
                                            @foreach($product_image as $anh )
                                                @if($det->id == $anh->id  )
                                            <img src="source/image/{{$anh->image}}" alt="Thumbnail Image 1" class="img-responsive" width="480px">
                                                @endif
                                            @endforeach
                                            <div class="overlay">
                                                <div class="text">Xem chi tiết</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="#"> 
                                                    <b class="text-price">
                                                        @if($promo->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($promo->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($promo->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($promo->unit_price)}} đ</span>
                                                        @endif
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-left text-title'><b>{{$promo->name}}</b>&nbsp;</p>
                                                </a>
                                        <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#{{$promo->id}}"><span>Mua Ngay </span></button>
                                        <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            @break
                        
                        @endif 
                        @endforeach 
                        @endforeach
                    </div>
                    
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
