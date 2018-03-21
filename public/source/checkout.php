<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đặt Hàng</title>
    <!-- Css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!-- Css Custom -->
    <!-- <link rel="stylesheet" href="plugin/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  <link rel="stylesheet" href="plugin/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="plugin/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="plugin/rs-plugin/css/responsive.css"> -->
    <link rel="stylesheet" href="plugin/css/animate.css">
    <!-- checkout -->
    <link href='trangchu/css/index.css' rel='stylesheet' type='text/css'>
    <link href='trangchu/css/menuscroll.css' rel='stylesheet' type='text/css'>
    <link href='trangchu/css/slideshow.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="cart/cart.css">
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="trangchu/css/seach.css" />
    <script src="trangchu/js/index.js"></script>
    <link rel="stylesheet" href="css/header-footer.css" />
    <link rel="stylesheet" href="checkout/checkout.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" title="style" href="plugin/css/style.css"> </head>

<body style="" class="clearfix">
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
    <div id="header">
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
                        <li><a href="about.html"><i class="fa fa-info-circle"></i>Giới Thiệu</a></li>
                        <li data-toggle="modal" data-target="#contactModal" class="line"><a href="#"><i class="fa fa-phone"></i>Liên Hệ</a></li>
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
                    <a href="index.html" id="logo"><img src="image/logo%20main.png" width="350px"></a>
                    <div class="space60">&nbsp;</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- .container -->
        </div>
        <!-- .header-body -->
        <div class="header-bottom" id="getFixed">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo-mobile">
                        <a href="#"><img src="/image/logo%20mobile.png"></a>
                    </div>
                    <div class="div-hamburger">
                        <button class="navbar-toggler btn-humburger" type="button" aria-expanded="false" aria-label="Toggle navigation"> <span class="fa fa-bars hamburger" id="hamburger" onclick="openNav()"></span> </button>
                    </div>
                    <div class="div-menu">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-ul ">
                            <a href="#" class="menu-list navbar-home">
                                <li class="nav-item menu-li-list active hide-mobile">TRANG CHỦ</li>
                            </a>
                            <a class="menu-list" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <li class="nav-item menu-li-list hide-mobile">MENU <i class="fa fa-caret-down menu-down-icon"></i> </li>
                            </a>
                            <div class="dropdown-menu menu-drd col-lg-12" aria-labelledby="dropdownMenuLink">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Gối">Gối</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Gối">Gối</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Áo choàng - khăn choàng Áo choàng - khăn choàng">Áo choàng - khăn choàng</a> </div>
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="#" title="Mền">Mền</a> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row"> </div>
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="/image/goi.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="/image/goi.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="/image/goi.jpg"></a>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=" menu-right">
                        <form class=" search-form">
                            <input type="text" name="search" placeholder="Bạn muốn tìm gì ?">
                            <input id="search_submit" value="" type="submit"> </form>
                        <div class="clearfix"></div>
                        <div class="div-shop-cart" data-toggle="modal" data-target="#modal-cart"> <i class="fa fa-shopping-cart shop-cart"></i> </div>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
            <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a href="#">Mền</a> <a href="#">Áo Gối</a> <a href="#">Gối</a> <a href="#">Áo choàng - Khăn choàng</a> <a href="#">Mền</a> <a href="#">Mền</a> </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container-full checkout-body">
        <div class="container-fluid">
            <div class="content">
                <div class="">
                    <div id="" class="content-product-link">
                        <div class="row">
                            <p></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" id="bar-prodduct">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bgclor_checkout">
                                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Đặt hàng</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                <div class="clearfix"></div>
                <form action="#" method="post" class="beta-form-checkout">
                    <div class="row">
                        <div class=" col-lg-7">
                            <div class="full-checkout">
                                <div class="header-title">
                                    <h3 class="title_">Thông Tin Giao Hàng</h3>
                                    <hr class="hrtitle_TTGH"> </div>
                                <div class="space10">&nbsp;</div>
                                <div class="adress-checkout">
                                    <!--SHIPPING METHOD-->
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Email đặt hàng</strong></div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="col-md-12 col-xs-12">
                                            <input type="text" class="form-control form_size" name="country" value="" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Họ và tên</strong></div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form_size" name="country" value="" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Thành phố/Tỉnh</strong></div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="col-md-12">
                                            <select class="form-control form_size thanhpho" id="select">
                                                <option value="">Thành phố/Tỉnh </option>
                                                <?php
												// require("connect.php");
										   	 	include "connect.php";
												$sql = "select * from thanh_pho";
												// echo $sql;
												$query = $con->query($sql);
												$num = mysqli_num_rows($query);
												if($num > 0){
													while($row = mysqli_fetch_array($query)){
										    ?>
                                                    <option value="<?php echo $row['id']; ?>">
                                                        <?php echo $row['name']?>
                                                    </option>
                                                    <?php
										    		}
												}
										    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Quận/huyện</strong></div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="col-md-12">
                                            <select class="form-control form_size quan_huyen " id="select">
                                                <option value="0">Quận/huyện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Địa chỉ nhận hàng (Số nhà, đường)</strong>
                                            <div class="space10">&nbsp;</div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="state" class="form-control form_size" value="" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="col-md-12">
                                            <input type="text" name="phone_number" class="form-control form_size" value="" /> </div>
                                    </div>
                                    <div class="space30">&nbsp;</div>
                                    <div class="form-group">
                                        <hr /> </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h5 class="title_note"><strong>Ghi chú (*):</strong></h5>
                                            <!-- <div class="space10">&nbsp;</div> -->
                                            <h7 class="text_note"><strong>(*)  Vui lòng kiểm tra lại thông tin chính xác để chúng tôi có thể gửi hàng đến đúng địa chỉ của bạn.</strong></h7>
                                            <div class="space10">&nbsp;</div>
                                            <h7 class="text_note"><strong>(*)  Phí giao vận chuyển tuỳ theo nơi bạn sống.</strong></h7>
                                        </div>
                                    </div>
                                    <!--SHIPPING METHOD END-->
                                </div>
                            </div>
                            <div class="space10">&nbsp;</div>
                        </div>
                        <div class="col-lg-5">
                            <div class="full-checkout">
                                <div class="header-title-cart">
                                    <h5 class="title_">Thông tin đơn hàng (3 sản phẩm)</h5>
                                    <hr class="hrtitle_GH"> </div>
                                <div class="space10">&nbsp;</div>
                                <div class="body-cart">
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div id="overflowTest-checkout">
                                                <div class="body-cart-content-checkout">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-3"> <img class="rounded" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                            <div class="col-sm-5 col-xs-5 span_content_body">
                                                                <div class="col-xs-12 "><strong>Sản phẩm</strong></div>
                                                                <div class="col-xs-12 span_content_body">
                                                                    <h7>Số lượng: <span>1</span></h7>
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    <h7>Kích thước: <span>M</span></h7>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 col-xs-3 text-right ">
                                                                <p><span>25000</span>đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <hr class="hr_sp" /> </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-3"> <img class="rounded" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                            <div class="col-sm-5 col-xs-5 span_content_body">
                                                                <div class="col-xs-12 "><strong>Sản phẩm</strong></div>
                                                                <div class="col-xs-12 span_content_body">
                                                                    <h7>Số lượng: <span>1</span></h7>
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    <h7>Kích thước: <span>M</span></h7>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 col-xs-3 text-right ">
                                                                <p><span>25000</span>đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <hr class="hr_sp" /> </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-3"> <img class="img-responsive" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                            <div class="col-sm-5 col-xs-5 span_content_body">
                                                                <div class="col-xs-12"><strong>Sản phẩm</strong></div>
                                                                <div class="col-xs-12">
                                                                    <h7>Số lượng: <span>1</span></h7>
                                                                </div>
                                                                <div class="col-xs-12 ">
                                                                    <h7>Kích thước: <span>M</span></h7>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 col-xs-3 text-right">
                                                                <p><span>25000</span>đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- body-cart-content-checkout -->
                                            </div>
                                            <div class="space20">&nbsp;</div>
                                            <div class="">
                                                <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                    <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_cart">Chỉnh sửa giỏ hàng </button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <hr class="hrtitle_GH" /> </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-5"> <strong><b class="lbl_TongTien">Tổng Tiền</b></strong> </div>
                                                    <div class="col-md-6">
                                                        <div class="pull-right span_content">
                                                            <p><span>25000</span>đ</p>
                                                        </div>
                                                        <br> </div>
                                                </div>
                                            </div>
                                            <div class="space30">&nbsp;</div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                    <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_dathang">Đặt hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- panel-info -->
                                </div>
                                <!-- body-cart -->
                            </div>
                            <!--full checkout-->
                        </div>
                        <!-- col-lg-5 -->
                    </div>
                    <!-- rowfull -->
                </form>
            </div>
            <!--content-->
        </div>
        <!--container f-->
    </div>
    <br>
    <div id="footer" class="color-div">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 ft_pc">
                    <div class="address-office">
                        <div class="info-address">
                            <h4 class="text_strong"> ĐỊA CHỈ CỬA HÀNG</h4>
                            <ul>
                                <li><a target="_blank" href="https://www.google.com/maps?ll=10.047031,105.762337&z=17&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=15188758633380222862"><i class="fa fa-map-marker"></i>118E Mậu Thân, Q. Ninh Kiều, Tp. Cần Thơ</a> </li>
                                <li id="cpr"> Copyright © 2018 HTN Baby Love </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ft_pc">
                    <div class="address-office">
                        <div class="info-address">
                            <h4 class="text_strong"> HỖ TRỢ KHÁCH HÀNG</h4>
                            <p><span class="text_strong_red">Hotline: 02923895554</span></p>
                            <p>Di động: 0939058056</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ft_pc">
                    <div class="address-office">
                        <div class="info-address">
                            <h4 class="text_strong"> VỀ CHÚNG TÔI</h4>
                            <ul>
                                <li><a href="about.html">Giới thiệu</a></li>
                                <li><a href="terms-of-use.html">Điều khoản sử dụng</a></li>
                                <li><a href="privacy-policy.html">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 ft_mb">
                    <div class="container-fluid col-sm-12 info_mb" style="width: 80%;">
                        <ul class="info_mb1">
                            <li><a href=""><i class="fa fa-map-marker"></i> 132 Ba Tháng 2, Ninh Kiều, Cần Thơ</a></li>
                            <li><a href=""><i class="fa fa-mobile"></i> 09191 919 9191</a></li>
                        </ul>
                        <ul class="info_mb2">
                            <li><a href="#"><i class="fa fa-info-circle"></i> Giới Thiệu |</a></li>
                            <li class="line"><a href="#"><i class="fa fa-phone"></i> Liên Hệ |</a></li>
                            <li><a href="#"><i class="fa fa-question-circle"></i> Hỗ Trợ</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <p class="pull-center" style="text-align: center;">Privacy policy. (&copy;) 2018 WeShop
                        <br/> Laravel Team 2018</p>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!--
   <div class="menuscroll" style="float: right;">
    <button class="btn btn-bag" style="display: inline;" data-toggle="modal" data-target="#modal-cart"><i class="fa fa-shopping-cart"></i><span class="badge">1</span></button> <a class="btn btn-up btn-top" href="javascript:void(0);" style="display: inline;"><i class="fa fa-angle-up" style="margin-left:-2px; color: fff !important;"></i></a> </div>
-->
    <script type="text/javascript">
        $(".thanhpho").change(function () {
            var id = $(".thanhpho").val();
            $.post("data.php", {
                id: id
            }, function (data) {
                $(".quan_huyen").html(data);
            });
        });
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                }
                else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });
            jQuery('.back-to-top').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        });
    </script>
    <script type="text/javascript" src="cart/cart.js"></script>
    <script type="text/javascript" src='trangchu/js/timkiemnhanh.js'></script>
    <script type="text/javascript" src='trangchu/js/modal.js'></script>
    <script type="text/javascript" src='trangchu/js/index.js'></script>
</body>

</html>