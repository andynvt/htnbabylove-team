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
    <link rel='stylesheet' href='css/slideshow.css'>
    <link rel="stylesheet" href="css/reset_css.css">
    <link rel="stylesheet" href="css/feedback-admin.css">
    <link rel="stylesheet" href="css/search.css"> </head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo"> <a href="http://www.creative-tim.com" class="simple-text">
            hoàng thủy nguyên
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
                    <li>
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
                    <li class="active">
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
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar bar1"></span> <span class="icon-bar bar2"></span> <span class="icon-bar bar3"></span> </button>
                        <h3 class="title_of_manager_product">QUẢN LÝ DOANH THU</h3> <small id="now_time">
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
                        <div class="space10">&nbsp;</div>
                        <div class="card">
                            <div class="content table-responsive table-full-width st_table">
                                <script type="text/javascript">
                                    $(function() {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })

                                </script>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title">Số lượng sản phẩm bán ra, đơn hàng theo năm
                                                        <select style="border: none">
                                            <option>2016</option><option>2017</option><option>2018</option>
                                        </select>
                                                    </h4>
                                                </div>
                                                <div class="content">
                                                    <canvas id="line-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("line-chart"), {
                                                            type: 'line',
                                                            data: {
                                                                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                                                                datasets: [{
                                                                    data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478, 768, 240],
                                                                    label: "Đơn hàng",
                                                                    borderColor: "#3e95cd",
                                                                    fill: false
                                                                }, {
                                                                    data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267, 2040, 1024],
                                                                    label: "Sản phẩm bán ra",
                                                                    borderColor: "#8e5ea2",
                                                                    fill: false
                                                                }]
                                                            },
                                                            options: {
                                                                title: {
                                                                    display: true,
                                                                    text: 'Thống kê số lượng sản phẩm bán ra và đơn hàng',
                                                                    fontSize: 20
                                                                }
                                                            }
                                                        });

                                                    </script>
                                                    <div class="footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card ">
                                                <div class="header">
                                                    <h4 class="title">Doanh thu năm
                                                        <select style="border: none">
                                            <option>2016</option><option>2017</option><option>2018</option>
                                        </select>
                                                    </h4>
                                                </div>
                                                <div class="content">
                                                    <canvas id="bar-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("bar-chart"), {
                                                            type: 'bar',
                                                            data: {
                                                                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                                                                datasets: [{
                                                                    label: "Doanh thu (Triệu)",
                                                                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#dddddd", "#eeeeee", "#FF8A80", "#F48FB1", "#BA68C8", "#B39DDB", "#90CAF9"],
                                                                    data: [2478, 5267, 734, 784, 433, 144, 240, 360, 1024, 1366, 1200, 1568]
                                                                }]
                                                            },
                                                            options: {
                                                                legend: {
                                                                    display: false
                                                                },
                                                                title: {
                                                                    display: true,
                                                                    text: 'Thống kê doanh thu theo tháng',
                                                                    fontSize: 20
                                                                }
                                                            }
                                                        });

                                                    </script>
                                                    <div class="footer">
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
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
</body>
<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

</html>
