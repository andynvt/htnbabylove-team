<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Chủ | HTN Baby Love</title>
    <link rel="shortcut icon" href="storage/product/favicon.png" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--    -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.css" rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <!--    -->

    <link href="source/css/about.css" rel="stylesheet" />
    <link href="source/css/private-policy.css" rel="stylesheet" />
    <link href="source/css/chitietsanpham_custom.css" rel="stylesheet" />
    <link href="source/css/style.css" rel="stylesheet" title="style">
    <link href='source/css/index.css' rel='stylesheet' type='text/css'>
    <link href='source/css/menuscroll.css' rel='stylesheet' type='text/css'>
    <link href='source/css/slideshow.css' rel='stylesheet' type='text/css'>
    <link href="source/css/cart.css" rel="stylesheet">
    <link href="source/css/contact.css" rel="stylesheet" />
    <link href="source/css/seach.css" rel="stylesheet" />
    <link href="source/css/header-footer.css" rel="stylesheet" />
    <link href="source/css/checkout.css" rel="stylesheet" />
    <link href="source/css/responsive_product_detail.css" rel="stylesheet" />
    <link href="source/css/feedback.css" rel="stylesheet" />
    <link href="source/css/chitietsanpham_custom.css" rel="stylesheet">
</head>

<body>
    {{-- Modal liên hệ --}}
    <div class="modal fade cont-modal" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Liên hệ với chúng tôi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <h6 class="contact-head">1. Thông tin liên hệ</h6>
                    <div class="about-p-content">
                        <ul class="contact-list">
                            <li><i class="fa fa-phone-square contact-icon"></i>&nbsp;&nbsp;&nbsp;<a href="tel: 02923895554"><b class="contact-b">02923895554</b></a> hoặc <a href="tel: 0939058056 "><b class="contact-b">0939058056</b></a></li>
                            <li><i class="fa fa-envelope contact-icon" style="font-size: 13px"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:nguyenkimhan2013@gmail.com"><b class="contact-b">nguyenkimhan2013@gmail.com</b></a></li>
                            <li><i class="fa fa-location-arrow contact-icon"></i>&nbsp;&nbsp;&nbsp;<a target="_blank" class="contact-b" href="https://www.google.com/maps/place/10%C2%B002'49.5%22N+105%C2%B045'46.1%22E/@10.0470926,105.7617037,18z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d10.04709!4d105.762798?hl=vi-VN">118E Mậu Thân, Quận Ninh Kiều, Tp. Cần Thơ</a></li>
                        </ul>
                    </div>
                    <h6 class="contact-head">2. Để lại lời nhắn</h6>
                    <form action="#" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form">Tên</div>
                                    <input class="form-control" type="text" name="name" placeholder="Tên của bạn" required autofocus> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form">Email</div>
                                    <input class="form-control" name="email" placeholder="Email" type="text" required /> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form">Tiêu đề</div>
                                    <input class="form-control" name="subject" placeholder="Tiêu đề" type="text" required /> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Nội dung lời nhắn..." rows="6" name="comment" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn contact-btn mr-auto" value="Gửi đi" />
                    <input type="reset" class="btn contact-btn mr-auto" onclick="contactDeleteForm()" value="Xoá trắng" />
                    <button type="button" class="btn contact-btn" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    {{-- #Modal liên hệ --}}
    <div id="header">
        @include('header')
    </div>
    <!-- .header-bottom -->
    <!-- .header-bottom -->
    <div class="space10">&nbsp;</div>
    <!-- #header -->

    <!-- Content -->
    <div id="content-body">
        @yield('content')
    </div>
    <!-- #content -->

    <div class="menuscroll" style="float: right;">
        <a class="btn btn-up btn-top" href="javascript:void(0);" style="display: inline;"><i class="fa fa-angle-up" style="margin-left:-2px; color: fff !important;"></i></a>
    </div>
    <div id="footer" class="color-div">
        @include('footer')
        <!-- .row -->
    </div>
    <!-- #footer -->
    
    <!--  Modal Mua Nhanh promotion-->
    @foreach($promotion_product as $promo ) 
        @foreach($detail_product as $det ) 
            @if($promo->id == $det->id_product  )
    <div class="modal fade" id="pro{{$promo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $promo->id) }}" method="post">    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$promo->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
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
                                        <div class="thumbnail">
                                            @foreach($product_image as $anh )
                                                @if($det->id == $anh->id_detail  )
                                            <img src="storage/product/{{$anh->image}}" alt="Thumbnail Image 1" class="" width="480px">
                                            @break
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-offset-0">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price">
                                                @if($promo->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($promo->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($promo->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($promo->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group">
                                                    <select name="colorbuy" style="height: 38px">
                                                        @foreach($product_color as $anh)
                                                        @if($anh->id_detail == $promo->id ) 
                                                            <option>{{$anh->color}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 ">{{$promo->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-danger btn-full " data-dismiss="modal">Huỷ</button>
                                </div>
                                <div class="col"> &nbsp; </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full ">Thêm Vào Giỏ</button>
                                    <div class="space10">&nbsp;</div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full button" type="submit"><span>Thanh Toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>
       @break
    @endif 
    @endforeach 
    @endforeach
    <!--  Modal Mua Nhanh promotion-->

    <!--  Modal Mua Nhanh new-->
    @foreach($new_product as $new ) 
        @foreach($detail_product as $det ) 
            @if($new->id == $det->id_product  )
    <div class="modal fade" id="new{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $new->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$new->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
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
                                        <div class="thumbnail">
                                             @foreach($product_image as $anh )
                                                @if($det->id == $anh->id_detail  )
                                            <img src="storage/product/{{$anh->image}}" alt="Thumbnail Image 1" class="" width="480px">
                                            @break
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-offset-0">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price">
                                                @if($new->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($new->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($new->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($new->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group">
                                                    <select name="colorbuy" style="height: 38px">
                                                        @foreach($product_color as $anh)
                                                        @if($anh->id_detail == $new->id ) 
                                                            <option>{{$anh->color}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 ">{{$new->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-danger btn-full " data-dismiss="modal">Huỷ</button>
                                </div>
                                <div class="col"> &nbsp; </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full ">Thêm Vào Giỏ</button>
                                    <div class="space10">&nbsp;</div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full button" type="submit"><span>Thanh Toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>
       @break
    @endif 
    @endforeach 
    @endforeach
    <!--  Modal Mua Nhanh new-->

    <!--  Modal Mua Nhanh hot-->
    @foreach($hot_product as $hot ) 
        @foreach($detail_product as $det ) 
            @if($hot->id == $det->id_product  )
    <div class="modal fade" id="hot{{$hot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="{{ route('chitietsp', $hot->id) }}" method="post">
           <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-title-modal " id="exampleModalLongTitle">{{$hot->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
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
                                        <div class="thumbnail">
                                            @foreach($product_image as $anh )
                                                @if($det->id == $anh->id_detail  )
                                            <img src="storage/product/{{$anh->image}}" alt="Thumbnail Image 1" class="" width="480px">
                                            @break
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-offset-0">
                                    <div class="space10">&nbsp;</div>
                                   <b class="text-price">
                                                @if($hot->promotion_price == 0)
                                                            <span class="text-danger ">{{number_format($hot->unit_price)}} đ</span> &nbsp;
                                                        @else
                                                            <span class="text-danger ">{{number_format($hot->promotion_price)}} đ</span> &nbsp;
                                                            <span class="flash-del">{{number_format($hot->unit_price)}} đ</span>
                                                        @endif
                                                </b>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center" name="qtyspbuy" value="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="up"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="space15">&nbsp;</div>
                                            </div>
                                            <!--   <div class="space30">&nbsp;</div>-->
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Màu sắc:</b></p>
                                                <div class="form-group">
                                                    <select name="colorbuy" style="height: 38px">
                                                        @foreach($product_color as $anh)
                                                        @if($hot->id == $anh->id_detail) 
                                                            <option>{{$anh->color}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="space10">&nbsp;</div>
                                            </div>
                                            <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 ">{{$hot->description}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-xs-12">
                                    <button class="btn btn-danger btn-full " data-dismiss="modal">Huỷ</button>
                                </div>
                                <div class="col"> &nbsp; </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full ">Thêm Vào Giỏ</button>
                                    <div class="space10">&nbsp;</div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-12">
                                    <button class="btn btn-buy btn-full button" type="submit"><span>Thanh Toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>
       @break
    @endif 
    @endforeach 
    @endforeach
    <!--  Modal Mua Nhanh hot-->

    <script type="text/javascript" src="source/js/cart.js"></script>
    <script type="text/javascript" src='source/js/modal.js'></script>
    <script type="text/javascript" src='source/js/index.js'></script>
    <script type="text/javascript" src='source/js/timkiemnhanh.js'></script>
    <script type="text/javascript" src='source/js/feedback.js'></script>

</body>

</html>
