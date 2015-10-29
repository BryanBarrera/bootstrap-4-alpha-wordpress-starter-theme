// Test

var $width = $(window).width();


$(window).on("resize",function() {

	if ($(window).width() < 960)  {
 
 		$('body').addClass('lessThan960');
		console.log('less than 960 <?')

	}else { 

		$('body').removeClass('lessThan960');
		console.log('more than 960 >?')
	}

}).trigger('resize');

 