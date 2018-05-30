
//--------------------------------------------------- menu scroll

$(window).scroll(function(){
	const st = $(this).scrollTop();
	if (st >= 100 ) {
		$('.menu').addClass('menu-background');
	} else {
		$('.menu').removeClass('menu-background');
	}
});

//--------------------------------------------------- slider
$(document).ready(function(){
	// $('.slider-block').slick({
	// 	dots: true,
	// 	infinite: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	autoplay: true,
	// 	autoplaySpeed: 2000,
	// });
	$('.slider-block').slick({
	  dots: true,
	  centerMode: true,
	  infinite: true,
	  centerPadding: '10px',
	  slidesToShow: 3,
	  speed: 500,
	  autoplay: true,
	  variableWidth: false,  
	});
});
//--------------------------------------------------- anchor