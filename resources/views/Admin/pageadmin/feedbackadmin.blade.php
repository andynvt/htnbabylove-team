@extends('Admin.master')

@section('contentadmin')
<div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            @include('Admin.pageadmin.menu')
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
                        @include('Admin.pageadmin.nav')
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