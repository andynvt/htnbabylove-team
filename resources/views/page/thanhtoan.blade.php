@extends('master')
@section('content')
<?php
$con = mysqli_connect("localhost","root","","htnbabylove");
mysqli_set_charset($con, 'UTF8');

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<div class="container-full checkout-body">
        <div class="container-fluid">
            <div class="">
                <div id="" class="content-product-link">
                    <div class="row">
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="bar-prodduct">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bgclor_checkout">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Đặt hàng</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
            <div class="clearfix"></div>
            <form action="#" method="post" class="beta-form-checkout">
                <div class="row">
                    <div class=" col-lg-7">
                        <div class="full-checkout">
                            <div class="header-title">
                                <h3 class="title_">Thông Tin Giao Hàng</h3>
                                <hr class="hrtitle_TTGH"> </div>
                            <div class="space10">&nbsp;</div>
                            <div class="adress-checkout">
                                <!--SHIPPING METHOD-->
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email đặt hàng</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control form_size" name="country" value="" /> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Họ và tên</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form_size" name="country" value="" /> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Thành phố/Tỉnh</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <select class="form-control form_size thanhpho" id="select">
                                            <option value="">Thành phố/Tỉnh </option>
												<?php
												// require("connect.php");
										   	 	// include "connect.php";
												$sql = "select * from cities";
												// echo $sql;
												$query = $con->query($sql);
												$num = mysqli_num_rows($query);
												if($num > 0){
													while($row = mysqli_fetch_array($query)){
										    ?>
                                                <option value="<?php echo $row['id_city']; ?>">
                                                    <?php echo $row['name']?>
                                                </option>
                                                <?php
										    		}
												}
										    ?>
                                        </select
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Quận/huyện</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <select class="form-control form_size quan_huyen " id="select">
                                            <option value="0">Quận/huyện</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ nhận hàng (Số nhà, đường)</strong>
                                        <div class="space10">&nbsp;</div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="state" class="form-control form_size" value="" /> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <input type="text" name="phone_number" class="form-control form_size" value="" /> </div>
                                </div>
                                <div class="space30">&nbsp;</div>
                                <div class="form-group">
                                    <hr /> </div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h5 class="title_note"><strong>Ghi chú (*):</strong></h5>
                                        <!-- <div class="space10">&nbsp;</div> -->
                                        <h7 class="text_note"><strong>(*)  Vui lòng kiểm tra lại thông tin chính xác để chúng tôi có thể gửi hàng đến đúng địa chỉ của bạn.</strong></h7>
                                        <div class="space10">&nbsp;</div>
                                        <h7 class="text_note"><strong>(*)  Phí giao vận chuyển tuỳ theo nơi bạn sống.</strong></h7>
                                    </div>
                                </div>
                                <!--SHIPPING METHOD END-->
                            </div>
                        </div>
                        <div class="space10">&nbsp;</div>
                    </div>
                    <div class="col-lg-5">
                        <div class="full-checkout">
                            <div class="header-title-cart">
                                <h5 class="title_">Thông tin đơn hàng (3 sản phẩm)</h5>
                                <hr class="hrtitle_GH"> </div>
                            <div class="space10">&nbsp;</div>
                            <div class="body-cart">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div id="overflowTest-checkout">
                                            <div class="body-cart-content-checkout">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-3"> <img class="rounded" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                        <div class="col-sm-5 col-xs-5 span_content_body">
                                                            <div class="col-xs-12 "><strong>Sản phẩm</strong></div>
                                                            <div class="col-xs-12 span_content_body">
                                                                <h7>Số lượng: <span>1</span></h7>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <h7>Kích thước: <span>M</span></h7>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right ">
                                                            <p><span>25000</span>đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <hr class="hr_sp" /> </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-3"> <img class="rounded" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                        <div class="col-sm-5 col-xs-5 span_content_body">
                                                            <div class="col-xs-12 "><strong>Sản phẩm</strong></div>
                                                            <div class="col-xs-12 span_content_body">
                                                                <h7>Số lượng: <span>1</span></h7>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <h7>Kích thước: <span>M</span></h7>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right ">
                                                            <p><span>25000</span>đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <hr class="hr_sp" /> </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-3"> <img class="img-responsive" src="http://2.bp.blogspot.com/-SF88cGyLIfs/VGg1Zt5C2YI/AAAAAAAACzU/SLeejuMtmK8/s1600/B%E1%BB%99%2B%E1%BA%A3nh%2Bnh%E1%BB%AFng%2Bem%2Bb%C3%A9%2B%C4%91%C3%A1ng%2By%C3%AAu%2B11%2BBlog%2BDesigners.jpg" /> </div>
                                                        <div class="col-sm-5 col-xs-5 span_content_body">
                                                            <div class="col-xs-12"><strong>Sản phẩm</strong></div>
                                                            <div class="col-xs-12">
                                                                <h7>Số lượng: <span>1</span></h7>
                                                            </div>
                                                            <div class="col-xs-12 ">
                                                                <h7>Kích thước: <span>M</span></h7>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right">
                                                            <p><span>25000</span>đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                            <!-- body-cart-content-checkout -->
                                        </div>
                                        <div class="space20">&nbsp;</div>
                                        <div class="">
                                            <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_cart">Chỉnh sửa giỏ hàng </button>
                                            </div>
                                        </div>
                                        <div class="">
                                            <hr class="hrtitle_GH" /> </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5"> <strong><b class="lbl_TongTien">Tổng Tiền</b></strong> </div>
                                                <div class="col-md-6">
                                                    <div class="pull-right span_content">
                                                        <p><span>25000</span>đ</p>
                                                    </div>
                                                    <br> </div>
                                            </div>
                                        </div>
                                        <div class="space30">&nbsp;</div>
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_dathang">Đặt hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- panel-info -->
                            </div>
                            <!-- body-cart -->
                        </div>
                        <!--full checkout-->
                    </div>
                    <!-- col-lg-5 -->
                </div>
                <!-- rowfull -->
            </form>
            <!--content-->
        </div>
        <!--container f-->
</div>
    <br>
    <script type="text/javascript">
        $(".thanhpho").change(function () {
            var id = $(".thanhpho").val();
            $.post("source/data.php", {
                id: id
            }, function (data) {
                $(".quan_huyen").html(data);
            });
        });
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
@endsection