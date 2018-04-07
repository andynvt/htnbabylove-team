<head>
    <title>Sản phẩm | {{ $sanpham->name }}</title> 
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('chitietsanpham', $sanpham->id_product) }}">{{ $sanpham->name }}</a></li>
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
                                @foreach($product_img as $pro_img)
                                <div class="column"> <img src="source/image/{{ $pro_img->image }}" style="width:100%; height: 50px"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"> 
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="modal-img-mini" class="modal-img-mini"> <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">
                                @foreach($product_img as $pro_img)
                                <div class="slide-img-mini">
                                    <div class="numbertext">1 / 4</div> <img src="source/image/{{ $pro_img->image }}" style="width:100%"> 
                                </div>
                                @endforeach
                                <a style="color: #288AD6" class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                                <a style="color: #288AD6" class="next" onclick="plusSlides(1)">&#10095;</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="row" id="bg-modal-product">
                                    @foreach($product_img as $pro_img)
                                    <div class="column"> <img class="demo cursor" src="source/image/{{ $pro_img->image }}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise"> 
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
                                        <div class="dropdown" style="width: 45%;">
                                            <button class="btn _select_color " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret _right"></span> <span class="color" style="background: black"></span></button>
                                            <ul class="dropdown-menu _select_color_drop " aria-labelledby="dropdownMenu1">
                                                <li><span class="color " style="background: black"></span></li>
                                                <li><span class="color " style="background: red"></span></li>
                                                <li><span class="color " style="background: #f90"></span></li>
                                                <li><span class="color " style="background: brown"></span></li>
                                                <li><span class="color " style="background: orange"></span></li>
                                                <li><span class="color " style="background: pink"></span></li>
                                                <li><span class="color " style="background: silver"></span></li>
                                                <li><span class="color " style="background: blue"></span></li>
                                                <li><span class="color " style="background: TEAL"></span></li>
                                                <li><span class="color " style="background: repeating-linear-gradient(90deg, transparent,                                     transparent 50px,
                                                                                            rgba(255, 127, 0, 0.25) 50px, rgba(255, 127, 0, 0.25) 56px,
                                                                                            transparent 56px, transparent 63px,
                                                                                            rgba(255, 127, 0, 0.25) 63px, rgba(255, 127, 0, 0.25) 69px,
                                                                                            transparent 69px, transparent 116px,
                                                                                            rgba(255, 206, 0, 0.25) 116px, rgba(255, 206, 0, 0.25) 166px),
                                                                                          repeating-linear-gradient(0deg, transparent, transparent 50px,
                                                                                            rgba(255, 127, 0, 0.25) 50px, rgba(255, 127, 0, 0.25) 56px,
                                                                                            transparent 56px, transparent 63px,
                                                                                            rgba(255, 127, 0, 0.25) 63px, rgba(255, 127, 0, 0.25) 69px,
                                                                                            transparent 69px, transparent 116px,
                                                                                            rgba(255, 206, 0, 0.25) 116px, rgba(255, 206, 0, 0.25) 166px),
                                                                                          repeating-linear-gradient(-45deg, transparent, transparent 5px,
                                                                                            rgba(143, 77, 63, 0.25) 5px, rgba(143, 77, 63, 0.25) 10px),
                                                                                          repeating-linear-gradient(45deg, transparent, transparent 5px,
                                                                                            rgba(143, 77, 63, 0.25) 5px, rgba(143, 77, 63, 0.25) 10px);"></span></li>
                                                <li><span class="color " style="background: repeating-linear-gradient( red, red 5px, blue 5px, blue 10px)"></span></li>
                                                <input type="hidden" name="_color" value=""> </ul>
                                        </div>
                                    </div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12">
                                            <button type="button" class="btn btn-themvaogio btn-full "><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                        <div class="col-lg-5 col-md-12">
                                            <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
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
                        <div class="img-product-show"> <img src="source/image/quanao1.jpg" /> </div>
                        <div class="img-product-show"> <img src="source/image/quanao2.jpg" /> </div>
                        <div class="img-product-show"> <img src="source/image/quanao3.jpg" /> </div>
                        <div class="img-product-show"> <img src="source/image/quanao4.jpg" /> </div>
                    </div>
                </div>
                <!-- <div class="space50">&nbsp;</div> -->
                <hr>
                <div class="content-rate-product">
                    <div class="title-rate">
                        <div class="title">
                            <h3>Đánh giá sản phẩm {{ $sanpham->name }}</h3>
                        </div>
                        <div class="go-to-rate">
                            <!-- <a href="#text-comment">Gửi đánh giá của bạn</a> -->
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedback"> Gửi đánh giá của bạn </button>
                        </div>
                    </div>
                        @foreach($feedback as $fb) 
                                <div class="content-rate">
                                    <div class="name-user"> <span>{{$fb->reviewer}}</span> </div>
                                    <div class="time-post"> <span>{{$fb->create_at}}</span> </div>
                                    <div class="star-rate">
                                        <div class="start-sum">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="comment">
                                            <p>{{ $fb->review }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endforeach 
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
                        <!-- <h4>Sản Phẩm Cùng Loại</h4> --><img src="source/image/banner-related-product.png" /> </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon1 sale">Sale</div>
                                </div>
                                <div class="thumbnail">
                                    <div class="containeroverlay">
                                        <a href="#"><img src="http://placehold.it/670x438/cccccc/ffffff" alt="Thumbnail Image 1" class="img-responsive"></a>
                                        <div class="overlay">
                                            <div class="text">Xem chi tiết</div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="#"> <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                        <span class="flash-del">
                                                         1,000,000đ
                                                        </span>
                                                    </b>
                                            <div class="space10">&nbsp;</div>
                                            <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                        <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                        <hr> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon1 sale">Sale</div>
                                </div>
                                <div class="thumbnail">
                                    <div class="containeroverlay">
                                        <a href="#"><img src="http://placehold.it/670x438/cccccc/ffffff" alt="Thumbnail Image 1" class="img-responsive"></a>
                                        <div class="overlay">
                                            <div class="text">Xem chi tiết</div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="#"> <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                        <span class="flash-del">
                                                         1,000,000đ
                                                        </span>
                                                    </b>
                                            <div class="space10">&nbsp;</div>
                                            <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                        <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                        <hr> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon1 sale">Sale</div>
                                </div>
                                <div class="thumbnail">
                                    <div class="containeroverlay">
                                        <a href="#"><img src="http://placehold.it/670x438/cccccc/ffffff" alt="Thumbnail Image 1" class="img-responsive"></a>
                                        <div class="overlay">
                                            <div class="text">Xem chi tiết</div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="space5">&nbsp;</div>
                                        <a href="#"> <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                        <span class="flash-del">
                                                         1,000,000đ
                                                        </span>
                                                    </b>
                                            <div class="space10">&nbsp;</div>
                                            <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                        </a>
                                        <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                        <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                        <hr> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .beta-products-list -->
                <hr> </div>
            <div class="col-lg-3 col-md-12 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản Phẩm Bán Chạy</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/aosomi.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo sơ mi caro cho bé từ 1-8 màu xanh rêu</a>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/aosomi.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo sơ mi caro cho bé từ 1-8 màu xanh rêu</a>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/aosomi.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo sơ mi caro cho bé từ 1-8 màu xanh rêu</a>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/aosomi.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo sơ mi caro cho bé từ 1-8 màu xanh rêu</a>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản Phẩm Mới Nhất</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/ao_dai_rong_kem_hoa_van.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo dài rồng kèm hoa văn cho bé trai màu đỏ</a>
                                    <br/>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/ao_dai_rong_kem_hoa_van.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo dài rồng kèm hoa văn cho bé trai màu đỏ</a>
                                    <br/>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/ao_dai_rong_kem_hoa_van.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo dài rồng kèm hoa văn cho bé trai màu đỏ</a>
                                    <br/>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/ao_dai_rong_kem_hoa_van.jpg" alt=""></a>
                                <div class="media-body"> <a href="">Áo dài rồng kèm hoa văn cho bé trai màu đỏ</a>
                                    <br/>
                                    <p class="beta-sales-price">142.000 đ</p>
                                    <button type="button" class="btn-ms btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                    <button type="button" class="btn-ms btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                </div>
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
