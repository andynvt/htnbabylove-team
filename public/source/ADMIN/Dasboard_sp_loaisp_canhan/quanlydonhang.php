<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sản Phẩm</title>
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
    <link href='trangchu/css/slideshow.css' rel='stylesheet' type='text/css'>
    <link href="kn_css/reset_css.css" rel="stylesheet">
    <link rel="stylesheet" href="css_phi/search.css">
    <link rel="stylesheet" href="css_phi/trangthai.css">
    <link rel="stylesheet" href="cart/cart.css"> </head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
            <div class="sidebar-wrapper">
                <div class="logo"> <a href="http://www.creative-tim.com" class="simple-text">
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
                    <li class="active">
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
                    <li>
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
                        <h3 class="title_of_manager_product">QUẢN LÝ ĐƠN HÀNG</h3>
                        <small id="now_time">
                            <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
                        </small>
                    </div>
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
            <div class="container-fluid">
                <div class="space10">&nbsp;</div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="panel panel-default ">
                            <div class="panel-heading ">
                                <strong>
                                    <span class="glyphicon glyphicon-th "></span>
                                    <span>Chú thích</span>
                                </strong>
                            </div>
                            <div class="container-fluid">
                                <div class="space10">&nbsp;</div>
                                <table class="table table-bordered text-align">
                                    <thead>
                                        <tr class="thead_change_color">
                                            <th>Màu sắc</th>
                                            <th>Trangh thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="danggui">1</td>
                                            <td>Đang gữi</td>
                                        </tr>
                                        <tr>
                                            <td class="hoantat">2</td>
                                            <td>Hoàn thành</td>
                                        </tr>
                                        <tr>
                                            <td class="bihuy">3</td>
                                            <td>Bị huỷ</td>
                                        </tr>
                                        <tr>
                                            <td class="choxacnhan">4</td>
                                            <td>Chờ xác nhận</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <!-- <h4 class="title">DANH SÁCH SẢN PHẨM</h4>
                                    <p class="category">Here is a subtitle for this table</p> -->
                                <div class="feedback-item-name">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Danh sách đơn hàng</p>
                                        </div>
                                        <div class="col-md-1">
                                            <p></p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div id="wrap">
                                                <form action="#" autocomplete="on">
                                                    <input id="search" name="search" type="text" placeholder="Search...">
                                                    <input id="search_submit" value="Rechercher" type="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width st_table">
                                <script type="text/javascript">
                                    $(function() {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })

                                </script>
                                <div class="container-fluid">
                                    <table class="table table-bordered text-align">
                                        <thead>
                                            <tr class="thead_change_color">
                                                <th>Mã hoá đơn</th>
                                                <th>Khách hàng</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Địa chỉ</th>
                                                <th>Trạng thái</th>
                                                <th>Xem chi tiết</th>
                                                <th>Sửa/Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="danggui">
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td>Đang gữi</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết đơn hàng</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hoantat">
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td>Hoàn thành</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết đơn hàng</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="bihuy">
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                                <td>Bi huy</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết đơn hàng</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="choxacnhan">
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                                <td>Chờ xác nhận</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết đơn hàng</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Phan popup madal cua xem chi tiet -->
    <!-- Phan popup madal cua xem chi tiet -->
    <form action="" method="post">
        <!-- The Modal -->
        <div class="modal fade modalcart" id="1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Đơn hàng (có 3 sản phẩm)</h4>
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
                                                    <a href="#"> <img class="img-fluid cart-img" src="plugin/images/products/2.jpg"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
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
                                                <p> 1</p>
                                            </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty">
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> </div>
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
                                                    <a href="#"> <img class="img-fluid cart-img" src="plugin/images/products/2.jpg"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
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
                                                <p> 1</p>
                                            </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty">
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> </div>
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
                                                    <a href="#"> <img class="img-fluid cart-img" src="plugin/images/products/2.jpg"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
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
                                                <p> 1</p>
                                            </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty">
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> </div>
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
                                                    <a href="#"> <img class="img-fluid cart-img" src="plugin/images/products/2.jpg"> </a>
                                                </div>
                                                <div class="col-md-9 col-9">
                                                    <div class="container-filud">
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
                                                <p> 1</p>
                                            </div>
                                            <div class="change-qty">
                                                <div class="input-group number-spinner input-change-qty">
                                                    <input type="text" name="soluong" class="form-control text-center" value="1"> </div>
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="cart-order">
                            <div class="cart-total-price col-md-4 offset-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-5 col-5"> Tổng tiền: </div>
                                    <div class="col-md-7 col-7 total-price"> 200,000 VND </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Duyệt đơn hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
<script type="text/javascript" src="cart/cart.js"></script>
<script src="assets/js/demo.js"></script>

</html>
