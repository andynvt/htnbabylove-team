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
    <div class="form-group">
        <div class="khung-mau">
            <div class="khungchuamau">
                <div class="them-mau btn btn-default">
                    <i class="fa fa-plus"></i>
                </div>
                <div class="select_color testcolor">
                    <input type="color" name="color1" style="width:25px;height:25px;">
                    <input type="color" name="color2" style="width:25px;height:25px;">
                    <br>
                    <button class="check" type="color" style="background:none;border-radius:50%;"><i class="fa fa-check" style="color:#68b3c8"></i></button>
                </div>
            </div>
            <div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple>
                <span><i class="fa fa-close"></i></span>
            </div>
        </div>



        <script>
            $(".them-mau").on("click", function() {
                $(this).next(".testcolor").css("display", "block");
            });
            var i = 1;
            var removecolor = [];

            $('.check').on('click', function() {
                if (i == 1) {
                    $(".demo-color").css("display", "inline-block");
                    color1 = $('.select_color input[name="color1"]').val();
                    color2 = $('.select_color input[name="color2"]').val();
                    string = 'repeating-linear-gradient';
                    $("#demo-color1").css('background', '' + string + '(' + color1 + ',' + color1 + ' 10%,' + color2 + ' 10%,' + color2 + ' 20%)');

                    $(this).parent(".testcolor").css("display", "none");
                    removecolor.push("demo-color1");



                    $('#demo-color1').on('click', function() {
                        $(this).remove();
                        var deleteE = "demo-color1";

                        var demoten = removecolor.indexOf(deleteE);


                        if (demoten != -1) {
                            removecolor.splice(demoten, 1);
                        }

                        if (removecolor == "") {
                            i = 1;
                            $(".khung-mau").append('<div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple><span><i class="fa fa-close"></i></span></div>');
                        }
                    });

                } else {
                    var id = $("#demo-color" + (i - 1)).clone();
                    id.attr("id", "demo-color" + i);
                    $(".khung-mau").append(id);

                    color1 = $('.select_color input[name="color1"]').val();
                    color2 = $('.select_color input[name="color2"]').val();
                    string = 'repeating-linear-gradient';
                    id.css('background', '' + string + '(' + color1 + ',' + color1 + ' 10%,' + color2 + ' 10%,' + color2 + ' 20%)');

                    $(this).parent(".testcolor").css("display", "none");

                    var demoid = id.attr('id');
                    removecolor.push(demoid);


                    id.on('click', function() {
                        var deleteElmt = demoid;
                        var demoname = removecolor.indexOf(deleteElmt);

                        id.remove();
                        if (demoname != -1) {
                            removecolor.splice(demoname, 1);
                        }
                        if (removecolor == "") {
                            i = 1;
                            $(".khung-mau").append('<div class="demo-color btn btn-default" id="demo-color1" name="add-color[]" mutiple><span><i class="fa fa-close"></i></span></div>');
                        }
                    });
                }
                i++;
            });

        </script>

        <style>
            .khung-mau {
                margin: 30px 30px;
                width: auto;
            }

            .khungchuamau {
                position: relative;
                width: auto;
                display: inline-block;
            }

            .them-mau {
                border: 1px solid black;
                width: 70px;
                height: 70px;
                text-align: center;
                position: relative;
                cursor: pointer;
                /*                float: left;*/
                display: inline-block;
                margin: 5px;
            }

            .them-mau i {
                position: absolute;
                font-size: 20px;
                transform: translate(-50%, -50%);
                top: 50%;
                left: 50%;
                cursor: pointer;
            }

            .ok {
                margin: 0 auto;
                width: 70px;
                text-align: center;
            }

            .testcolor {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 1px solid black;
                background: white;
                min-width: 80px;
                text-align: center;
                display: none;
            }

            .testcolor input {
                margin: 5px;
            }

            .demo-color {
                width: 70px;
                height: 70px;
                display: none;
                border: 1px solid black;
                margin: 0 5px;
                position: relative;
            }

            .demo-color span {
                background: white;
                text-align: center;
                border: 1px solid black;
                border-radius: 100%;
                width: 30px;
                height: 30px;
                position: absolute;
                top: -10px;
                right: -10px;
            }

            .demo-color i {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

        </style>
    </div>


</body>


<!--   Core JS Files   -->
<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

</html>
