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
<div class="cnt-user">
     <div class="container-fluid">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đặt hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
<div class="container-full checkout-body">
        <div class="container-fluid">
          
            <div class="clearfix"></div>
            @if(Session::has('cart'))
                <form action="{{ route('dathang') }}" method="post" class="beta-form-checkout" id="checkOutForm">
            @else
                <form action="{{ route('thanhtoantest') }}" method="post" class="beta-form-checkout" id="checkOutForm">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                    <div class="col-md-12"><strong>Họ và tên</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form_size" name="cusname" id="cusname" minlength="3" pattern="^([a-zA-Z0-9)$" required="required" maxlength="20"/> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email đặt hàng</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12 col-xs-12">
                                        <input type="email" class="form-control form_size" name="email" id="email" required /> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Giới tính</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <select name="gender" class="form-control form_size text-tt-re " id="gender" required>
                                            <option value="" selected>Chọn giới tính</option>
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                            <option>Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Tỉnh/Thành Phố</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <select class="form-control form_size thanhpho text-tt-re" id="city" name="city" required>
                                            <option value="">Tỉnh/Thành Phố </option>
												<?php
												$sql = "select * from cities";
												$query = $con->query($sql);
												$num = mysqli_num_rows($query);
												if($num > 0){
													while($row = mysqli_fetch_array($query)){
										    ?>
                                                <option value="<?php echo $row['id']; ?>">
                                                    <?php echo $row['name']; ?>
                                                </option>

                                                <?php
										    		}
												}
										    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-12"><strong>Quận/Huyện</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <select class="form-control form_size quan_huyen text-tt-re" id="district" name="district" required> 
                                            <option value="0">Quận/Huyện</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ nhận hàng (Số nhà, đường)</strong>
                                        <div class="space10">&nbsp;</div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control form_size" id="address" required/> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="col-md-12">
                                        <input type="tel" pattern="[0-9]{10,11}" title="Vui lòng nhập đúng định dạng" name="phone" class="form-control form_size" id="phone" required/> </div>
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
                        @if(Session::has('cart'))
                            <div class="header-title-cart">
                                <h5 class="title_">Thông tin đơn hàng @if(Session::has('cart')) ({{Session('cart')->totalQty}} sản phẩm) @endif</h5>
                                <hr class="hrtitle_GH"> </div>
                            <div class="space10">&nbsp;</div>
                            <div class="body-cart">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div id="overflowTest-checkout">
                                        @foreach($product_cart as $product)

                                            <div class="body-cart-content-checkout">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-12"> <img class="rounded" src="storage/product/{{$product['item']['img']}}"/> </div>
                                                        {{-- <input type="hidden" name="img" value="{{ $mua->image }}"> --}}
                                                        <div class="col-md-5  col-sm-12 span_content_body">
                                                            
                                                            <div class="col-xs-12 "><input type="hidden" name="proname" value="{{$product['item']['name']}}"><strong>{{ $product['item']['name'] }}</strong></div>
                                                            <div class="col-xs-12 span_content_body">
                                                                <h7>Số lượng: <span><input type="hidden" name="qty" value="{{$product['qty']}}">{{$product['qty']}}</span></h7>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <h7>Màu: <span><input type="hidden" name="color" value="{{$product['item']['color']}}">{{$product['item']['color']}}</span></h7>
                                                            </div>
                                                            <input type="hidden" name="size" value="{{ $product['item']['size'] }}">
                                                        </div>
                                                        <div class="col-md-3  col-sm-12 text-right ">
                                                            @if($product['item']['promotion_price'] == 0)
                                                                <input type="hidden" name="price" value="{{ $product['item']['unit_price'] }}">
                                                                <p><span>{{ number_format($product['item']['unit_price']) }}</span> đ</p>
                                                            @else
                                                                <input type="hidden" name="price" value="{{ $product['item']['promotion_price'] }}">
                                                                <p><span>{{ number_format($product['item']['promotion_price']) }}</span> đ</p> 
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <hr class="hr_sp" /> 
                                                </div> --}}
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                        @endforeach

                                            <!-- body-cart-content-checkout -->
                                        </div>
                                        <div class="space20">&nbsp;</div>

                                        {{-- <div class="">
                                            <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_cart">Chỉnh sửa giỏ hàng </button>
                                            </div>
                                        </div> --}}
                                        <div class="">
                                            <hr class="hrtitle_GH" /> </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5 col-xs-5"> <strong><b class="lbl_TongTien">Tổng Tiền</b></strong> </div>
                                                <div class="col-md-6 col-xs-6">
                                                    <div class="pull-right span_content">
                                                        <p><span><input type="hidden" name="tongtien" value="{{number_format( Session('cart')->totalPrice)}}"><b>{{number_format( Session('cart')->totalPrice )}} đ</b></span></p>
                                                    </div>
                                                    <br> 
                                                </div>
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
                        @else
                            <div class="header-title-cart">
                                <h5 class="title_">Thông tin đơn hàng ({{ count($spmua) }} sản phẩm)</h5>
                                <hr class="hrtitle_GH"> </div>
                            <div class="space10">&nbsp;</div>
                            @foreach($spmua as $mua)
                            <div class="body-cart">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div id="overflowTest-checkout">
                                            <div class="body-cart-content-checkout">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-3"> <img class="rounded" src="storage/product/{{ $mua->image }}"/> </div>
                                                        <input type="hidden" name="img" value="{{ $mua->image }}">
                                                        <div class="col-sm-5 col-xs-5 span_content_body">
                                                            
                                                            <div class="col-xs-12 "><input type="hidden" name="proname" value="{{ $mua->name }}"><strong>{{ $mua->name }}</strong></div>
                                                            <div class="col-xs-12 span_content_body">
                                                                <h7>Số lượng: <span><input type="hidden" name="qty" value="{{ $qtymua }}">{{ $qtymua }}</span></h7>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <h7>Màu: <span><input type="hidden" name="color" value="{{ $colormua }}">{{ $colormua }}</span></h7>
                                                            </div>
                                                            <input type="hidden" name="size" value="{{ $mua->size }}">
                                                        </div>
                                                        <div class="col-sm-3 col-xs-3 text-right ">
                                                            @if($mua->promotion_price == 0)
                                                                <input type="hidden" name="price" value="{{ $mua->unit_price }}">
                                                                <p><span>{{ number_format($mua->unit_price) }}</span>đ</p>
                                                            @else
                                                                <input type="hidden" name="price" value="{{ $mua->promotion_price }}">
                                                                <p><span>{{ number_format($mua->promotion_price) }}</span>đ</p> 
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <hr class="hr_sp" /> 
                                                </div> --}}
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                            <!-- body-cart-content-checkout -->
                                        </div>
                                        <div class="space20">&nbsp;</div>
                                        {{-- <div class="">
                                            <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_cart">Chỉnh sửa giỏ hàng </button>
                                            </div>
                                        </div> --}}
                                        <div class="">
                                            <hr class="hrtitle_GH" /> </div>
                                        <div class="form-group">
                                            <div class="">
                                                <div class="col-md-5 col-6"> <strong><b class="lbl_TongTien">Tổng Tiền</b></strong> </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="pull-right span_content">
                                                        @if($mua->promotion_price == 0)
                                                            <p><span><input type="hidden" name="tongtien" value="{{ ($mua->unit_price * $qtymua) }}"><b >{{number_format( ($mua->unit_price * $qtymua) )}} đ</b></span></p>
                                                        @else
                                                            <p><span><input type="hidden" name="tongtien" value="{{ ($mua->promotion_price * $qtymua) }}"><b >{{number_format( ($mua->promotion_price* $qtymua) )}} đ</b></span></p>
                                                        @endif
                                                    </div>
                                                    <br> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space30">&nbsp;</div>
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 container_btncsgh">
                                                <button type="submit" class="btn btn-primary btn-submit-fix submitbtn_dathang" id="submit">Đặt hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- panel-info -->
                            </div>
                            @endforeach
                        @endif
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