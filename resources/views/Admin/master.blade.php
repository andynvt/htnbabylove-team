<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="storage/product/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <base href="{{asset('')}}">
    <title>HOÀNG THỦY NGUYÊN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!--Frame link - DON'T DELETE {-->

    <!-- Animation library for notifications   -->
    <link href="source/ADMIN/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="source/ADMIN/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="source/ADMIN/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="source/ADMIN/assets/css/themify-icons.css" rel="stylesheet">
    <link href="source/ADMIN/assets/css/tabs_table_reset.css" rel="stylesheet">
    <!--}-->

    <link rel="stylesheet" href="source/ADMIN/css/reset_css.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback-admin.css">
    <link rel="stylesheet" href="source/ADMIN/css/cart.css">
    <link rel="stylesheet" href="source/ADMIN/css/color.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback.css">
    <link rel="stylesheet" href="source/ADMIN/css/trangthai.css">
    <link rel="stylesheet" href="source/ADMIN/css/add_product.css">
    <link rel="stylesheet" href="source/ADMIN/css/util.css">
    <link rel="stylesheet" href="source/ADMIN/css/login.css">
    <link rel="stylesheet" href="source/ADMIN/css/imgcolor-admin.css">
    <link rel="stylesheet" href="source/ADMIN/css/adminsanpham.css">
</head>

<body>
    @if (session('deletelsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('editlsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif(session('addlsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('deletefb'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('confirmbill'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('confirmbillnomail'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('cancelbill'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('cancelbillnomail'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('successbill'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('failbill'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('deletesp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('editsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('addsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @elseif (session('failaddsp'))
        <body onload="admin.showNotification('top','right')"></body>
    @endif


    {{-- 1: Xanh dương   2: Xanh lá cây  3: Vàng  4: Đỏ --}}
    <script>
        admin = {
            showNotification: function(from, align){

                @if(session('deletelsp'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-trash",
                    message: "{{ session('deletelsp') }}"
                }
                @elseif (session('editlsp'))
                color = Math.floor(3);
                $.notify({
                    icon: "ti-pencil",
                    message: "{{ session('editlsp') }}"
                }
                @elseif(session('addlsp'))
                color = Math.floor(2);
                $.notify({
                    icon: "ti-plus",
                    message: "{{ session('addlsp') }}"
                }
                @elseif(session('deletefb'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-trash",
                    message: "{{ session('deletefb') }}"
                }
                @elseif (session('confirmbill'))
                color = Math.floor(2);
                $.notify({
                    icon: "ti-check",
                    message: "{{ session('confirmbill') }}"
                }
                @elseif (session('cancelbill'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-close",
                    message: "{{ session('cancelbill') }}"
                }
                @elseif (session('confirmbillnomail'))
                color = Math.floor(2);
                $.notify({
                    icon: "ti-check",
                    message: "{{ session('confirmbillnomail') }}"
                }
                @elseif (session('cancelbillnomail'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-close",
                    message: "{{ session('cancelbillnomail') }}"
                }
                @elseif (session('successbill'))
                color = Math.floor(2);
                $.notify({
                    icon: "ti-check",
                    message: "{{ session('successbill') }}"
                }
                @elseif (session('failbill'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-close",
                    message: "{{ session('failbill') }}"
                }
                @elseif(session('deletesp'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-trash",
                    message: "{{ session('deletesp') }}"
                }
                @elseif (session('editsp'))
                color = Math.floor(3);
                $.notify({
                    icon: "ti-pencil",
                    message: "{{ session('editsp') }}"
                }
                @elseif(session('addsp'))
                color = Math.floor(2);
                $.notify({
                    icon: "ti-plus",
                    message: "{{ session('addsp') }}"
                }
                @elseif(session('failaddsp'))
                color = Math.floor(4);
                $.notify({
                    icon: "ti-close",
                    message: "{{ session('failaddsp') }}"
                }
                @endif
                ,{
                    type: type[color],
                    timer: 4000,
                    placement: {
                        from: from,
                        align: align
                    }
                });
            }
        }
    </script>
    
    <div id="content-admin">
        @yield('contentadmin')
    </div>

    {{-- Script tổng --}}
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        function submitForm() {
            return confirm('Bạn có chắc muốn xoá?');
        }
    </script>

    {{-- Script sắp xếp bảng --}}
	<script>
        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("myTable");
          switching = true;
          dir = "asc"; 
          while (switching) {
            switching = false;
            rows = table.getElementsByTagName("TR");
            for (i = 1; i < (rows.length - 1); i++) {
              shouldSwitch = false;
              x = rows[i].getElementsByTagName("TD")[n];
              y = rows[i + 1].getElementsByTagName("TD")[n];
              if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  shouldSwitch= true;
                  break;
                }
              } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  
                  shouldSwitch= true;
                  break;
                }
              }
            }
            if (shouldSwitch) {
              
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              
              switchcount ++;      
            } else {
              if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
              }
            }
          }
        }
    </script>

    @foreach($product as $sp)
    <div class="modal fade " id="ctsp_{{ $sp->id_product }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{$sp->name}}</h4>
                </div>
                <div class="modal-body">
                    <div class="container-full">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="container-filud">
                                  <div id="myCarousel{{ $sp->id_product }}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                      <div class="item active">
                                        <img src="storage/product/{{$sp->image}}"  class="img-responsive" width="480px">
                                      </div>
                                    @foreach($product_image as $anh)
                                    @if($sp->id_product == $anh->id)
                                      <div class="item">
                                        <img src="storage/product/{{$anh->image}}"  class="img-responsive" width="480px">
                                        
                                      </div>
                                    @endif
                                    @endforeach
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel{{ $sp->id_product }}" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel{{ $sp->id_product }}" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-offset-0">
                                <div class="space10">&nbsp;</div>
                                <p class=" text-price-model"><b class="text-price">
                                    @if($sp->promotion_price == 0)
                                                <span class=" ">Giá gốc: {{number_format($sp->unit_price)}} đ</span> &nbsp;
                                            @else
                                                <span class=" ">Giá khuyến mãi: {{number_format($sp->promotion_price)}} đ</span> &nbsp;
                                                <br>
                                                <span class="flash-del">Giá gốc: {{number_format($sp->unit_price)}} đ</span>
                                            @endif
                                    </b></p>
                                <div class="container-filud">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <p class=" text-price"><b>&nbsp;Số lượng :  </b>&nbsp; 1</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <p class=" text-price"><b>&nbsp;Màu sắc:</b></p>
                                            <div class="form-group">
                                                <select name="colorbuy" style="height: 38px">
                                                    @foreach($product_color as $pro)
                                                        @if($sp->id_product == $pro->spid)
                                                            <option>{{$pro->color}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="space10">&nbsp;</div>
                                        </div>
                                        <p class=" text-price"><b>&nbsp;Thông tin cơ bản:</b></p>
                                        <div class="col-lg-12 ">{{$sp->description}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                   
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
   
    @endforeach

</body>

<script>
    $( "#wrap input[type='text']" ).focus(function() {
        $('#wrap input[type="submit"]').css('z-index', 4)
    });
</script>   

<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="source/ADMIN/assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="source/ADMIN/assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="source/ADMIN/assets/js/bootstrap-notify.js"></script>
<script src="source/ADMIN/vendor/animsition/js/animsition.min.js"></script>
<script src="source/ADMIN/assets/js/demo.js"></script>
<script src="source/ADMIN/js/jquery.checkboxes-1.2.2.js" type="text/javascript"></script>

<script src="source/ADMIN/js/main.js" type="text/javascript"></script>
<script src="source/ADMIN/js/cart.js" type="text/javascript"></script>
<script src="source/ADMIN/js/modal.js" type="text/javascript"></script>
<script src="source/ADMIN/js/login.js" type="text/javascript"></script>
<script src="source/ADMIN/js/adminsanpham.js" type="text/javascript"></script>

</html>

