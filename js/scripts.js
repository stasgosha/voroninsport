$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Price Block
	setTimeout(function(){
		$('.price-block').each(function(){
			$(this).prepend('<div class="left-line"></div>');
			$(this).append('<div class="right-line"></div>');

			var rLine = $(this).children('.right-line');

			rLine.css({
				'width' : $(this).innerWidth() - 15 - 10 - $(this).children('.block-label').innerWidth()
			});
		});
	}, 200);

	// Sliders
	$('.photos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		adaptiveHeight: true
	});

	$('.reviews-slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.equipment-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.instagram-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 586,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 90 ){
			$('.header').addClass('sticky');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 90){
			$('.header').removeClass('sticky');
			isSticky = false;
		}
	});

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});