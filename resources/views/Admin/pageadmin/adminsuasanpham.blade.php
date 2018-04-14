<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>HOÀNG THỦY NGUYÊN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--Frame link - DON'T DELETE {-->

    <!-- Animation library for notifications   -->
    <link href="source/ADMIN/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="source/ADMIN/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="source/ADMIN/assets/css/themify-icons.css" rel="stylesheet">
    <link href="source/ADMIN/assets/css/tabs_table_reset.css" rel="stylesheet">

    <!--}-->

    <link href="source/ADMIN/css/reset_css.css" rel="stylesheet">
    <link href='source/ADMIN/css/add_product.css' rel='stylesheet'>
    <link href="source/ADMIN/css/imgcolor-admin.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
            WeShop
        </a> </div>
                <ul class="nav">
                    <li>
                        <a href="{{ route('admincanhan') }}"> <i class="ti-unlock"></i>
                            <p>CÁ NHÂN</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('adminsanpham') }}">
                            <i class="ti-package"></i>
                            <p>SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminloaisanpham') }}">
                            <i class="glyphicon glyphicon-th-large"></i>
                            <p>LOẠI SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admindonhang') }}">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Quản lý đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('adminkhachhang') }}">
                            <i class="ti-user"></i>
                            <p>Quản lý khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admindoanhthu') }}">
                            <i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admindanhgia') }}">
                            <i class="ti-comment-alt"></i>
                            <p>Quản lý đánh giá</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar bar1"></span> <span class="icon-bar bar2"></span> <span class="icon-bar bar3"></span> </button>
                        <h3 class="title_of_manager_product">THÊM SẢN PHẨM</h3> <small id="now_time">
                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
            </small> </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-globe"></i>
                                    <p>Thông Báo</p> <span class="badge" style="background-color:#FF4066">1</span> </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-bell"></i>
                                    <p>Admin</p> <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Cá Nhân</a></li>
                                    <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>Cài Đặt</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="space10">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <!--                                Phan modal them san pham-->
                                <div class="container-fluid">
                                    <form class="form-horizontal" action="/action_page.php" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="ten">Tên:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="ten" placeholder="Nhập tên" name="ten"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="maloai">Loại sản phẩm:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control w50" name="loaisanpham">
                                                    <option>Gối</option>
                                                    <option>Mền</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="giagoc">Giá gốc:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="giagoc" placeholder="Nhập giá gốc" name="giagoc"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="magiamgia">Mã giảm giá:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control w50" id="magiamgia" placeholder="Nhập mã giảm giá" name="magiamgia"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="soluong">Số lượng:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control w50" id="soluong" placeholder="Nhập số lượng" name="soluong" min="1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="mausac">Màu sắc:</label>

                                            <div class="khung-mau col-sm-4">
                                                <div class="khungchuamau w50">
                                                    <div class="them-mau btn btn-default">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                    <div class="select_color testcolor">
                                                        <input type="color" name="color1" style="width:25px;height:25px;">
                                                        <input type="color" name="color2" style="width:25px;height:25px;">
                                                        <br>
                                                        <button class="check" type="color" style="background:none;border-radius:50%;"><i class="fa fa-check" style="color:#68b3c8"></i></button>
                                                    </div>
                                                </div>
                                                <div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple>
                                                    <span><i class="fa fa-close"></i></span>
                                                </div>
                                            </div>

                                            <script>
                                                $(".them-mau").on("click", function() {
                                                    $(this).next(".testcolor").css("display", "block");
                                                });
                                                var i = 1;
                                                var removecolor = [];

                                                $('.check').on('click', function() {
                                                    if (i == 1) {
                                                        $(".demo-color").css("display", "inline-block");
                                                        color1 = $('.select_color input[name="color1"]').val();
                                                        color2 = $('.select_color input[name="color2"]').val();
                                                        string = 'repeating-linear-gradient';
                                                        $("#demo-color1").css('background', '' + string + '(' + color1 + ',' + color1 + ' 10%,' + color2 + ' 10%,' + color2 + ' 20%)');

                                                        $(this).parent(".testcolor").css("display", "none");
                                                        removecolor.push("demo-color1");



                                                        $('#demo-color1').on('click', function() {
                                                            $(this).remove();
                                                            var deleteE = "demo-color1";

                                                            var demoten = removecolor.indexOf(deleteE);


                                                            if (demoten != -1) {
                                                                removecolor.splice(demoten, 1);
                                                            }

                                                            if (removecolor == "") {
                                                                i = 1;
                                                                $(".khung-mau").append('<div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple><span><i class="fa fa-close"></i></span></div>');
                                                            }
                                                        });

                                                    } else {
                                                        var id = $("#demo-color" + (i - 1)).clone();
                                                        id.attr("id", "demo-color" + i);
                                                        $(".khung-mau").append(id);

                                                        color1 = $('.select_color input[name="color1"]').val();
                                                        color2 = $('.select_color input[name="color2"]').val();
                                                        string = 'repeating-linear-gradient';
                                                        id.css('background', '' + string + '(' + color1 + ',' + color1 + ' 10%,' + color2 + ' 10%,' + color2 + ' 20%)');

                                                        $(this).parent(".testcolor").css("display", "none");

                                                        var demoid = id.attr('id');
                                                        removecolor.push(demoid);


                                                        id.on('click', function() {
                                                            var deleteElmt = demoid;
                                                            var demoname = removecolor.indexOf(deleteElmt);

                                                            id.remove();
                                                            if (demoname != -1) {
                                                                removecolor.splice(demoname, 1);
                                                            }
                                                            if (removecolor == "") {
                                                                i = 1;
                                                                $(".khung-mau").append('<div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple><span><i class="fa fa-close"></i></span></div>');
                                                            }
                                                        });
                                                    }
                                                    i++;
                                                });
                                            </script>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="hinhanh">hình ảnh:</label>
                                            <div class="col-sm-8">
                                                <div class="box-upload">
                                                    <div class="themhinh">
                                                        <button class="btn btn-default dehinh" style="cursor: pointer">
                                                           <i class="fa fa-plus"></i>
                                                           <input type="file" name="hinh[]" multiple>
                                                       </button>
                                                    </div>
                                                </div>
                                                <p style="color: #9A9A9A;">(*) Trỏ chuột vào dấu cộng để xem tên các ảnh đã chọn</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="thongtincoban">Thông tin cơ bản:</label>
                                            <div class="col-sm-8">
                                                <textarea type="text" class="form-control w50" id="thongtincoban" placeholder="Nhập thông tin cơ bản" name="thongtincoban"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-8">
                                                <button type="button" class="btn btn-light btn-magrin2"><a href="product.php">Hủy</a></button>
                                                <button type="submit" class="btn btn-primary btn-magrin btn-submit">Lưu lại</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--                           ket thuc phan modal them san pham-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Phan popup madal cua xem chi tiet -->
    <div class="modal fade " id="1" tabindex="-1" role="dialog">
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
                                        <div class="containeroverlay"> <img src="plugin/images/portfolio/2col/1.jpg" alt="Thumbnail Image 1" class="img-responsive"> </div>
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
                                        <!--   <div class="space30">&nbsp;</div>-->
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

</html>
