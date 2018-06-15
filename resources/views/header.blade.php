<div class="header-top">
    <div class="container-full">
        <div class="pull-left auto-width-left">
            <ul class="top-menu menu-beta l-inline header-top-row">
                <li><a target="_blank" href="https://www.google.com/maps?ll=10.047031,105.762337&z=17&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=15188758633380222862"><i class="fa fa-map-marker"></i>118E Mậu Thân, Q. Ninh Kiều, Tp. Cần Thơ</a></li>
                <li><a href="tel:02923895554"><i class="fa fa-mobile"></i> 0292 389 5554</a></li>
            </ul>
        </div>
        <div class="pull-right auto-width-right header-top-right">
            <ul class="top-details menu-beta l-inline header-top-row">
                <li><a href="{{ route('gioithieu') }}"><i class="fa fa-info-circle"></i>Giới Thiệu</a></li>
                <li data-toggle="modal" data-target="#contactModal" class="line" style="cursor: pointer"><a><i class="fa fa-phone"></i>Liên Hệ</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- .container -->
</div>
<!-- .header-top -->
<div class="header-body">
    <div class="container beta-relative">
        <div class="pull-center">
            <div class="space60">&nbsp;</div>
            <a href="{{ route('trang-chu') }}" id="logo"><img src="storage/product/logo%20main.png" width="350px"></a>
            <div class="space60">&nbsp;</div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- .container -->
</div>
<!-- .header-body -->
<div class="header-bottom" id="getFixed">
    <div class="" style="padding: 0 10px; margin: 0 auto; height: 100%;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <div class="div-hamburger">
                <button class="navbar-toggler btn-humburger" type="button" aria-expanded="false" aria-label="Toggle navigation"> <span class="fa fa-bars hamburger" id="hamburger" onclick="openNav()"></span> 
                </button>
            </div>
            <div class="logo-mobile">
                <a href="{{ route('trang-chu') }}"><img src="storage/product/logo%20mobile.png"></a>
            </div>
            <div class="div-menu">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-ul ">
                    <a href="{{ route('trang-chu') }}" class="menu-list navbar-home">
                        <li class="nav-item menu-li-list active hide-mobile">TRANG CHỦ</li>
                    </a>
                    <a class="menu-list" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <li class="nav-item menu-li-list hide-mobile">MENU <i class="fa fa-caret-down menu-down-icon"></i> </li>
                    </a>
                    <div class="dropdown-menu menu-drd col-lg-12" aria-labelledby="dropdownMenuLink">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                @foreach($loai_sanpham as $l_sp)
                                    <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="{{ route('loaisanpham',$l_sp->id) }}" title="{{$l_sp->type_name}}">{{$l_sp->type_name}}</a> </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row"> </div>
                                <div id="carouselExampleControls" class="carousel slide slider-index" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div style="display: none">{{$i=0}}</div>
                                        @foreach($slide_product as $slide)
                                        <div class="carousel-item @if($i==0) active @endif" style="text-align: center;">
                                            <a href="{{route('chitietsanpham', $slide->id_product)}}"><img class="d-block img-fluid img-slide" src="storage/product/{{$slide->image}}"></a>
                                            <div class="space10">&nbsp;</div>
                                            <a href="{{route('chitietsanpham', $slide->id_product)}}">{{$slide->name}}</a>
                                        </div>
                                        <div style="display: none">{{$i++}}</div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="false"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class=" menu-right">
                <form class=" search-form" action="{{route('timkiem')}}">
                    <input type="text" name="search" placeholder="Bạn muốn tìm gì ?">
                    <input id="search_submit" value="" type="submit"> </form>
                    {{-- <div class="clearfix"></div> --}}
                <div class="div-shop-cart" data-toggle="modal" data-target="#modal-cart">
                    <i class="fa fa-shopping-cart shop-cart"></i>
                    <div id="number-cart"><span>@if(Session::has('cart')){{Session('cart')->totalQty}} @else 0 @endif</span></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </nav>
    </div>
    <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
        @foreach($loai_sanpham as $l_sp)
        <a href="{{ route('loaisanpham',$l_sp->id) }}">{{$l_sp->type_name}}</a>  
        @endforeach
    </div>
</div>
<div class="clearfix"></div>
    <!-- Gio hang-->
<form action="{{route('thanhtoan')}}" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- The Modal -->
    <div class="modal fade modalcart" id="modal-cart">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="modal-title text-price-re" style=" font-weight: 450">Giỏ hàng @if(Session::has('cart')) (có {{Session('cart')->totalQty}} sản phẩm) @else Trống @endif</div>
                    <button type="button" class="close" style="color: black" data-dismiss="modal">&times;</button>
                </div>
                @if(Session::has('cart'))
                <!-- Modal body -->
                <div class="modal-body cart-center">
                    <div class="row cart-title">
                        <div class="col-sm-6"> Sản phẩm </div>
                        <div class="col-sm-2"> Số lượng </div>
                        <div class="col-sm-2" style="text-align: right"> Đơn giá </div>
                        <div class="col-sm-2" style="text-align: center"> Xóa </div>    
                    </div>
                    <div class="cart-content">
                        <!--desktop-->
                        <div class="desktop-cart">
                        @foreach($product_cart as $product)
                            {{-- cart-item --}}
                            <div class="cart-item">
                                <div class="row align-items-center">
                                    <div class="cart-product col-md-6 col-12">
                                        <div class="row">
                                            <div class="cart-div-img col-md-3 col-3">
                                                <a> <img class="img-fluid cart-img" src="storage/product/{{$product['item']['img']}}"> </a>
                                            </div>
                                            <div class="col-md-9 col-9">
                                                <div class="container">
                                                    <div class="cart-product-name text-title"> 
                                                        <a href="#"></a>{{$product['item']['name']}}</div>
                                                    <div class="cart-product-info">
                                                        <div class="form-group change-color" id="cld_{{$product['item']['id']}}">
                                                            {{$product['item']['color']}}
                                                        </div>
                                                        <div>Size: {{$product['item']['size']}} </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-qty col-md-2 col-3">
                                        <div class="cart-input-qty">
                                            <input type="text" name="soluong" class="form-control text-center new-qty" value="{{$product['qty']}}" readonly> 
                                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="change-qty">
                                            <div class="input-group number-spinner input-change-qty"> 
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                </span>

                                                <input type="text" name="" class="form-control text-center" id="{{ $product['item']['id'] }}" value="{{$product['qty']}}"> 

                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </span> 
                                            </div>
                                            <div class="div-confirm-change-qty">
                                                <button class="confirm-change-qty" type="button"><i class="fa fa-check"></i></button>
                                                <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="unit-price col-md-2" style="text-align: right"> 
                                        @if($product['item']['promotion_price'] == 0)
                                            {{number_format( $product['item']['unit_price'] )}} đ
                                        @else
                                            {{number_format( $product['item']['promotion_price'] )}} đ
                                        @endif
                                    </div>
                                    <div class="col-md-2 align-self-center" style="text-align: center"> <a class="" href="{{ route('xoagiohang', [$product['item']['id'], $product['item']['color'] ]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                </div>
                            </div>
                            <!--end cart-item-->
                        @endforeach
                        </div>
                        <!--end desktop-->

                        <!--mobile-->
                        <div class="mobile-cart">
                        @foreach($product_cart as $product)
                            {{-- cart-item --}}
                            <div class="cart-item">
                                <div class="container">
                                    <div class="row mobile-cart-title">
                                        <div class="cart-div-img col-3">
                                            <a href="#"> <img class="img-fluid cart-img" src="storage/product/{{$product['item']['img']}}"> </a>
                                        </div>
                                        <div class="cart-product-info col-7 offset-1">
                                            <div class="cart-product-name text-title"> 
                                                <a href="#">{{$product['item']['name']}}</a> 
                                            </div>
                                            <div class="cart-price"> Đơn giá:
                                                @if($product['item']['promotion_price'] == 0)
                                                    {{number_format( $product['item']['unit_price'] )}} đ
                                                @else
                                                    {{number_format( $product['item']['promotion_price'] )}} đ
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-1" style="text-align: right"> <a class="" href="{{ route('xoagiohang', [$product['item']['id'], $product['item']['color'] ]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                    </div>
                                    <div class="row mobile-cart-info">
                                        <label class="col-4">Size:</label>
                                        <label class="col-7">{{$product['item']['size']}}</label>
                                        <label class="col-4">Số lượng: </label>
                                        <div class="col-7 cart-qty">
                                            <div class="cart-input-qty">
                                                <input type="text" name="soluong" class="form-control text-center new-qty" value="{{$product['qty']}}" readonly> 
                                                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                            </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty"> 
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>

                                                    <input type="text" name="" class="form-control text-center" id="{{ $product['item']['id'] }}" value="{{$product['qty']}}"> 

                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span> 
                                                </div>
                                                <div class="div-confirm-change-qty">
                                                    <button class="confirm-change-qty" type="button"><i class="fa fa-check"></i></button>
                                                    <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-4">Màu:</label>
                                        <div class="form-group change-color" id="cld_{{$product['item']['id']}}"> 
                                           <label class="col-7"> {{$product['item']['color']}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end cart-item-->
                        @endforeach
                        </div>
                        <!--end mobile-->

                        {{-- script change qty --}}
                        <script>
                            
                            $(".confirm-change-qty").on('click', function () {
                                $(this).parents(".change-qty").css("display", "none");
                                var token = $('input[name="_token"').val();

                                var newqty =  $(this).parent(".div-confirm-change-qty").prev('.input-change-qty').find('input').val();
                                var id = $(this).parent(".div-confirm-change-qty").prev('.input-change-qty').find('input').attr('id');

                                var oldqty = $(this).parents(".change-qty").prev('.cart-input-qty').find('input').val();

                                var screensize = screen.width;

                                if(screensize > 768){
                                    var color = $(this).parents('.cart-qty').prev('.cart-product').find('.change-color').html();
                                }
                                else {
                                    var color = $(this).parents('.mobile-cart-info').find('.change-color label').html();
                                }

                                $.ajax({
                                    url: 'changeqty',
                                    type: 'GET',
                                    dataType: 'json',
                                    data: {token: token, id: id, newqty: newqty, oldqty: oldqty, color: color},
                                    success: function(data){
                                        console.log(data);
                                        $('.total-price').html(data[1] + " đ");
                                        $('#number-cart').html(data[0].totalQty);
                                        alert_change_cart();
                                    }
                                });
                                $(this).parents(".change-qty").prev('.cart-input-qty').find('input').val(newqty);
                            });
                        </script>
                        {{-- end script change qty --}}

                    </div>
                </div>
                <div class="cart-order">
                    <div class="cart-total-price col-md-4 offset-md-6 col-12">
                        <div class="row">
                            <div class="col-md-5 col-5" style="padding-left: 15px;"> Tổng tiền: </div>
                            <div class="col-md-7 col-7 total-price"> {{number_format( Session('cart')->totalPrice )}} đ </div>
                        </div>
                    </div>
                    <div class="div-btn-order col-md-4 offset-md-6">
                        <input class="btn-order" type="submit" value="đặt hàng" name="order"> 
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</form>

<!--  Modal Mua Nhanh promotion-->
    @foreach($promotion_product as $promo ) 
    <div class="modal fade" id="pro{{$promo->id_product}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $promo->id_product) }}" method="post"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$promo->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-full">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
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
                                        <div class="thumbnail ">
                                            <img src="storage/product/{{$promo->image}}" alt="Thumbnail Image 1" class="thumbnail-re" width="480px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price text-modal-re">
                                                @if($promo->promotion_price == 0)
                                                    <span class="text-danger ">{{number_format($promo->unit_price)}} đ</span> &nbsp;
                                                @else
                                                    <span class="text-danger ">{{number_format($promo->promotion_price)}} đ</span> &nbsp;
                                                    <span class="flash-del">{{number_format($promo->unit_price)}} đ</span>
                                                @endif
                                                </b>
                                                <div class="space10">&nbsp;</div>
                                    <div class="container-full">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center text-modal-re" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group text-modal-re">
                                                    <select name="colorbuy" id="colorbuy">
                                                        @foreach($product_color as $pro)
                                                            @if($promo->id_product == $pro->spid)
                                                                <option value="{{$pro->color}}">{{$pro->color}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price text-thongtin-re"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 text-thongtin-re">{{$promo->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-themvaogio btn-modal-re btn-modal-huy btn-full" data-dismiss="modal">Đóng</button>
                                </div>
                                <div class="col-lg-3 col-md-5 col-xs-12">
                                    <a style="color: white;" class="btn btn-buy btn-modal-re btn-modal btn-full" id="tvg_pro_{{ $promo->id_product }}">Thêm Vào Giỏ</a>
                                </div>
                                <script>
                                    $('#tvg_pro_{{ $promo->id_product }}').on('click',function(){
                                        var color = $(this).parents('.modal-footer').prev('.modal-body').find('select').val();
                                        var qty = $(this).parents('.modal-footer').prev('.modal-body').find('input').val();
                                        var id = '{{ $promo->id_product }}';
                                        $.get('mausp', {colorbuy: color, qtybuy: qty, id:id}, function(cl, qty, id, cart){
                                            $('#cld_{{$promo->id_product}}').html(cl);
                                            $('#clm_{{$promo->id_product}}').html(cl);
                                            location.reload();
                                            console.log(cl, qty, id, cart);
                                        });
                                    });
                                </script>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    @if(Session::has('cart'))
                                        <a class="btn btn-buy btn-modal-re btn-modal btn-full button" href="{{route('themnhanh',$promo->id_product)}}"><span>Thanh Toán</span></a>
                                    @else
                                        <button class="btn btn-buy btn-modal-re btn-modal btn-full button" type="submit"><span>Mua Nhanh</span></button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </form>
    </div>
    @endforeach
<!--  Modal Mua Nhanh promotion-->

<!--  Modal Mua Nhanh new-->
    @foreach($new_product as $new ) 
    <div class="modal fade" id="new{{$new->id_product}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $new->id_product) }}" method="post">    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$new->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-full">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
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
                                        <div class="thumbnail ">
                                          
                                            <img src="storage/product/{{$new->image}}" alt="Thumbnail Image 1" class="thumbnail-re" width="480px">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price text-modal-re">
                                                @if($new->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($new->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($new->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($new->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                                <div class="space10">&nbsp;</div>
                                    <div class="container-full">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center text-modal-re" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group text-modal-re">
                                                    <select name="colorbuy" >
                                                        @foreach($product_color as $pro)
                                                            @if($new->id_product == $pro->spid)
                                                                <option>{{$pro->color}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price text-thongtin-re"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 text-thongtin-re">{{$new->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-themvaogio btn-modal-re btn-modal-huy btn-full " data-dismiss="modal">Đóng</button>
                                </div>
                                <div class="col-lg-3 col-md-5 col-xs-12">
                                    <a style="color: white;" class="btn btn-buy btn-modal-re btn-modal btn-full" id="tvg_new_{{ $new->id_product }}" >Thêm Vào Giỏ</a>
                                    
                                </div>
                                <script>
                            $('#tvg_new_{{ $new->id_product }}').on('click',function(){
                                var color = $(this).parents('.modal-footer').prev('.modal-body').find('select').val();
                                var qty = $(this).parents('.modal-footer').prev('.modal-body').find('input').val();
                                var id = '{{ $new->id_product }}';
                                $.get('mausp', {colorbuy: color, qtybuy: qty, id:id}, function(cl, qty, id, cart){
                                    $('#cld_{{$new->id_product}}').html(cl);
                                    $('#clm_{{$new->id_product}}').html(cl);
                                    location.reload();
                                });
                            });
                                </script>
                                
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    @if(Session::has('cart'))
                                        <a class="btn btn-buy btn-modal-re btn-modal btn-full button" href="{{route('themnhanh',$new->id_product)}}"><span>Thanh Toán</span></a>
                                    @else
                                        <button class="btn btn-buy btn-modal-re btn-modal btn-full button" type="submit"><span>Thanh Toán</span></button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>
    @endforeach
<!--  Modal Mua Nhanh new-->

<!--  Modal Mua Nhanh hot-->
    @foreach($hot_product as $hot ) 
    <div class="modal fade" id="hot{{$hot->id_product}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $hot->id_product) }}" method="post">    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$hot->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-full">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
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
                                        <div class="thumbnail ">
                                            <img src="storage/product/{{$hot->image}}" alt="Thumbnail Image 1" class="thumbnail-re" width="480px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price text-modal-re">
                                                @if($hot->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($hot->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($hot->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($hot->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                                <div class="space10">&nbsp;</div>
                                    <div class="container-full">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center text-modal-re" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group text-modal-re">
                                                    <select name="colorbuy" >
                                                        @foreach($product_color as $pro)
                                                            @if($hot->id_product == $pro->spid)
                                                                <option>{{$pro->color}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price text-thongtin-re"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 text-thongtin-re">{{$hot->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-themvaogio btn-modal-re btn-modal-huy btn-full " data-dismiss="modal">Đóng</button>
                                </div>
                                <div class="col-lg-3 col-md-5 col-xs-12">
                                    <a style="color: white;" class="btn btn-buy btn-modal-re btn-modal btn-full" id="tvg_hot_{{ $hot->id_product }}" >Thêm Vào Giỏ</a>
                                </div>
                                <script>
                            $('#tvg_hot_{{ $hot->id_product }}').on('click',function(){
                                var color = $(this).parents('.modal-footer').prev('.modal-body').find('select').val();
                                var qty = $(this).parents('.modal-footer').prev('.modal-body').find('input').val();
                                var id = '{{ $hot->id_product }}';
                                $.get('mausp', {colorbuy: color, qtybuy: qty, id:id}, function(cl, qty, id, cart){
                                    $('#cld_{{$hot->id_product}}').html(cl);
                                    $('#clm_{{$hot->id_product}}').html(cl);
                                    location.reload();
                                });
                            });
                                </script>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    @if(Session::has('cart'))
                                        <a class="btn btn-buy btn-modal-re btn-modal btn-full button" href="{{route('themnhanh',$hot->id_product)}}"><span>Thanh Toán</span></a>
                                    @else
                                        <button class="btn btn-buy btn-modal-re btn-modal btn-full button" type="submit"><span>Thanh Toán</span></button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>
    @endforeach
<!--  Modal Mua Nhanh hot-->

<!--  Modal Mua Nhanh normal-->
    @foreach($normal_product as $nor ) 
    <div class="modal fade" id="nor{{$nor->id_product}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $nor->id_product) }}" method="post">    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$nor->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: black"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-full">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                        @if($nor->promotion_price != 0)
                                        <div class="ribbon1 sale">Sale</div>
                                        @elseif($nor->status == 1)
                                        <div class="ribbon1 new">New</div>
                                        @elseif($nor->status == 2)
                                        <div class="ribbon1 hot">Hot</div>
                                        @endif
                                        </div>
                                        <div class="thumbnail ">
                                            <img src="storage/product/{{$nor->image}}" alt="Thumbnail Image 1" class="thumbnail-re" width="480px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price text-modal-re">
                                                @if($nor->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($nor->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($nor->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($nor->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                                <div class="space10">&nbsp;</div>
                                    <div class="container-full">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center text-modal-re" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price text-modal-re"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group text-modal-re">
                                                    <select name="colorbuy" >
                                                        @foreach($product_color as $pro)
                                                            @if($nor->id_product == $pro->spid)
                                                                <option>{{$pro->color}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price text-thongtin-re"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 text-thongtin-re">{{$nor->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-themvaogio btn-modal-re btn-modal-huy btn-full " data-dismiss="modal">Đóng</button>
                                </div>
                                <div class="col-lg-3 col-md-5 col-xs-12">
                                    <a style="color: white;" class="btn btn-buy btn-modal-re btn-modal btn-full" id="tvg_hot_{{ $nor->id_product }}" >Thêm Vào Giỏ</a>
                                </div>
                                <script>
                            $('#tvg_hot_{{ $nor->id_product }}').on('click',function(){
                                var color = $(this).parents('.modal-footer').prev('.modal-body').find('select').val();
                                var qty = $(this).parents('.modal-footer').prev('.modal-body').find('input').val();
                                var id = '{{ $nor->id_product }}';
                                $.get('mausp', {colorbuy: color, qtybuy: qty, id:id}, function(cl, qty, id, cart){
                                    $('#cld_{{$nor->id_product}}').html(cl);
                                    $('#clm_{{$nor->id_product}}').html(cl);
                                    location.reload();
                                });
                            });
                                </script>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    @if(Session::has('cart'))
                                        <a class="btn btn-buy btn-modal-re btn-modal btn-full button" href="{{route('themnhanh',$nor->id_product)}}"><span>Thanh Toán</span></a>
                                    @else
                                        <button class="btn btn-buy btn-modal-re btn-modal btn-full button" type="submit"><span>Thanh Toán</span></button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>

    <script>
        function alert_change_cart() {
            $.iaoAlert({
                    msg: "Đã cập nhật giỏ hàng",
                    type: "success",
                    mode: "dark",
            })
        };
    </script>
    @endforeach
<!--  Modal Mua Nhanh normal-->