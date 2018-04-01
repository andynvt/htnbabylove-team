<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title></title>
</head>

<link rel="stylesheet" href="css/feedback.css">

<script type="text/javascript" src="js/feedback.js"></script>

<body onload="">
    <div class="container">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
          </button>

        <form action="" method="post">
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                            <div class="check-star-feed-back">
                                <h2>Đánh giá sản phẩm</h2>
                                <section class='rating-widget'>
                                    <!-- Rating Stars Box -->

                                    <div class="rate-feed-back clearfix">
                                        <div class='rating-stars'>
                                            <ul id='stars' style="cursor: pointer">
                                                <li class='star' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                            </ul>
                                            <input type="hidden" name="ratingValue" id="star-feedback">
                                        </div>
                                        <div class='success-box'>
                                            <div class="text-message"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <h3 id="change-feed-back">Viết đánh giá của bạn</h3>
                            <div class="content-feed-back row clearfix">
                                <div class="radio col-sm-12 gender-feedback">
                                    <label><input type="radio" name="gt"><span>Anh</span></label>
                                    <label><input type="radio" name="gt"><span>Chị</span></label>
                                </div>
                                <input type="hidden" name="gender" id="gender">
                                <div class="info-feedback col-sm-12">
                                    <div class="row">
                                        <label class="col-md-4 col-xs-12">Họ tên:</label>
                                        <input class="col-md-8 col-xs-12" type="text" placeholder="Bắt buộc" name="name" required>
                                        <label class="col-md-4 col-xs-12">Số điện thoại:</label>
                                        <input class="col-md-8 col-xs-12" type="tel" placeholder="Cần thiết cho việc liên hệ sau này" name="phone">
                                        <br>
                                        <textarea class="col-xs-12" rows="5" name="comment" placeholder="Đánh giá của bạn cho sản phẩm"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="btn-feed-back">
                                <button class="send-fb" data-dismiss="modal" type="button">
                                    Hủy
                                </button>
                            </div>
                            <div class="btn-feed-back">
                                <input class="send-fb" type="submit" value="Gửi" name="send">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>



    </div>
</body>




</html>
