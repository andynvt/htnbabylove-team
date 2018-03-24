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
    <link href="source/ADMIN/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="source/ADMIN/assets/css/paper-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="source/ADMIN/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="source/ADMIN/assets/css/themify-icons.css" rel="stylesheet">
    <link href="source/ADMIN/assets/css/tabs_table_reset.css" rel="stylesheet">

    <!--}-->

    <link rel="stylesheet" href="source/ADMIN/css/reset_css.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback-admin.css">
    <link rel="stylesheet" href="source/ADMIN/css/cart.css">
    <link rel="stylesheet" href="source/ADMIN/css/color.css">
    <link rel="stylesheet" href="source/ADMIN/css/feedback.css">
    <link rel="stylesheet" href="source/ADMIN/css/search.css">
    <link rel="stylesheet" href="source/ADMIN/css/slideshow.css">
    <link rel="stylesheet" href="source/ADMIN/css/trangthai.css">
    <link rel="stylesheet" href="source/ADMIN/css/add_product.css">

</head>

<body>

    <div id="content-admin">
        @yield('contentadmin')
    </div>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
</body>

<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="source/ADMIN/assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="source/ADMIN/assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="source/ADMIN/assets/js/bootstrap-notify.js"></script>


<script type="text/javascript" src="source/ADMIN/js/main.js"></script>
<script type="text/javascript" src="source/ADMIN/js/cart.js"></script>
<script type="text/javascript" src="source/ADMIN/js/modal.js"></script>

</html>

