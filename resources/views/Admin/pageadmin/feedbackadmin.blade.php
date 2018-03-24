@extends('Admin.master')

@section('contentadmin')
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
                    <li>
                        <a href="quanlydoanhthu.php">
                            <i class="ti-money"></i>
                            <p>Quản lý doanh thu</p>
                        </a>
                    </li>
                    <li class="active">
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
                        <h3 class="title_of_manager_product">QUẢN LÝ ĐÁNH GIÁ</h3> <small id="now_time">
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
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
                                            <div class="feedback-qty">
                                                <div class="qty-feedback">12</div>
                                            </div>
                                            <p>Item's Name</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 align-feedback-item">
                                    <div class="feedback-content-item">
                                        <a href="feedback-admin-detail.php"><img src="source/ADMIN/image/portfolio/4.jpg" alt="Thumbnail Image 1" class="img-responsive">
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
@endsection