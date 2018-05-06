$('#open-del-check').on('click', function(){
    $('#del-check').css('display', 'block');
    $('#open-del-check').css('display', 'none');
    $('#del-checkall').css('display', 'block');
    $('#cancel-check').css('display', 'block');
    $('.del1-sp').css('display', 'none');
    $('.delm-sp').css('display', 'block');
});

$('#cancel-check').on('click', function(){
    $('#del-check').css('display', 'none');
    $('#open-del-check').css('display', 'block');
    $('#del-checkall').css('display', 'none');
    $('#cancel-check').css('display', 'none');
    $('.del1-sp').css('display', 'block');
    $('.delm-sp').css('display', 'none');
});

