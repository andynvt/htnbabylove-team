@extends('Admin.master')

@section('contentadmin')
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
                        <a href="product.php"> <i class="ti-package"></i>
                            <p>SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="catagory_product.php"> <i class="glyphicon glyphicon-th-large"></i>
                            <p>LOẠI SẢN PHẨM</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlydonhang.php"> <i class="ti-shopping-cart-full"></i>
                            <p>Quản lý đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="quanlykhachang.php"> <i class="ti-user"></i>
                            <p>Quản lý khách hàng</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="quanlydoanhthu.php"> <i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li>
                        <a href="feedback-admin.php"> <i class="ti-comment-alt"></i>
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
                                    $(function () {
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
                                                    </h4> </div>
                                                <div class="content">
                                                    <canvas id="line-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("line-chart"), {
                                                            type: 'line'
                                                            , data: {
                                                                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"]
                                                                , datasets: [{
                                                                    data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478, 768, 240]
                                                                    , label: "Đơn hàng"
                                                                    , borderColor: "#3e95cd"
                                                                    , fill: false
                                                                }, {
                                                                    data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267, 2040, 1024]
                                                                    , label: "Sản phẩm bán ra"
                                                                    , borderColor: "#8e5ea2"
                                                                    , fill: false
                                                                }]
                                                            }
                                                            , options: {
                                                                title: {
                                                                    display: true
                                                                    , text: 'Thống kê số lượng sản phẩm bán ra và đơn hàng'
                                                                    , fontSize: 20
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                    <div class="footer"> </div>
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
                                                    </h4> </div>
                                                <div class="content">
                                                    <canvas id="bar-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("bar-chart"), {
                                                            type: 'bar'
                                                            , data: {
                                                                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"]
                                                                , datasets: [{
                                                                    label: "Doanh thu (Triệu)"
                                                                    , backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#dddddd", "#eeeeee", "#FF8A80", "#F48FB1", "#BA68C8", "#B39DDB", "#90CAF9"]
                                                                    , data: [2478, 5267, 734, 784, 433, 144, 240, 360, 1024, 1366, 1200, 1568]
                                                                }]
                                                            }
                                                            , options: {
                                                                legend: {
                                                                    display: false
                                                                }
                                                                , title: {
                                                                    display: true
                                                                    , text: 'Thống kê doanh thu theo tháng'
                                                                    , fontSize: 20
                                                                }
                                                            }
                                                        });
                                                    </script>
                                                    <div class="footer"> </div>
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
@endsection