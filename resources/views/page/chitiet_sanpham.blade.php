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
                    <li class="breadcrumb-item"><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('loaisanpham', $id_lsp) }}">{{ $type_name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('chitietsanpham', $sanpham->id) }}">{{ $sanpham->name }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="about-content">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-sm-4" id="show-images"> 
                        <img src="source/image/{{ $get1_proimg }}" style="width:100%" onclick="openModal();currentSlide(1)" alt="">
                        <!-- <h2 style="text-align:center">Lightbox</h2> -->
                        <div class="img-mini">
                            <div class="row">
                                @foreach($getimg as $img)
                                <div class="column"> <img src="source/image/{{ $img->image }}" style="width:100%; height: 50px"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"> 
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="modal-img-mini" class="modal-img-mini"> <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">
                                @foreach($getimg as $img)
                                <div class="slide-img-mini">
                                    <div class="numbertext">1 / 4</div> <img src="source/image/{{ $img->image }}" style="width:100%"> 
                                </div>
                                @endforeach
                                <a style="color: #288AD6" class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                                <a style="color: #288AD6" class="next" onclick="plusSlides(1)">&#10095;</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="row" id="bg-modal-product">
                                    @foreach($getimg as $img)
                                    <div class="column"> <img class="demo cursor" src="source/image/{{ $img->image }}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise"> 
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <script>
                            function openModal() {
                                document.getElementById('modal-img-mini').style.display = "block";
                            }

                            function closeModal() {
                                document.getElementById('modal-img-mini').style.display = "none";
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
                                var slides = document.getElementsByClassName("slide-img-mini");
                                var dots = document.getElementsByClassName("demo");
                                var captionText = document.getElementById("caption");
                                if (n > slides.length) {
                                    slideIndex = 1
                                }
                                if (n < 1) {
                                    slideIndex = slides.length
                                }
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                captionText.innerHTML = dots[slideIndex - 1].alt;
                            }

                        </script>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <form action="" method="POST" accept-charset="utf-8">
                            <div class="single-item-body">
                                <h3>{{ $sanpham->name }}</h3>
                                <p class="summary-product">{{ $sanpham->description }}.</p>
                                <hr/>
                                <p class="single-item-price">
                                    <span class="present-price">
                                        @if($sanpham->promotion_price == 0)
                                            <span class="text-danger ">{{number_format($sanpham->unit_price)}} đ</span> &nbsp; @else
                                    <span class="text-danger ">{{number_format($sanpham->promotion_price)}} đ</span> &nbsp;
                                    <span class="flash-del">{{number_format($sanpham->unit_price)}} đ</span> @endif
                                    </span>
                                </p>
                                <div class="select-size-product">
                                    <label class="choose-qty">Chọn số lượng:&nbsp;<i class="fa fa-question-circle" id="color-icon" data-toggle="tooltip" data-placement="top" title="Chọn số lượng bạn muốn mua"></i></label>
                                    <br/>
                                    <div class="space10">&nbsp;</div>
                                    <div class="input-group mb-3" style="width: 45%;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                        </div>
                                        <input type="text" class="form-control text-center" value="1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="space10">&nbsp;</div>
                                    <label class="choose-qty">Chọn màu sắc:&nbsp;<i class="fa fa-question-circle" id="color-icon" data-toggle="tooltip" data-placement="top" title="Chọn số lượng bạn muốn mua"></i></label>
                                    <div class="form-group">
                                        <select>
                                            @foreach($getcl as $cl)
                                                <option>
                                                    {{$cl->color}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12">
                                            <button type="button" class="btn btn-themvaogio btn-full "><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                        <div class="col-lg-5 col-md-12">
                                            <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#{{$sanpham->id}}"><span>Mua Ngay </span></button>
                                        </div>
                                    </div>
                                    <div class="flash"></div>
                                    <div class="product-note">
                                        <h3>Thông Tin & Khuyến Mãi</h3>
                                        <ul>
                                            <li>- <span style="font-weight: 400;">KHUYẾN MÃI :</span> nhận <span style="color: #DC2684">bao lì xì may mắn</span> khi mua các sản phẩm tại cửa hàng <a href="">Xem chi tiết!</a></li>
                                            <li>- Mua Áo dài Tết cho bé xúng xính ngày Tết. <a href="">Xem ngay!</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- <div class="space20">&nbsp;</div>	 --></div>
                            <!-- <div class="space20">&nbsp;</div> -->
                        </form>
                    </div>
                </div>
                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <div class="title-of-product">
                        <h5 class="title-intro-product">Chi Tiết Sản Phẩm</h5>
                    </div>
                    <div class="panel" id="tab-description">
                        <p class="intro-product">{{ $sanpham->description }}.</p>
                        @foreach($getimg as $img)
                            <div class="img-product-show"> <img src="source/image/{{ $img->image }}" /> </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="space50">&nbsp;</div> -->
                <hr>
                <div class="content-rate-product">
                    <div class="title-rate">
                        <div class="title">
                            <h3 style="text-transform: initial;">
                                @if(count($feedback) == 0)
                                    Không có đánh giá nào
                                @else
                                    Có {{ count($feedback) }} đánh giá sản phẩm {{ $sanpham->name }}
                                @endif
                            </h3>
                        </div>
                        <div class="go-to-rate">
                            <!-- <a href="#text-comment">Gửi đánh giá của bạn</a> -->
                            <!-- Button to Open the Modal -->

                            <button type="button" class="btn-sendfb" data-toggle="modal" data-target="#feedback"> Gửi đánh giá của bạn </button>
                        </div>
                    </div>
                        @foreach($feedback as $fb) 
                            <div class="content-rate">
                                <div class="name-user"> <span>{{$fb->reviewer}}</span> </div>
                                <div class="time-post"> <span>{{$fb->create_at}}</span> </div>
                                <div class="star-rate">
                                    <div class="start-sum">
                                        <input id="{{ $fb->id }}" type="hidden" value="{{ $fb->stars }}">
                                        <div class="khong-duoc-xoa"></div>
                                        <script>
                                            for($i=0; $i < {{ $fb->stars }} ; $i++){
                                                $('#{{ $fb->id }}').next('.khong-duoc-xoa').append('<i class="fa fa-star fa-fw"></i>');
                                            }
                                        </script>
                                    </div>
                                    <div class="comment">
                                        <p>{{ $fb->review }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach 

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
                                                            <input type="hidden" name="ratingValue" id="star-feedback">
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
                                                {{-- <div class="radio col-sm-12 gender-feedback">
                                                    <label><input type="radio" name="gt"><span>Anh</span></label>
                                                    <label><input type="radio" name="gt"><span>Chị</span></label>
                                                </div> --}}
                                                <input type="hidden" name="gender" id="gender">
                                                <div class="info-feedback col-sm-12">
                                                    <div class="row">
                                                        <label class="col-md-4 col-xs-12">Họ tên:</label>
                                                        <input class="col-md-8 col-xs-12" type="text" placeholder="Bắt buộc" name="name" required>
                                                        <label class="col-md-4 col-xs-12">Số điện thoại:</label>
                                                        <input class="col-md-8 col-xs-12" type="tel" placeholder="Để chúng tôi phục vụ bạn tốt hơn" name="phone">
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

                    <div class="pagination-comment">
                        <div class="row" id="frame-paging">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <hr>
                    <div class="text-comment" id="text-comment"> </div>
                </div>
                <div class="related-product">
                    <div class="banner-related-product">
                        <!-- <h4>Sản Phẩm Cùng Loại</h4> --><img src="source/image/related.png" /> </div>
                    <div class="row">
                        @foreach($same_product as $same) 
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
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
                                        <a href="{{ route('chitietsanpham', $same->id) }}">
                                            <div class="containeroverlay">
                                                <img src="source/image/{{$same->image}}" alt="Thumbnail Image 1" class="img-responsive" width="480px">
                                                <div class="overlay">
                                                    <div class="text">Xem chi tiết</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="caption">
                                            <div class="space5">&nbsp;</div>
                                            <b class="text-price">
                                                    @if($same->promotion_price == 0)
                                                        <span class="text-danger ">{{number_format($same->unit_price)}} đ</span> &nbsp;
                                                    @else
                                                        <span class="text-danger ">{{number_format($same->promotion_price)}} đ</span> &nbsp;
                                                        <span class="flash-del">{{number_format($same->unit_price)}} đ</span>
                                                    @endif
                                                    </b>
                                            <div class="space10">&nbsp;</div>
                                            <p class='text-left text-title'><b>{{$same->name}}</b>&nbsp;</p>
                                            <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#{{$same->id}}"><span>Mua Ngay </span></button>
                                            <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
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
                                <a class="pull-left" href="{{ route('chitietsanpham', $hot->id) }}">
                                    <img src="source/image/{{$hot->image}}" alt="">
                                </a>
                                <div class="media-body"> <a href="{{ route('chitietsanpham', $hot->id) }}">{{$hot->name}}</a>
                                    <p class="beta-sales-price">
                                        @if($hot->promotion_price == 0)
                                            <span class="text-danger ">{{number_format($hot->unit_price)}} đ</span> &nbsp;
                                        @else
                                            <span class="text-danger ">{{number_format($hot->promotion_price)}} đ</span> &nbsp;
                                            <span class="flash-del">{{number_format($hot->unit_price)}} đ</span>
                                        @endif
                                    </p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#{{$hot->id}}"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
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
                                <a class="pull-left" href="{{ route('chitietsanpham', $new->id) }}">
                                    <img src="source/image/{{$new->image}}" alt="">
                                </a>
                                <div class="media-body"> <a href="{{ route('chitietsanpham', $new->id) }}">{{$new->name}}</a>
                                    <p class="beta-sales-price">
                                        @if($new->promotion_price == 0)
                                            <span class="text-danger ">{{number_format($new->unit_price)}} đ</span> &nbsp;
                                        @else
                                            <span class="text-danger ">{{number_format($new->promotion_price)}} đ</span> &nbsp;
                                            <span class="flash-del">{{number_format($new->unit_price)}} đ</span>
                                        @endif
                                    </p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#{{$new->id}}"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
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
            document.getElementById('modal-img-mini').style.display = "block";
        }

        function closeModal() {
            document.getElementById('modal-img-mini').style.display = "none";
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
            var slides = document.getElementsByClassName("slide-img-mini");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

    </script>
</div> 
@endsection
