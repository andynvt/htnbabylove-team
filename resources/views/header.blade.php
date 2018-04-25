
        <div class="header-top">
            <div class="container-full">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline header-top-row">
                        <li><a target="_blank" href="https://www.google.com/maps?ll=10.047031,105.762337&z=17&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=15188758633380222862"><i class="fa fa-map-marker"></i>118E Mậu Thân, Q. Ninh Kiều, Tp. Cần Thơ</a></li>
                        <li><a href="tel:02923895554"><i class="fa fa-mobile"></i> 0292 389 5554</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right header-top-right">
                    <ul class="top-details menu-beta l-inline header-top-row">
                        <li><a href="{{ route('gioithieu') }}"><i class="fa fa-info-circle"></i>Giới Thiệu</a></li>
                        <li style="cursor: pointer;" data-toggle="modal" data-target="#contactModal" class="line"><a><i class="fa fa-phone"></i>Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- .container -->
        </div>
        <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-center">
                    <div class="space60">&nbsp;</div>
                    <a href="{{ route('trang-chu') }}" id="logo"><img src="storage/product/logo%20main.png" width="350px"></a>
                    <div class="space60">&nbsp;</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- .container -->
        </div>
        <!-- .header-body -->
        <div class="header-bottom" id="getFixed">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo-mobile">
                        <a href="{{ route('trang-chu') }}"><img src="storage/product/logo%20mobile.png"></a>
                    </div>
                    <div class="div-hamburger">
                        <button class="navbar-toggler btn-humburger" type="button" aria-expanded="false" aria-label="Toggle navigation"> <span class="fa fa-bars hamburger" id="hamburger" onclick="openNav()"></span> </button>
                    </div>
                    <div class="div-menu">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-ul ">
                            <a href="{{ route('trang-chu') }}" class="menu-list navbar-home">
                                <li class="nav-item menu-li-list active hide-mobile">TRANG CHỦ</li>
                            </a>
                            <a class="menu-list" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <li class="nav-item menu-li-list hide-mobile">MENU <i class="fa fa-caret-down menu-down-icon"></i> </li>
                            </a>
                            <div class="dropdown-menu menu-drd col-lg-12" aria-labelledby="dropdownMenuLink">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                        @foreach($loai_sanpham as $l_sp)
                                            <div class="col-lg-6 div-item"> <a class="dropdown-item item-drd" href="{{ route('loaisanpham',$l_sp->id) }}" title="{{$l_sp->type_name}}">{{$l_sp->type_name}}</a> </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row"> </div>
                                        <div id="carouselExampleControls slider-index" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="storage/product/product_1.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="storage/product/goi.jpg"></a>
                                                </div>
                                                <div class="carousel-item">
                                                    <a href="#"><img class="d-block img-fluid img-slide" src="storage/product/goi.jpg"></a>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev"  href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=" menu-right">
                        <form class=" search-form" action="{{route('timkiem')}}">
                            <input type="text" name="search" placeholder="Bạn muốn tìm gì ?">
                            <input id="search_submit" value="" type="submit"> </form>
                        <div class="clearfix"></div>
                        <div class="div-shop-cart" data-toggle="modal" data-target="#modal-cart">
                            <i class="fa fa-shopping-cart shop-cart"></i>
                            <span id="number-cart">5</span>
                            <style>
                                #slider-index a img{
                                    margin: 0 auto;
                                    display: block;
                                    width: 60%;
                                }
                                #number-cart {
                                    position: absolute;
                                    top: -5px;
                                    right: -10px;
                                    color: white;
                                    background: #FF3E8D;
                                    border: 1px solid #FF3E8D;
                                    border-radius: 100%;
                                    padding: 0 5px;
                                    font-size: 13px;
                                    font-weight: 600;
                                }

                            </style>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
            <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
                @foreach($loai_sanpham as $l_sp)
                <a href="{{ route('loaisanpham',$l_sp->id) }}">{{$l_sp->type_name}}</a>  
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>