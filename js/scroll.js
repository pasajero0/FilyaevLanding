$(window).scroll(function(){
	const st = $(this).scrollTop();
	if (st >= 100 ) {
		$('.menu').addClass('menu-background');
	} else {
		$('.menu').removeClass('menu-background');
	}
});