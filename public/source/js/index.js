jQuery(function ($) {
    function fixDiv() {
        var $cache = $('#getFixed');
        if ($(window).scrollTop() > 260) $cache.css({
            'position': 'fixed',
            'top': '0',
            'width': '100%',
            'background': 'white',
            'z-index': '999',
            'height': '53px'
        });
        else $cache.css({
            'position': 'relative',
            'top': 'auto'
        });
    }
    $(window).scroll(fixDiv);
    fixDiv();
});

function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
