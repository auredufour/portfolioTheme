$(function(){

	console.log("It's working");

	var $window = $(window);
	if( ($window.width() > 750) ){
        $(window).stellar({
			hideDistantElements: false,
		});
		console.log( "it works");
    };

	$('#menu-work, #menu-item-14 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#work").offset().top
		},500)
	});
		$('#menu-about, #menu-item-15 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#about").offset().top
		},1000)
	});
		$('#menu-contact, #menu-item-16 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#contact").offset().top
		},500)
	});
});