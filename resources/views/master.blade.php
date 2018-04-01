<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Chủ | HTN Baby Love</title>
    <link rel="shortcut icon" href="source/image/favicon.png" />
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
    <!-- Gio hang-->
    <form action="checkout.php" method="post">
        <!-- The Modal -->
        <div class="modal fade modalcart" id="modal-cart">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Giỏ hàng (có 3 sản phẩm)</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
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
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                   HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062
                                                               </a> </div>
                                                        <div class="cart-product-info">
                                                            <div class="form-group change-color">
                                                                <div class="color-dropdown">
                                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                                    <ul class="_select_color_drop">
                                                                        <li><span class="color " style="background-color: green"></span></li>
                                                                        <li><span class="color " style="background-color: red"></span></li>
                                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                                        <input type="hidden" name="_color" value=""> </ul>
                                                                </div>
                                                            </div>
                                                            <div> Kích thước: 30x30cm </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                <div class="div-confirm-change-qty">
                                                    <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                    <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right"> 100,000 VND </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                   HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062
                                                               </a> </div>
                                                        <div class="cart-product-info">
                                                            <div class="form-group change-color">
                                                                <div class="color-dropdown">
                                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                                    <ul class="_select_color_drop">
                                                                        <li><span class="color " style="background-color: green"></span></li>
                                                                        <li><span class="color " style="background-color: red"></span></li>
                                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                                        <input type="hidden" name="_color" value=""> </ul>
                                                                </div>
                                                            </div>
                                                            <div> Kích thước: 30x30cm </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                <div class="div-confirm-change-qty">
                                                    <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                    <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right"> 100,000 VND </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                   HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062
                                                               </a> </div>
                                                        <div class="cart-product-info">
                                                            <div class="form-group change-color">
                                                                <div class="color-dropdown">
                                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                                    <ul class="_select_color_drop">
                                                                        <li><span class="color " style="background-color: green"></span></li>
                                                                        <li><span class="color " style="background-color: red"></span></li>
                                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                                        <input type="hidden" name="_color" value=""> </ul>
                                                                </div>
                                                            </div>
                                                            <div> Kích thước: 30x30cm </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                <div class="div-confirm-change-qty">
                                                    <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                    <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right"> 100,000 VND </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="row align-items-center">
                                        <div class="cart-product col-md-6 col-12">
                                            <div class="row">
                                                <div class="cart-div-img col-md-3 col-3">
                                                    <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container">
                                                        <div class="cart-product-name text-title"> <a href="#">
                                                                   HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062
                                                               </a> </div>
                                                        <div class="cart-product-info">
                                                            <div class="form-group change-color">
                                                                <div class="color-dropdown">
                                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                                    <ul class="_select_color_drop">
                                                                        <li><span class="color " style="background-color: green"></span></li>
                                                                        <li><span class="color " style="background-color: red"></span></li>
                                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                                        <input type="hidden" name="_color" value=""> </ul>
                                                                </div>
                                                            </div>
                                                            <div> Kích thước: 30x30cm </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-qty col-md-2 col-3">
                                            <div class="cart-input-qty">
                                                <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                <div class="div-confirm-change-qty">
                                                    <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                    <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="unit-price col-md-2" style="text-align: right"> 100,000 VND </div>
                                        <div class="col-md-2 align-self-center" style="text-align: center"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!--end desktop-->
                            <!--mobile-->
                            <div class="mobile-cart">
                                <div class="cart-item">
                                    <div class="container">
                                        <div class="row mobile-cart-title">
                                            <div class="cart-div-img col-3">
                                                <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                            </div>
                                            <div class="cart-product-info col-6 offset-1">
                                                <div class="cart-product-name text-title"> <a href="#">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</a> </div>
                                                <div class="cart-price"> 100,000 VND </div>
                                            </div>
                                            <div class="col-1" style="text-align: right"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="row mobile-cart-info">
                                            <label class="col-5">Kích thước:</label>
                                            <label class="col-7">30x30x30</label>
                                            <label class="col-5">Số lượng:</label>
                                            <div class="col-7 cart-qty">
                                                <div class="cart-input-qty">
                                                    <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                                <div class="change-qty col-3">
                                                    <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                        <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                    <div class="div-confirm-change-qty">
                                                        <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-5">Màu:</label>
                                            <div class="form-group change-color col-7">
                                                <div class="color-dropdown">
                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                    <ul class="_select_color_drop">
                                                        <li><span class="color " style="background-color: green"></span></li>
                                                        <li><span class="color " style="background-color: red"></span></li>
                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                        <input type="hidden" name="_color" value=""> </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="container">
                                        <div class="row mobile-cart-title">
                                            <div class="cart-div-img col-3">
                                                <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                            </div>
                                            <div class="cart-product-info col-6 offset-1">
                                                <div class="cart-product-name text-title"> <a href="#">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</a> </div>
                                                <div class="cart-price"> 100,000 VND </div>
                                            </div>
                                            <div class="col-1" style="text-align: right"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="row mobile-cart-info">
                                            <label class="col-5">Kích thước:</label>
                                            <label class="col-7">30x30x30</label>
                                            <label class="col-5">Số lượng:</label>
                                            <div class="col-7 cart-qty">
                                                <div class="cart-input-qty">
                                                    <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                                <div class="change-qty col-3">
                                                    <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                        <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                    <div class="div-confirm-change-qty">
                                                        <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-5">Màu:</label>
                                            <div class="form-group change-color col-7">
                                                <div class="color-dropdown">
                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                    <ul class="_select_color_drop">
                                                        <li><span class="color " style="background-color: green"></span></li>
                                                        <li><span class="color " style="background-color: red"></span></li>
                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                        <input type="hidden" name="_color" value=""> </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="container">
                                        <div class="row mobile-cart-title">
                                            <div class="cart-div-img col-3">
                                                <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                            </div>
                                            <div class="cart-product-info col-6 offset-1">
                                                <div class="cart-product-name text-title"> <a href="#">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</a> </div>
                                                <div class="cart-price"> 100,000 VND </div>
                                            </div>
                                            <div class="col-1" style="text-align: right"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="row mobile-cart-info">
                                            <label class="col-5">Kích thước:</label>
                                            <label class="col-7">30x30x30</label>
                                            <label class="col-5">Số lượng:</label>
                                            <div class="col-7 cart-qty">
                                                <div class="cart-input-qty">
                                                    <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                                <div class="change-qty col-3">
                                                    <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                        <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                    <div class="div-confirm-change-qty">
                                                        <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-5">Màu:</label>
                                            <div class="form-group change-color col-7">
                                                <div class="color-dropdown">
                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                    <ul class="_select_color_drop">
                                                        <li><span class="color " style="background-color: green"></span></li>
                                                        <li><span class="color " style="background-color: red"></span></li>
                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                        <input type="hidden" name="_color" value=""> </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="container">
                                        <div class="row mobile-cart-title">
                                            <div class="cart-div-img col-3">
                                                <a href="#"> <img class="img-fluid cart-img" src="http://placehold.it/270x320/cccccc/ffffff"> </a>
                                            </div>
                                            <div class="cart-product-info col-6 offset-1">
                                                <div class="cart-product-name text-title"> <a href="#">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</a> </div>
                                                <div class="cart-price"> 100,000 VND </div>
                                            </div>
                                            <div class="col-1" style="text-align: right"> <a class="" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="row mobile-cart-info">
                                            <label class="col-5">Kích thước:</label>
                                            <label class="col-7">30x30x30</label>
                                            <label class="col-5">Số lượng:</label>
                                            <div class="col-7 cart-qty">
                                                <div class="cart-input-qty">
                                                    <input type="text" name="soluong" class="form-control text-center new-qty" value="1" readonly> <i class="fa fa-angle-double-down" aria-hidden="true"></i> </div>
                                                <div class="change-qty col-3">
                                                    <div class="input-group number-spinner input-change-qty"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </span>
                                                        <input type="text" name="soluong" class="form-control text-center" value="1"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-change-qty" data-dir="up">&nbsp;<i class="fa fa-plus"></i></button>
                                                    </span> </div>
                                                    <div class="div-confirm-change-qty">
                                                        <button class="confirm-change-qty" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        <button class="cancle-change-qty" type="button"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="col-5">Màu:</label>
                                            <div class="form-group change-color col-7">
                                                <div class="color-dropdown">
                                                    <button class="btn _select_color dropdowncolor" type="button"> <span class="color" style="background-color: green"></span> </button>
                                                    <ul class="_select_color_drop">
                                                        <li><span class="color " style="background-color: green"></span></li>
                                                        <li><span class="color " style="background-color: red"></span></li>
                                                        <li><span class="color " style="background-color: #f90"></span></li>
                                                        <li><span class="color " style="background-color: brown"></span></li>
                                                        <li><span class="color " style="background-color: orange"></span></li>
                                                        <li><span class="color " style="background-color: pink"></span></li>
                                                        <li><span class="color " style="background-color: silver"></span></li>
                                                        <li><span class="color " style="background-color: blue"></span></li>
                                                        <li><span class="color " style="background-color: TEAL"></span></li>
                                                        <input type="hidden" name="_color" value=""> </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end cart-item-->
                                <hr> </div>
                            <!--end mobile-->
                        </div>
                    </div>
                    <div class="cart-order">
                        <div class="cart-total-price col-md-4 offset-md-6 col-12">
                            <div class="row">
                                <div class="col-md-5 col-5"> Tổng tiền: </div>
                                <div class="col-md-7 col-7 total-price"> 200,000 VND </div>
                            </div>
                        </div>
                        <div class="div-btn-order col-md-4 offset-md-6">
                            <input class="btn-order" type="submit" value="đặt hàng" name="order"> </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--  Modal Mua Nhanh-->
    <div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <!--  Modal Mua Nhanh-->
        <form action="checkout.php" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-title-modal " id="exampleModalLongTitle">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-full">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 sale buy-item">Sale</div>
                                        </div>
                                        <div class="thumbnail">
                                            <div class="containeroverlay"> <img src="http://placehold.it/670x438/cccccc/ffffff" alt="Thumbnail Image 1" class="img-responsive"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-offset-0">
                                    <div class="space10">&nbsp;</div>
                                    <p class="text-danger text-price-model"><b>&nbsp; 1,000,000đ</b></p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p class=" text-price"><b>&nbsp;Số lượng:</b></p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button" data-dir="dwn"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control text-center" value="1">
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
                                                    <div class="dropdown">
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
                                            </div>
                                            <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                            <div class="col-lg-12 ">Balo Thời Trang PRAZA được thiết kế tinh tế, hiện đại mang phong cách Hàn Quốc vừa thời trang vừa gọn nhẹ lại vừa năng động lịch lãm cho các hoạt động ngoài trời hay đi gặp đối tác tự tin mà vẫn lịch sự thời trang. Gam màu của Balo PRAZA mang lại cho bạn nét thanh lịch, trẻ trung đầy sức hút. </div>
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
    <!--  Modal Mua Nhanh-->

    {{-- Modal feedback --}}
    <form action="" method="post">
        <!-- The Modal -->
        <div class="modal fade" id="feedback">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                        <div class="check-star-feed-back">
                            <h2>Đánh giá sản phẩm</h2>
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
                            <div class="radio col-sm-12 gender-feedback">
                                <label><input type="radio" name="gt"><span>Anh</span></label>
                                <label><input type="radio" name="gt"><span>Chị</span></label>
                            </div>
                            <input type="hidden" name="gender" id="gender">
                            <div class="info-feedback col-sm-12">
                                <div class="row">
                                    <label class="col-md-4 col-xs-12">Họ tên:</label>
                                    <input class="col-md-8 col-xs-12" type="text" placeholder="Bắt buộc" name="name" required>
                                    <label class="col-md-4 col-xs-12">Số điện thoại:</label>
                                    <input class="col-md-8 col-xs-12" type="tel" placeholder="Cần thiết cho việc liên hệ sau này" name="phone">
                                    <br>
                                    <textarea class="col-xs-12" rows="5" name="comment" placeholder="Đánh giá của bạn cho sản phẩm"></textarea>
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

    <script type="text/javascript" src="source/js/cart.js"></script>
    <script type="text/javascript" src='source/js/modal.js'></script>
    <script type="text/javascript" src='source/js/index.js'></script>
    <script type="text/javascript" src='source/js/timkiemnhanh.js'></script>
    <script type="text/javascript" src='source/js/feedback.js'></script>

</body>

</html>
