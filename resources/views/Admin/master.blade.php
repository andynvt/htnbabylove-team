<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="source/image/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>HOÀNG THỦY NGUYÊN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!--Frame link - DON'T DELETE {-->

    <!-- Animation library for notifications   -->
    <link href="source/ADMIN/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="source/ADMIN/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="source/ADMIN/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="source/ADMIN/assets/css/themify-icons.css" rel="stylesheet">
    <link href="source/ADMIN/assets/css/tabs_table_reset.css" rel="stylesheet">
    <!--}-->

    <link rel="stylesheet" href="source/ADMIN/css/reset_css.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback-admin.css">
    <link rel="stylesheet" href="source/ADMIN/css/cart.css">
    <link rel="stylesheet" href="source/ADMIN/css/color.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback.css">
    {{-- <link rel="stylesheet" href="source/ADMIN/css/search.css">  --}}
    {{-- <link rel="stylesheet" href="source/ADMIN/css/slideshow.css"> --}}
    <link rel="stylesheet" href="source/ADMIN/css/trangthai.css">
    <link rel="stylesheet" href="source/ADMIN/css/add_product.css">
    <link rel="stylesheet" href="source/ADMIN/css/util.css">
    <link rel="stylesheet" href="source/ADMIN/css/login.css">
</head>

<body>

    <div id="content-admin">
        @yield('contentadmin')
    </div>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>


    <div class="modal fade " id="modal-admin-product-detail" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</h4>
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
                                        <div class="containeroverlay"> <img src="source/ADMIN/image/portfolio/2col/1.jpg" alt="Thumbnail Image 1" class="img-responsive"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-offset-0">
                                <div class="space10">&nbsp;</div>
                                <p class="text-danger text-price-model"><b>&nbsp;1,000,000đ</b></p>
                                <div class="container-filud">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <p class=" text-price"><b>&nbsp;Số lượng :  </b>&nbsp; 1</p>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
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
                                                        <input type="hidden" name="_color" value=""> </ul>
                                                </div>
                                            </div>
                                            <div class="space10">&nbsp;</div>
                                        </div>
                                        <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                        <div class="col-lg-12 ">Balo Thời Trang PRAZA được thiết kế tinh tế, hiện đại mang phong cách Hàn Quốc vừa thời trang vừa gọn nhẹ lại vừa năng động lịch lãm cho các hoạt động ngoài trời hay đi gặp đối tác tự tin mà vẫn lịch sự thời trang. Gam màu của Balo PRAZA mang lại cho bạn nét thanh lịch, trẻ trung đầy sức hút. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>

</body>

<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="source/ADMIN/assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="source/ADMIN/assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="source/ADMIN/assets/js/bootstrap-notify.js"></script>
<script src="source/ADMIN/vendor/animsition/js/animsition.min.js"></script>

<script src="source/ADMIN/js/main.js" type="text/javascript"></script>
<script src="source/ADMIN/js/cart.js" type="text/javascript"></script>
<script src="source/ADMIN/js/modal.js" type="text/javascript"></script>
<script src="source/ADMIN/js/login.js" type="text/javascript"></script>


</html>

