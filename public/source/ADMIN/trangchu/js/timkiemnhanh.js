$(function() {
  $("#pricefrom").slider({
  				range: true,
				min: 0,
				max: 2500000,
				step:5000,
				value: [ 300000, 2200000 ],
				slide: function( event, ui ) {
					$( "#app_min_price" ).html( "$" + ui.value[ 0 ]);
					$( "#app_max_price" ).html( "$" + ui.values[ 1 ]);
				},
				stop: function(event, ui) {
			        
			        $("#app_min_price").html( "$" + ui.value[ 0 ]);
			        $("#app_max_price").html( "$" + ui.value[ 1 ]);
			    },

  }).on('slide', function() {
    $('#outputmin').html(this.value);
    $('#outputmax').html(this.value);

  }).trigger('slide');
});

