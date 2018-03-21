$(function changeqty() {
    $(".new-qty").on('click', function () {
        $(this).parent(".cart-input-qty").next(".change-qty").css("display", "block");
    });
});

$(function canclechange() {
    $(".cancle-change-qty").on('click', function () {
        $(this).parents(".change-qty").css("display", "none");
    });
});

//$(function changecolor() {
//    $(".dropdowncolor").on('click', function () {
//        $(this).next("._select_color_drop").css("display", "block");
//    });
//});

//Change product color
$(function changecolor() {
    $(".dropdowncolor").on('click', function () {
        var check = $(this).next("._select_color_drop").css("display");
        if (check == "none") {
            $(this).next("._select_color_drop").css("display", "block");
            check = "block";

            _colors = $('._select_color_drop li');
            for (var i = _colors.length - 1; i >= 0; i--) {
                $(_colors[i]).click(function () {
                    var elemnt = $(this).closest('._select_color_drop').prev();
                    elemnt.find('span.color').remove();
                    $(this).find('span').clone().appendTo(elemnt);
                    $(this).parent("._select_color_drop").css("display", "none");
                    check = "none";
                })
            };
        } else {
            $(this).next("._select_color_drop").css("display", "none");
            check = "none";
        }
    });
});

//Change product qty

//$(document).on('click', '.number-spinner button', function () {
//    var btn = $(this),
//        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
//        newVal = 0;
//
//    if (btn.attr('data-dir') == 'up') {
//        newVal = parseInt(oldValue) + 1;
//    } else {
//        if (oldValue > 1) {
//            newVal = parseInt(oldValue) - 1;
//        } else {
//            newVal = 1;
//        }
//    }
//    btn.closest('.number-spinner').find('input').val(newVal);
//});

//Change product color
//_colors = $('._select_color_drop li');
//for (var i = _colors.length - 1; i >= 0; i--) {
//    $(_colors[i]).click(function () {
//        var elemnt = $(this).closest('._select_color_drop').prev();
//        elemnt.find('span.color').remove();
//        $(this).find('span').clone().appendTo(elemnt);
//        $(this).parent("._select_color_drop").css("display", "none");
//    })
//};
