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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--    -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.css" rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <!--    -->

    <link href="source/css/style.css" rel="stylesheet" title="style" >
    <link href='source/css/index.css' rel='stylesheet' type='text/css'>
    <link href='source/css/menuscroll.css' rel='stylesheet' type='text/css'>
    <link href='source/css/slideshow.css' rel='stylesheet' type='text/css'>
    <link href="source/cart/cart.css" rel="stylesheet" >
    <link href="source/css/contact.css" rel="stylesheet"  />
    <link href="source/css/seach.css" rel="stylesheet"  />
    <link href="source/css/responsive_footer2.css" rel="stylesheet"  />
    <link href="source/css/header-footer.css" rel="stylesheet"  /> 

</head>
<body>
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
                    <a href="index.html" id="logo"><img src="source/image/logo%20main.png" width="350px"></a>
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
                        <a href="#"><img src="source/image/logo%20mobile.png"></a>
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
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="source/image/goi.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="source/image/goi.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="source/image/goi.jpg"></a>
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
                        <div class="div-shop-cart" data-toggle="modal" data-target="#modal-cart"> 
                            <i class="fa fa-shopping-cart shop-cart"></i> 
                            <span id="number-cart">5</span>
                            <style>
                                #number-cart{
                                    position: absolute; 
                                    top: -5px; 
                                    right: -10px; 
                                    color: white;
                                    background: #FF3E8D;
                                    border: 1px solid #FF3E8D;
                                    border-radius: 100%;
                                    padding: 0 5px;
                                    font-size: 13px;
                                    font-weight: 600;
                                }
                            </style>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
            <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a href="#">Mền</a> <a href="#">Áo Gối</a> <a href="#">Gối</a> <a href="#">Áo choàng - Khăn choàng</a> <a href="#">Mền</a> <a href="#">Mền</a> </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- .header-bottom -->
    <!-- .header-bottom -->
    <div class="space10">&nbsp;</div>
    <!-- #header -->

    <!-- Content -->
    <div id="content-body">
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
                            <div id="navbar">
                                <div class="well1">
                                    <h5 class="text-left">Menu</h5>
                                    <div class="row">
                                        <div class="col-sm col-md">
                                            <div class="panel-group" id="accordion">
                                                <hr>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#">Mền</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#">Gối</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#">Khăn choàng-Áo choàng</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#">Combo (nệm+ôm+nằm)</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <hr> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Menu -->
                                <div class="well">
                                    <h5 class="text-left">Tìm Kiếm Sản Phẩm</h5>
                                    <form class="form-horizontal" action="#" method="">
                                        <div class="form-group">
                                            <label for="priceto" class="control-label">Tên sản phẩm:</label>
                                            <input type="text" class="form-control" id="priceto" name="tensp" aria-describedby="basic-addon1"> </div>
                                        <div class="form-group">
                                            <label for="location1" class="control-label">Loại sản phẩm:</label>
                                            <select class="form-control" name="" id="location1">
                                                <option value="#">Chọn loại sản phẩm</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="priceto" class="control-label">Trạng thái:</label>
                                            <br>
                                            <div class="space10">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai sale">Sale</div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai new">New</div>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#">
                                                        <div class="ribbon-trangthai hot">Hot</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6"> <a href="#" class="search-price">Giá giảm dần <i class="fa fa-sort-amount-desc"></i></a> </div>
                                                <div class="col-sm-6"> <a href="#" class="search-price">Giá tăng dần <i class="fa fa-sort-amount-asc"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='row'>
                                                <div style="width: 90%; margin-left: 5%">
                                                    <label for="pricefrom" class="control-label">Giá:&nbsp;&nbsp;<b><span id="outputmin"></span> Đồng</b></label>
                                                    <div class="input-group" style="width: 90%; margin-left: 5%; top: 10px;">
                                                        <input id="pricefrom" type="text" class="span2" /> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space10">&nbsp;</div>
                                        <div class="form-group">
                                            <p class="text-center"><a href="#" class="btn btn-themvaogio" role="button">Tìm Kiếm </a></p>
                                        </div>
                                        <!-- Form tim kiem -->
                                    </form>
                                    <!-- Tim kiem -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <!-- San pham -->
                            <!-- Hang 1 -->
                            <!-- San pham khuyen mai -->
                            <div class="text-left" style="font-size: 25px; font-weight: 600"> Sản Phẩm Khuyến Mãi </div>
                            <div class="space15">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
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
                                                <a href="#"> 
                                                    <b class="text-price">
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
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Hang 2 -->
                            <!-- San pham moi -->
                            <div class="space10">&nbsp;</div>
                            <div class="text-left" style="font-size: 25px; font-weight: 600"> Sản Phẩm Mới </div>
                            <div class="space15">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 new">New</div>
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
                                                <a href="#"> 
                                                    <b class="text-price">
                                                        <span class="text-danger ">
                                                            1,000,000đ
                                                        </span>  &nbsp;
                                                    </b>
                                                    <div class="space10">&nbsp;</div>
                                                    <p class='text-right text-title'><b>HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</b>&nbsp;</p>
                                                </a>
                                                <button type="button" class="btn btn-buy btn-full button" data-toggle="modal" data-target="#1"><span>Mua Ngay </span></button>
                                                <button type="button" class="btn btn-themvaogio btn-full ">Thêm vào giỏ</button>
                                                <hr> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                                
                            </div>
                            <!-- Hang 3 -->
                            <!-- San pham -->
                            <div class="space10">&nbsp;</div>
                            <div class="text-left" style="font-size: 25px; font-weight: 600">Sản Phẩm Hot</div>
                            <div class="space15">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon1 hot">Hot</div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #content -->

    <div class="menuscroll" style="float: right;">
        <a class="btn btn-up btn-top" href="javascript:void(0);" style="display: inline;"><i class="fa fa-angle-up" style="margin-left:-2px; color: fff !important;"></i></a> 
    </div>
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
    <script type="text/javascript" src="source/cart/cart.js"></script>
    <script type="text/javascript" src='source/js/modal.js'></script>
    <script type="text/javascript" src='source/js/index.js'></script>
    <script type="text/javascript" src='source/js/timkiemnhanh.js'></script>
    <script type="text/javascript" src="source/js/index.js"></script>

</body>

</html>
