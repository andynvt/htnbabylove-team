<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
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

    {{-- alert --}}
    <link href="source/css/iao-alert.css" rel="stylesheet" type="text/css">
    <!--    -->

    <link href="source/css/about.css" rel="stylesheet" />
    <link href="source/css/private-policy.css" rel="stylesheet" />
    <link href="source/css/terms-of-use.css" rel="stylesheet" />
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
@if (session('del-cart'))
    <body onload="alert_test()"></body>
@elseif (session('add-cart')) 
    <body onload="alert_test()"></body>
@elseif (session('dathang'))
    <body onload="alert_test()"></body>
@elseif (session('danhgia'))
    <body onload="alert_test()"></body>
@elseif (session('lienhe'))
    <body onload="alert_test()"></body>
@endif
    {{-- Modal liên hệ --}}
    <div class="modal fade cont-modal" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title contact-title">Liên hệ với chúng tôi</h5>
                    <button type="button" class="close contact-x-close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <h6 class="contact-head">1. Thông tin liên hệ</h6>
                    <div class="about-p-content">
                        <ul class="contact-list">
                            <li><i class="fa fa-phone-square contact-icon"></i>&nbsp;&nbsp;&nbsp;<a href="tel: 02923895554"><b class="contact-b">02923895554</b></a> hoặc <a href="tel: 0939058056 "><b class="contact-b">0939058056</b></a></li>
                            <li><i class="fa fa-envelope contact-icon-m"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:nguyenkimhan2013@gmail.com"><b class="contact-b">nguyenkimhan2013@gmail.com</b></a></li>
                            <li><i class="fa fa-location-arrow contact-icon"></i>&nbsp;&nbsp;&nbsp;<a target="_blank" class="contact-b" href="https://www.google.com/maps/place/10%C2%B002'49.5%22N+105%C2%B045'46.1%22E/@10.0470926,105.7617037,18z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d10.04709!4d105.762798?hl=vi-VN">118E Mậu Thân, Quận Ninh Kiều, Tp. Cần Thơ</a></li>
                        </ul>
                    </div>
                    <h6 class="contact-head">2. Để lại lời nhắn</h6>
                    <form action="{{ route('lienhe') }}" method="post" id="contactForm">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form"><span>Tên</span></div>
                                    <input class="form-control" type="text" name="name" placeholder="Tên của bạn" required autofocus> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form"><span>Email</span></div>
                                    <input class="form-control" name="email" placeholder="Email" type="text" required /> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <div class="input-group">
                                    <div class="input-group-addon contact-title-form"><span>Tiêu đề</span></div>
                                    <input class="form-control" name="subject" placeholder="Tiêu đề" type="text" required /> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 contact-input">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Nội dung lời nhắn..." rows="5" name="comment" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn contact-btn mr-auto" value="Gửi đi" />
                            <input type="reset" class="btn contact-btn mr-auto" onclick="contactDeleteForm()" value="Xoá trắng" />
                            <button type="button" class="btn contact-btn" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>
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
    
    
    <script>
        function alert_test() {
            $.iaoAlert({
                    @if(session('del-cart'))
                        msg: "{{session('del-cart')}}",
                        type: "error",
                        mode: "dark",
                    @elseif(session('add-cart'))
                    msg: "{{session('add-cart')}}",
                    type: "success",
                    mode: "dark",
                    @elseif(session('dathang'))
                    msg: "{{session('dathang')}}",
                    type: "success",
                    mode: "dark",
                    @elseif(session('danhgia'))
                    msg: "{{session('danhgia')}}",
                    type: "success",
                    mode: "dark",
                    @elseif(session('lienhe'))
                    msg: "{{session('lienhe')}}",
                    type: "success",
                    mode: "dark",
                    @endif
            })
        };
    </script>
    <script type="text/javascript" src="source/js/iao-alert.jquery.js"></script>
    <script type="text/javascript" src="source/js/cart.js"></script>
    <script type="text/javascript" src='source/js/modal.js'></script>
    <script type="text/javascript" src='source/js/index.js'></script>
    <script type="text/javascript" src='source/js/timkiemnhanh.js'></script>
    <script type="text/javascript" src='source/js/feedback.js'></script>

</body>

</html>
