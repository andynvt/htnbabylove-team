$(document).ready(function () {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function (e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function () {
        $(this).parent().children('li.star').each(function (e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }
        var addImg = "";
        var msg = "";
        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        if (ratingValue == 1) {
            addImg = "plugin/images/toobad-feedback.png";
            msg = "Quá tệ!!";
            $("#cmt").attr("placeholder", "Điều gì làm bạn không thích?");
        } else if (ratingValue == 2) {
            addImg = "plugin/images/badservice-feedback.png";
            msg = "Tệ!!";
            $("#cmt").attr("placeholder", "Điều gì làm bạn không thích?");
        } else if (ratingValue == 3) {
            addImg = "plugin/images/normal-feedback.png";
            msg = "Bình thường!!";
            $("#cmt").attr("placeholder", "Cho chúng tôi biết bạn muốn cải thiện điều gì?");
        } else if (ratingValue == 4) {
            addImg = "plugin/images/good-feedback.png";
            msg = "Tốt!!";
            $("#cmt").attr("placeholder", "Bạn mong muốn gì cho tương lai?");
        } else {
            addImg = "plugin/images/excellent-feedback.png";
            msg = "Hoàn hảo!!!!";
            $("#cmt").attr("placeholder", "Bạn mong muốn gì cho tương lai?");
        }
        addimages(addImg, msg);
    });
});

function addimages(addImg, msg) {
    var addImgmsg = '<img class="img-feed-back" src="' + addImg + '" />' +
        '<div class="text-message"><span>' + msg + '</span></div>';
    $('.success-box').html(addImgmsg);
}

//var fbWarning = new Alert('fb-warning-tip', "You must have login!", 2000);
//var fbSuccess = new Alert('fb-success-tip', "Thank you!", 2000);

//function sendfb() {
//    $(".send-fb").attr("data-dismiss", "modal");
//    //    if (isLogin() == 0) {
//    //        fbWarning.showAlert();
//    //    } else {
//    //        fbSuccess.showAlert();
//    //    }
//    //    alert('Idiot alert!!');
//}
