<!doctype html>
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
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <!-- js bt -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/tabs_table_reset.css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<link rel="stylesheet" href="css_phi/feedback-admin.css">
<!--<link rel="stylesheet" href="css_phi/search.css">-->

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
            <div class="sidebar-wrapper">
                <div class="logo"> <a href="#" class="simple-text">
                    Hoàng Thủy Nguyên
                </a> </div>
                <ul class="nav">
                    <li>
                        <a href="personal.php"> <i class="ti-unlock"></i>
                            <p>CÁ NHÂN</p>
                        </a>
                    </li>
                    <li>
                        <a href="product.php">
                            <!-- <i class="ti-view-list-alt"></i> --><i class="ti-package"></i>
                            <p>SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="catagory_product.php">
                            <!-- <i class="ti-text"></i> --><i class="glyphicon glyphicon-th-large"></i>
                            <p>LOẠI SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlydonhang.php">
                            <!-- <i class="ti-text"></i> --><i class="ti-shopping-cart-full"></i>
                            <p>Quản lý đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlykhachang.php">
                            <!-- <i class="ti-text"></i> --><i class="ti-user"></i>
                            <p>Quản lý khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlydoanhthu.php">
                            <!-- <i class="ti-text"></i> --><i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="feedback-admin.php">
                            <!-- <i class="ti-text"></i> --><i class="ti-comment-alt"></i>
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
                        <h3 class="title_of_manager_product">QUẢN LÝ ĐÁNH GIÁ</h3> <small id="now_time">
                        <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
                    </small> </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-globe"></i>
                                    <!-- <p class="notification"></p> -->
                                    <p>Thông Báo</p> <span class="badge" style="background-color:#FF4066">1</span> </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-bell"></i>
                                    <!-- <p class="notification"></p> -->
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
            <!-- KET THUC PHAN TABLE -->
            <div class="container-fluid">
                <div class="feedback-admin">
                    <div class="feedback-typeproduct-title form-group clearfix">
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Mền">
                                <div class="feedback-typeproduct-name">
                                    <p> Mền </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Gối">
                                <div class="feedback-typeproduct-name">
                                    <p> Gối </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Khăn choàng - Áo choàng">
                                <div class="feedback-typeproduct-name">
                                    <p> Khăn choàng - Áo choàng </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Bộ">
                                <div class="feedback-typeproduct-name">
                                    <p> Bộ </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Bộ">
                                <div class="feedback-typeproduct-name">
                                    <p> Bộ </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" data-toggle="tooltip" title="Bộ">
                                <div class="feedback-typeproduct-name">
                                    <p> Bộ </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="feedback-typeproduct-content clearfix">
                        <div class="col-md-12">
                            <div class="feedback-search clearfix">
                                <div class="col-md-12 div-form-search-feedback">
                                    <form class="form-search-feedback" action="#" autocomplete="on">
                                        <input id="search" name="search" type="text" placeholder="Search...">
                                        <input id="search_submit" value="" type="submit"> </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="feedback-typeproduct-item clearfix">
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="plugin/images/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
<!-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>