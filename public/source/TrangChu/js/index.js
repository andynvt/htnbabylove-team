jQuery(function ($) {
    function fixDiv() {
        var $cache = $('#getFixed');
        if ($(window).scrollTop() > 260) $cache.css({
            'position': 'fixed'
            , 'top': '0'
            , 'width': '100%'
            , 'background': 'white'
            , 'z-index': '999'
            , 'height': '53px'
        });
        else $cache.css({
            'position': 'relative'
            , 'top': 'auto'
        });
    }
    $(window).scroll(fixDiv);
    fixDiv();
});
//$(document).ready(function () {
//    $('.hamburger').click(function () {
//        if ($(".div-hamburger").find('span.fa').hasClass('fa-bars')) {
//            $(".div-hamburger").find('span.fa').removeClass('fa-bars').addClass('fa-times');
//        } else {
//            $(".div-hamburger").find('span.fa').removeClass('fa-times').addClass('fa-bars');
//        }
//
//    })
//});
function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}