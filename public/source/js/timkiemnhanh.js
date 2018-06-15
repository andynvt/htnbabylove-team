$(function () {
    $("#pricefrom").slider({
        range: true
        , min: 0
        , max: 2500000
        , step: 1000
        , value: [0, 2500000]
        , slide: function (event, ui) {
            $("#app_min_price").html("$" + ui.value[0]);
            $("#app_max_price").html("$" + ui.value[1]);
        }
        , stop: function (event, ui) {
            $("#app_min_price").html("$" + ui.value[0]);
            $("#app_max_price").html("$" + ui.value[1]);
        }
    , }).on('slide', function () {
        var res = this.value.split(",");
        $('#outputmin').html(formatCurrency(res[0]) + " - " + formatCurrency(res[1]));
    }).trigger('slide');
});

function formatCurrency(number){
    var n = number.split('').reverse().join("");
    var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");    
    return  n2.split('').reverse().join('') + 'đ';
}