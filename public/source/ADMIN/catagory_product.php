<!doctype html>
<html>

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
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/tabs_table_reset.css" rel="stylesheet">

    <!--}-->

    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/trangthai.css">


    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

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
                            <i class="ti-package"></i>
                            <p>SẢN PHẨM</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="catagory_product.php">
                            <i class="glyphicon glyphicon-th-large"></i>
                            <p>LOẠI SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlydonhang.php">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Quản lý đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlykhachang.php">
                            <i class="ti-user"></i>
                            <p>Quản lý khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlydoanhthu.php">
                            <i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li>
                        <a href="feedback-admin.php">
                            <i class="ti-comment-alt"></i>
                            <p>Quản lý đánh giá</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel ">
            <nav class="navbar navbar-default ">
                <div class="container-fluid ">
                    <div class="navbar-header ">
                        <button type="button " class="navbar-toggle "> <span class="sr-only ">Toggle navigation</span> <span class="icon-bar bar1 "></span> <span class="icon-bar bar2 "></span> <span class="icon-bar bar3 "></span> </button>
                        <h3 class="title_of_manager_product ">QUẢN LÝ LOẠI SẢN PHẨM</h3> <small id="now_time ">
              <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
            </small> </div>
                    <div class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav navbar-right ">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-globe"></i>
                                    <p>Thông Báo</p> <span class="badge" style="background-color:#FF4066">1</span> </a>
                            </li>
                            <li class="dropdown ">
                                <a href="# " class="dropdown-toggle " data-toggle="dropdown "> <i class="ti-bell "></i>
                                    <p>Admin</p> <b class="caret "></b> </a>
                                <ul class="dropdown-menu ">
                                    <li><a href="# "><i class="fa fa-user " aria-hidden="true "></i>Cá Nhân</a></li>
                                    <li><a href="# "><i class="fa fa-cogs " aria-hidden="true "></i>Cài Đặt</a></li>
                                    <li><a href="# "><i class="fa fa-sign-out " aria-hidden="true "></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- KET THUC PHAN TABLE -->
            <div class="container-fluid ">
                <div class="space10">&nbsp;</div>
                <div class="row ">
                    <div class="col-lg-3 col-md-6 ">
                        <div class="panel panel-default ">
                            <div class="panel-heading "> <strong>
                <span class="glyphicon glyphicon-th "></span>
                <span>Thêm loại mới</span>
              </strong> </div>
                            <div class="panel-body ">
                                <form method="post " action="categorie.php ">
                                    <div class="form-group ">
                                        <input type="text " class="form-control " name="categorie-name " placeholder="Tên loại sản phẩm "> </div>
                                    <button type="submit " name="add_cat " class="btn btn-primary ">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="panel panel-default ">
                            <div class="panel-heading ">
                                <div class="row">
                                    <div class="col-md-8"> <strong>
                <span class="glyphicon glyphicon-th "></span>
                <span>Loại sản phẩm</span>
              </strong> </div>
                                </div>
                            </div>
                            <div class="panel-body ">
                                <div class="row">
                                    <div class="col-lg-7 col-md-8">
                                        <p>&nbsp; </p>
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                        <p> &nbsp;</p>
                                    </div>
                                    <div class="col-lg-4 col-md-3 ">
                                        <div id="wrap">
                                            <form action="#" autocomplete="on">
                                                <input id="search" name="search" type="text" placeholder="Search...">
                                                <input id="search_submit" value="Rechercher" type="submit"> </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th class="text-center " style="width: 50px; ">STT</th>
                                            <th>Tên Loại</th>
                                            <th>Mã Loại</th>
                                            <th class="text-center " style="width: 100px; ">Sửa/Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center ">1</td>
                                            <td>Điện thoại iphone</td>
                                            <td>1</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center ">2</td>
                                            <td>Laptop HP</td>
                                            <td>2</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center ">3</td>
                                            <td>Macbook Pro</td>
                                            <td>3</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center ">4</td>
                                            <td>Nokia</td>
                                            <td>4</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center ">5</td>
                                            <td>Oppo 3</td>
                                            <td>13</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center ">6</td>
                                            <td>Sony</td>
                                            <td>14</td>
                                            <td class="text-center ">
                                                <div class="btn-group ">
                                                    <a href="edit_product.php?id=121 " class="btn btn-info btn-xs edit_icon " title=" " data-toggle="tooltip " data-original-title="Sửa "> <span class="glyphicon glyphicon-edit "></span> </a>
                                                    <a href="delete_product.php?id=121 " class="btn btn-danger btn-xs del_icon " title=" " data-toggle="tooltip " data-original-title="Xóa "> <span class="glyphicon glyphicon-trash "></span> </a>
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
</body>

<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

</html>
