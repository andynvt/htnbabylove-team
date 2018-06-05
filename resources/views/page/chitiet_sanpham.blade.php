<head>
    <title>{{ $sanpham->name }} | HTN Baby Love</title> 
</head>
@extends('master') 

@section('content')

<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>
<div class="cnt-user">
    <div class="container-fluid">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('loaisanpham', $id_lsp) }}">{{ $type_name }}</a></li>
                    <li class="breadcrumb-item  active" aria-current="page"><a href="{{ route('chitietsanpham', $sanpham->id) }}">{{ $sanpham->name }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="about-content">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12" id="show-images"> 
                        <div class="row">
                          <div class="column1">
                            <img src="storage/product/{{ $get1_proimg }}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                          </div>
                          
                        </div>

                        <div id="myModal{{$sanpham->id}}" class="modal modal1">
                          <span class="close cursor" onclick="closeModal()">&times;</span>
                          <div class="modal-content modal-content1">
                            @foreach($getimg as $img)
                            <div class="mySlides">
                              <img src="storage/product/{{ $img->image }}" style="width:100%; height: 80%">
                            </div>
                            @endforeach
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            

                            <div class="row" style="float: left; padding: 20px">
                                <?php $i=1;?>
                            @foreach($getimg as $img)
                                
                            <div class="column" >
                              <img class="demo cursor" src="storage/product/{{$img->image}}" style="width:50%" onclick="currentSlide(<?php echo $i; ?>)" >
                              <?php $i= ++$i;?>
                            </div>
                            
                            @endforeach
                            
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="img-mini-re">&nbsp;</div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="single-item-body text-name-sp-re">
                            <h3>{{ $sanpham->name }}</h3>
                            <hr/>
                            <p class="single-item-price text-price-sp-re">
                                <span class="present-price ">
                                    @if($sanpham->promotion_price == 0)
                                        <span class="text-danger  ">{{number_format($sanpham->unit_price)}} đ</span> &nbsp; 
                                    @else
                                        <span class="text-danger ">{{number_format($sanpham->promotion_price)}} đ</span> &nbsp;
                                        <span class="flash-del ">{{number_format($sanpham->unit_price)}} đ</span> 
                                    @endif
                                </span>
                            </p>
                            <form action="{{ route('chitietsp', $sanpham->id) }}" method="POST" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="select-size-product">
                                    <label class="choose-qty ">Chọn số lượng</label>
                                    <br/>
                                    <div class="space10">&nbsp;</div>
                                    <div class="input-group mb-3" >
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                        </div>
                                        <input value="1" type="text" class="form-control text-center" name="qtyspbuy">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="space10">&nbsp;</div>
                                    <label class="choose-qty">Chọn màu sắc</label>
                                    <div class="form-group text-sp-re">
                                        <select name="colorbuy">
                                            @foreach($getcl as $cl)
                                                <option>
                                                    {{$cl->color}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <input type="hidden" name="id" value="{{ $sanpham->id }}">
                                            <a class="btn btn-themvaogio btn-sp-re btn-full" id="tvg_detail_{{ $sanpham->id }}"></i> Thêm vào giỏ</a>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            @if(Session::has('cart'))
                                            @else
                                            <button type="submit" class="btn btn-buy btn-sp-re btn-full button"><span>Mua Ngay </span></button>
                                            @endif
                                        </div>
                                    </div>
                                    <script>
                                        $('#tvg_detail_{{ $sanpham->id }}').on('click',function(){
                                            var id = $(this).prev('input').val();
                                            var color = $(this).parents('.row').prev().find('select').val();
                                            var qty = $(this).parents('.select-size-product').find('input').val();

                                            $.get('mausp', {colorbuy: color, qtybuy: qty, id:id}, function(cl, qty, id){
                                                location.reload();
                                            });
                                        });
                                    </script>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <div class="title-of-product">
                        <h5 class="title-intro-product">Chi Tiết Sản Phẩm</h5>
                    </div>
                    <div class="panel" id="tab-description">
                        <p class="intro-product ">{{ $sanpham->description }}.</p>
                        @foreach($getimg as $img)
                            <div class="img-product-show"> <img src="storage/product/{{ $img->image }}" /> </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="space50">&nbsp;</div> -->
                <hr>
                <div class="clearfix"></div>
                <div class="content-rate-product">
                    <div class="title-rate">
                        <div class="title ">
                            <h5 style="text-transform: initial;">
                                @if(count($feedback) == 0)
                                    Không có đánh giá nào
                                @else
                                    Có {{ count($feedback) }} đánh giá sản phẩm {{ $sanpham->name }}
                                @endif
                            </h5>
                        </div> 
                        <div class="space10">&nbsp;</div>
                        <div class="go-to-rate">
                            <button type="button" class="btn-sendfb" data-toggle="modal" data-target="#feedback"> Gửi đánh giá của bạn </button>
                        </div>
                    </div>
                    @foreach($feedback as $fb) 
                        <div class="content-rate">
                            <div class="name-user"> <span>Khách hàng: {{$fb->reviewer}}</span> </div>
                            <div class="time-post"> <span>Ngày gửi: {{$fb->created_at}}</span> </div>
                            <div class="star-rate">
                                <div class="start-sum">
                                    <input id="{{ $fb->fbid }}" type="hidden" value="{{ $fb->stars }}">
                                    <div class="khong-duoc-xoa"></div>
                                    <script>
                                        for($i=0; $i < {{ $fb->stars }} ; $i++){
                                            $('#{{ $fb->fbid }}').next('.khong-duoc-xoa').append('<i class="fa fa-star fa-fw"></i>');
                                        }
                                    </script>
                                </div>
                                <div class="comment">
                                    <p>Nội dung: {{ $fb->review }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="row justify-content-center">{{$feedback->links() }} </div>
                    <hr>
                    <div class="text-comment" id="text-comment"> </div>
                </div>

                {{-- Modal feedback --}}
                <form action=" {{ route('danhgia', $sanpham->id)}} " method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- The Modal -->
                    <div class="modal fade" id="feedback">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    <div class="check-star-feed-back">
                                        <h4>Đánh giá {{$sanpham->name}}</h4>
                                        <section class='rating-widget'>
                                            <!-- Rating Stars Box -->

                                            <div class="rate-feed-back clearfix">
                                                <div class='rating-stars'>
                                                    <ul id='stars' style="cursor: pointer">
                                                        <li class='star' title='Poor' data-value='1'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Fair' data-value='2'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Good' data-value='3'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Excellent' data-value='4'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='WOW!!!' data-value='5'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                    </ul>
                                                    <input style="height: 0; border: 1px solid #fff; background: #fff" type="number" required name="ratingValue" id="star-feedback">
                                                </div>
                                                <div class='success-box'>
                                                    <div class="text-message"></div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <h3 id="change-feed-back">Viết đánh giá của bạn</h3>
                                    <div class="content-feed-back row clearfix">
                                        <div class="info-feedback col-sm-12">
                                            <div class="row">
                                                <label class="col-md-4 col-xs-12">Họ tên:</label>
                                                <input class="col-md-8 col-xs-12" id="vali-name" type="text" placeholder="Tên của bạn" name="cusname" required>
                                                <label class="col-md-4 col-xs-12">Số điện thoại:</label>
                                                <input class="col-md-8 col-xs-12" id="vali-tel" type="tel" placeholder="Số điện thoại" name="cusphone" required pattern="[0-9]{9,10}" title="Không đúng định dạng số điện thoại">
                                                <br>
                                                <textarea class="col-xs-12" rows="5" name="review" placeholder="Đánh giá của bạn cho sản phẩm"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <div class="btn-feed-back">
                                        <button class="send-fb" data-dismiss="modal" type="button">
                                            Hủy
                                        </button>
                                    </div>
                                    <div class="btn-feed-back">
                                        <input class="send-fb" type="submit" value="Gửi" name="send">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="related-product">
                    <div class="banner-related-product">
                        <!-- <h4>Sản Phẩm Cùng Loại</h4> --><img src="storage/product/related.png" /> </div>
                    <div class="row">
                        @foreach($same_product as $same) 
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    @if($same->promotion_price != 0)
                                    <div class="ribbon1 sale">Sale</div>
                                    @elseif($same->status == 1)
                                    <div class="ribbon1 new">New</div>
                                    @elseif($same->status == 2)
                                    <div class="ribbon1 hot">Hot</div>
                                    @endif
                                </div>
                                <div class="thumbnail">
                                    <a href="{{ route('chitietsanpham', $same->id_product) }}">
                                        <div class="containeroverlay">
                                            
                                            <img src="storage/product/{{$same->image}}" alt="Thumbnail Image 1" class="img-responsive" width="1024px">
                                            
                                             
                                            <div class="overlay">
                                                <div class="text">Xem chi tiết</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="{{ route('chitietsanpham', $same->id_product) }}">
                                        <b class="text-price text-price-re">
                                                @if($same->promotion_price == 0)
                                                    <span class="text-danger ">{{number_format($same->unit_price)}} đ</span> &nbsp;
                                                @else
                                                    <span class="text-danger ">{{number_format($same->promotion_price)}} đ</span> &nbsp;
                                                    <span class="flash-del">{{number_format($same->unit_price)}} đ</span>
                                                @endif
                                                </b>
                                        <div class="space10">&nbsp;</div>
                                        <p class='text-left text-title text-title-re'>
                                            <b>{{$same->name}}
                                            </b>&nbsp;
                                        </p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-buy-re btn-full button" data-toggle="modal" data-target="@if($same->promotion_price != 0)
                                                    #pro{{$same->id_product}}
                                                @elseif($same->status == 1)
                                                    #new{{$same->id_product}}
                                                @elseif($same->status == 2)
                                                    #hot{{$same->id_product}}
                                                @elseif($same->status == 10 && $same->promotion_price == 0)
                                                    #nor{{$same->id_product}}
                                                @endif"><span>Mua Ngay </span></button>
                                        <a class="btn btn-themvaogio btn-themvaogio-re btn-full " href="{{route('themnhanh',$same->id_product)}}" style="color: white">Thêm vào giỏ</a>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        @endforeach
                    </div>
                </div>
                <!-- .beta-products-list -->
                <hr> </div>
            <div class="col-lg-3 col-md-12 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản Phẩm Bán Chạy</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                        @foreach($hot_product as $hot) 
                            <div class="media beta-sales-item">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                    <a class="pull-left" href="{{ route('chitietsanpham', $hot->id_product) }}">
                                        <img  src="storage/product/{{$hot->image}}" >
                                    </a>
                                </div>
                                <div class="space10">&nbsp;</div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="media-body text-title-sp-re"> 
                                            <a href="{{ route('chitietsanpham', $hot->id_product) }}">{{$hot->name}}</a>
                                            <p class="beta-sales-price text-price-sp-re">
                                                @if($hot->promotion_price == 0)
                                                    <span class="text-danger ">{{number_format($hot->unit_price)}} đ</span> &nbsp;
                                                @else
                                                    <span class="text-danger ">{{number_format($hot->promotion_price)}} đ</span> &nbsp;
                                                    <span class="flash-del">{{number_format($hot->unit_price)}} đ</span>
                                                @endif
                                            </p>
                                            <button type="button" class="btn-ms btn-buy btn-buy-sp btn-buy-sp-re btn-full button" data-toggle="modal" data-target="#hot{{$hot->id_product}}"><span>Mua Ngay </span></button>
                                            <a class="btn-ms btn-themvaogio-a btn-buy-sp btn-buy-sp-re btn-full " href="{{route('themnhanh',$hot->id_product)}}">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                        @endforeach
                        
                        </div>
                    </div>
                </div>
                <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản Phẩm Mới Nhất</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                        @foreach($new_product as $new)
                            <div class="media beta-sales-item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                <a class="pull-left" href="{{ route('chitietsanpham', $new->id_product) }}">
                                    <img src="storage/product/{{$new->image}}" alt="">
                                </a>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                <div class="media-body text-title-sp-re"> <a href="{{ route('chitietsanpham', $new->id_product) }}">{{$new->name}}</a>
                                    <p class="beta-sales-price text-price-sp-re">
                                        @if($new->promotion_price == 0)
                                            <span class="text-danger ">{{number_format($new->unit_price)}} đ</span> &nbsp;
                                        @else
                                            <span class="text-danger ">{{number_format($new->promotion_price)}} đ</span> &nbsp;
                                            <span class="flash-del">{{number_format($new->unit_price)}} đ</span>
                                        @endif
                                    </p>
                                    <button type="button" class="btn-ms btn-buy btn-buy-sp btn-buy-sp-re btn-full button" data-toggle="modal" data-target="#new{{$new->id_product}}"><span>Mua Ngay </span></button>


                                    <a class="btn-ms btn-themvaogio-a btn-buy-sp btn-buy-sp-re btn-full " href="{{route('themnhanh',$new->id_product)}}">Thêm vào giỏ</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        </div>

                        </div>
                    </div>
                </div>
                <!-- best sellers widget -->
            </div>
        </div>
    </div>
    <!-- .container -->
    <script>
        function openModal() {
              document.getElementById('myModal{{$sanpham->id}}').style.display = "block";
            }

            function closeModal() {
              document.getElementById('myModal{{$sanpham->id}}').style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              var captionText = document.getElementById("caption");
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " active";
              captionText.innerHTML = dots[slideIndex-1].alt;
            }

    </script>
       
</div> 
@endsection
