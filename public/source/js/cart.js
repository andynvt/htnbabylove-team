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

// $(function confirmchange() {
    // $(".confirm-change-qty").on('click', function () {
    //     $(this).parents(".change-qty").css("display", "none");
    //     var qtyproduct =  $(this).parent(".div-confirm-change-qty").prev('.input-change-qty').find('input').val();
    //     $(this).parents('.change-qty').prev('.cart-input-qty').find('input').val(qtyproduct);
    // });
// });


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




