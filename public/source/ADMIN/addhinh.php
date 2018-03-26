<!DOCTYPE html>
<html lang="">

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

    <link href="css/reset_css.css" rel="stylesheet">
    <link href='css/add_product.css' rel='stylesheet'> </head>
</head>

<body>
    <?php
        if(isset($_POST['upload'])){
            $image_uploaded = array();
            foreach ( $_FILES['hinh']['name'] as $key => $value){
                $image_name = $_FILES['hinh']['name'][$key];
                $tmp_name = $_FILES['hinh']['tmp_name'][$key];
                
                $target_dir = "img_uploaded/";
                $target_file = $target_dir.$image_name;
                
                if(move_uploaded_file($tmp_name, $target_file)){
                    $image_uploaded[] = $target_file;
                }
            }
        }
    ?>

        <form action="" method="post" enctype="multipart/form-data" onsubmit="return hienmau()">
            <div class="container">
                <div class="mauhinh">
                    <button type="button" class="addcolor">
                    Them Mau
                    </button>
                    <div class="themmau">
                        <div class="select_color testmau">
                            <input class="abc" type="color" name="color1" style="width:25px;height:25px;">
                            <input type="color" name="color2" style="width:25px;height:25px;">
                            <!--                           <button class="check" type="color" style="background:none;border-radius:50%;"><i class="fa fa-check" style="color:#68b3c8"></i></button>-->

                        </div>

                        <div class="testmau">
                            <p>
                                <input type="file" name="hinh[]" multiple>
                            </p>
                            <p>
                                <input class="mautest" type="submit" name="upload" value="up hinh">
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php for($i=0 ; $i<count($image_uploaded); $i++){
    
        ?>
        <div style="float: left; margin: 5px">
            <img src="<?php echo $image_uploaded[$i]; ?>" style="width: 100px; height: 100px">
            <div class="test" style="background: red; width:90px; height: 50px;border-radius:2px;">
                <div style="color:#fff;padding:18% 30%; margin-top:2%;">Demo</div>
            </div>
        </div>
        <?php } ?>

        <style>
            .mauhinh {
                margin: 0 auto;
                background: yellow;
                height: 250px;
                position: relative;
            }

            .themmau {
                display: block;
                position: absolute;
                background: #fff;
                width: 50%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .testmau {
                display: inline-block;
                width: 49%;
            }

        </style>

        <script>
            if ($(".themmau").css("display") = "block") {
                color1 = $('.select_color input[name="color1"]').val();
                color2 = $('.select_color input[name="color2"]').val();
                string = 'repeating-linear-gradient';
                $('.test').css('background', '' + string + '(' + color1 + ',' + color1 + ' 10%,' + color2 + ' 10%,' + color2 + ' 20%)');
            } else alert("sjkajksa");


            //            $(".addcolor").on("click", function() {
            //                //                $(".themmau").css("background", "red");
            //            });

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
