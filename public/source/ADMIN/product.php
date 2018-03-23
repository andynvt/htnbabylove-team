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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
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
    <link href="kn_css/reset_css.css" rel="stylesheet">
    <link href="assets/css/tabs_table_reset.css" rel="stylesheet">
    <link href='trangchu/css/slideshow.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css_phi/search.css" /> </head>

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
                    <li class="active">
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
                        <h3 class="title_of_manager_product">QUẢN LÝ SẢN PHẨM</h3> <small id="now_time">
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
            <div class="container-fluid">
                <div class="space10">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="add_new_product"> <a href="add_product.php" class="btn btn-primary" id="btn_add_product">Thêm sản phẩm mới</a> </div>
                                    </div>
                                    <div class="col-md-1">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div id="wrap">
                                            <form action="#" autocomplete="on">
                                                <input id="search" name="search" type="text" placeholder="Search...">
                                                <input id="search_submit" value="Rechercher" type="submit"> </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- <h4 class="title">DANH SÁCH SẢN PHẨM</h4>
                                    <p class="category">Here is a subtitle for this table</p> --></div>
                            <div class="content table-responsive table-full-width st_table">
                                <script type="text/javascript">
                                    $(function () {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })
                                </script>
                                <div class="container-fluid">
                                    <table class="table table-bordered text-align">
                                        <thead>
                                            <tr class="thead_change_color">
                                                <th>Mã</th>
                                                <th>Mã Loại</th>
                                                <th>Tên</th>
                                                <th>Giá Gốc</th>
                                                <th>Giá Khuyến Mãi</th>
                                                <th>Trạng thái</th>
                                                <th>Xem chi tiết</th>
                                                <th>Sửa/Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td>1</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td>2</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                                <td>3</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                                <td>4</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                                <td>5</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a></td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a href="edit_product.php?id=121" class="btn btn-info btn-xs edit_icon" title="" data-toggle="tooltip" data-original-title="Sửa"> <span class="glyphicon glyphicon-edit"></span> </a>
                                                        <a href="delete_product.php?id=121" class="btn btn-danger btn-xs del_icon" title="" data-toggle="tooltip" data-original-title="Xóa"> <span class="glyphicon glyphicon-trash"></span> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                                <td>6</td>
                                                <td><a href="" data-toggle="modal" data-target="#1">Chi Tiết Sản Phẩm</a> </td>
                                                <td class="text-center">
                                                    <div class="">
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
</body>
<div class="modal fade " id="1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HY1062 ĐẦM XÒE TRÊN REN DƯỚI TÙNG VOAN HOA - HY1062</h4> </div>
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
<!--<script src="js/modal.js"></script>-->

</html>