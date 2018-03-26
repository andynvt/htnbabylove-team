jQuery(document).ready(function ($) {
    if ($(".btn-top").length > 0) {
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 400) {
                $(".btn-top").show()
            }
            else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }
});

function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
//$('#myModal').on('shown.bs.modal', function () {
//  $('#myInput').trigger('focus')
//});
$(document).on('click', '.input-group button', function () {
    var btn = $(this)
        , oldValue = btn.closest('.input-group').find('input').val().trim()
        , newVal = 0;
    if (btn.attr('data-dir') == 'up') {
        newVal = parseInt(oldValue) + 1;
    }
    else {
        if (oldValue > 1) {
            newVal = parseInt(oldValue) - 1;
        }
        else {
            newVal = 1;
        }
    }
    btn.closest('.input-group').find('input').val(newVal);
});
_colors = $('._select_color_drop li');
for (var i = _colors.length - 1; i >= 0; i--) {
    $(_colors[i]).click(function () {
        var color_text = $(this).find('span').attr('_text_display');
        var elemnt = $(this).closest('._select_color_drop').prev();
        elemnt.find('span.color').remove();
        $(this).find('span').clone().appendTo(elemnt);
        var contents = $(elemnt).contents();
        if (contents.length > 0) {
            if (contents.get(0).nodeType == Node.TEXT_NODE) {
                $(elemnt).html(color_text).append(contents.slice(1));
            }
        }
        if ($('[name=_color]').val() == undefined) {
            elemnt.next().append("<input type='hidden' name='_color' value='" + color_text + "'>");
        }
        else {
            $('[name=_color]').val(color_text);
        }
    })
};