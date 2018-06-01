$(document).ready(function(){
	//--------------------------------------------------- menu scroll
	$(window).scroll(function(){
		const st = $(this).scrollTop();
		if (st >= 100 ) {
			$('.menu').addClass('menu-background');
		} else {
			$('.menu').removeClass('menu-background');
		}
	});
	//--------------------------------------------------- anchor
	$("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
	//--------------------------------------------------- slider
	$('.slider-block').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		autoplay: true,
	 	variableWidth: false,
		nextArrow: "<img class='slick-next' src='gallery/icons/right.svg' alt='next'>",
		prevArrow: "<img class='slick-prev' src='gallery/icons/left.svg' alt='prev'>",
	});			  	
});