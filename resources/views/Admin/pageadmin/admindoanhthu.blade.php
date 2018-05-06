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
                        <a href="{{ route('admincanhan') }}"> <i class="ti-unlock"></i>
                            <p>CÁ NHÂN</p>
                        </a>
                    </li>
                    <li>
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
                    <li class="active">
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
                        <h3 class="title_of_manager_product">QUẢN LÝ DOANH THU</h3> <small id="now_time">
                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y - H:i\p\m'); ?>
            </small> </div>
                    <div class="collapse navbar-collapse">
                        @include('Admin.pageadmin.adminnav')
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
                                                    <h4 class="title">
                                                        <input id="spdh" type="text" style="width: 100%; border: none; background: none" disabled>
                                                    </h4> 
                                                </div>
                                                    <script>
                                                            var d = new Date();
                                                            var n = d.getUTCFullYear();
                                                            $('#spdh').val('Số lượng sản phẩm bán ra, đơn hàng năm ' + n);
                                                    </script>
                                                <div class="content">
                                                    <canvas id="line-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("line-chart"), {
                                                            type: 'line'
                                                            , data: {
                                                                labels: [
                                                                            @foreach($getmonth as $month)
                                                                                "Tháng {{ $month->month }}",
                                                                            @endforeach
                                                                ]
                                                                , datasets: [{
                                                                    data: [
                                                                            @foreach($dtdh as $dh)
                                                                                {{ $dh->numbill }},
                                                                            @endforeach
                                                                        ]
                                                                    , label: "Đơn hàng"
                                                                    , borderColor: "#3e95cd"
                                                                    , fill: false
                                                                }, {
                                                                    data: [
                                                                            @foreach($dtdh as $sp)
                                                                                {{ $sp->tongsp }},
                                                                            @endforeach
                                                                        ]
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
                                                    <h4 class="title">
                                                        <input id="dt" type="text" style="width: 100%; border: none; background: none" disabled>
                                                    </h4> 
                                                    <script>
                                                            var d = new Date();
                                                            var n = d.getUTCFullYear();
                                                            $('#dt').val('Doanh thu năm ' + n);
                                                    </script>
                                                </div>
                                                <div class="content">
                                                    <canvas id="bar-chart"></canvas>
                                                    <script>
                                                        new Chart(document.getElementById("bar-chart"), {
                                                            type: 'bar'
                                                            , data: {
                                                                labels: [
                                                                            @foreach($getmonth as $month)
                                                                                "Tháng {{ $month->month }}",
                                                                            @endforeach
                                                                ]
                                                                , datasets: [{
                                                                    label: "Doanh thu (Triệu)"
                                                                    , backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#dddddd", "#eeeeee", "#FF8A80", "#F48FB1", "#BA68C8", "#B39DDB", "#90CAF9"]
                                                                    , data: [
                                                                                @foreach($dtdh as $price)
                                                                                    {{ $price->tongtien }},
                                                                                @endforeach
                                                                            ]
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