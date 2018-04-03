var ratingValue = 0;
var fbgender = "Anh";
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
        ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        if (ratingValue == 1) {
            addImg = "source/image/toobad-feedback.png";
            msg = "Quá xấu!!";
            $("#star-feedback").val(ratingValue);
        } else if (ratingValue == 2) {
            addImg = "source/image/badservice-feedback.png";
            msg = "Xấu!!";
            $("#star-feedback").val(ratingValue);
        } else if (ratingValue == 3) {
            addImg = "source/image/normal-feedback.png";
            msg = "Bình thường!!";
            $("#star-feedback").val(ratingValue);
        } else if (ratingValue == 4) {
            addImg = "source/image/good-feedback.png";
            msg = "Đẹp!!";
            $("#star-feedback").val(ratingValue);
        } else {
            addImg = "source/image/excellent-feedback.png";
            msg = "Rất đẹp!!!!";
            $("#star-feedback").val(ratingValue);
        }
        addImage(addImg, msg);
    });

    $('.gender-feedback input[name="gt"]').on('click', function () {
        fbgender = $(this).parent().find('span').html();
        $('#gender').val(fbgender);
    });
});

function addImage(addImg, msg) {
    var addImgmsg = '<img class="img-feed-back" src="' + addImg + '" />' +
        '<div class="text-message"><span>' + msg + '</span></div>';
    $('.success-box').html(addImgmsg);
}
