$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '280px'
	});

	// $('.menu-opener').click(function(e){
	// 	e.preventDefault();
	// });

	// Sliders
	$('.main-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					arrows: false,
					dots: true
				}
			}
		]
	});

	$('.big-photos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					arrows: false,
					dots: true,
					adaptiveHeight: true
				}
			}
		]
	});

	$('.used-products-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					arrows: false,
					dots: true,
					adaptiveHeight: true,
					slidesToShow: 1
				}
			}
		]
	});

	$('.photos-slider:not(.our-projects-photos-slider)').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		adaptiveHeight: false
	});

	$('.our-projects-photos-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		adaptiveHeight: false,
		asNavFor: '.projects-descriptions-slider'
	});

	$('.projects-descriptions-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		adaptiveHeight: true,
		swipe: false
	});

	$('.news-slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					arrows: false,
					dots: true,
					adaptiveHeight: true
				}
			},
			{
				breakpoint: 475,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1
				}
			}
		]
	});

	$('.articles-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true,
					adaptiveHeight: true
				}
			}
		]
	});

	$('.manufacture-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});

	$('.history-years-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		swipe: false,
		asNavFor: '.history-description-slider'
	});

	$('.history-description-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		swipe: false
	});

	var historySliderSlidesCount = $('.history-years-slider').slick('getSlick').slideCount;

	$('.history-years-slider').on('setPosition', function(event, slick, currentSlide, nextSlide){
		if (slick.currentSlide > (slick.slideCount - 3)) {
			$('.history-years-slider').slick('slickGoTo', slick.slideCount - 3);
		}
	});

	var sliderFeaturesFlag = false;
	function sliderFeaturesInit(){
		if ( $(window).width() <= 767 && !sliderFeaturesFlag) {
			$('.slider-features').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				adaptiveHeight: true,
				responsive: [
					{
						breakpoint: 576,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			sliderFeaturesFlag = true;
		} else if($(window).width() > 767 && sliderFeaturesFlag) {
			$('.slider-features').slick('unslick');
			sliderFeaturesFlag = false;
		}
	};

	if ( $(window).width() <= 767 ){
		sliderFeaturesInit();
	}

	$(window).resize(function(){
		sliderFeaturesInit();
	});

	// Panel Nav
	$('.panel-nav .menu-item-has-children').each(function(){
		$(this).append('<div class="opener"></div>');
	});

	$('.panel-nav .menu-item-has-children .opener').click(function(){
		$(this).siblings('.sub-menu').stop().slideToggle(300);
		$(this).parent().toggleClass('opened');
	});

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 150 ){
			$('.header').addClass('sticky');
			// $('.header-top').slideUp(300);
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 150){
			$('.header').removeClass('sticky');
			// $('.header-top').slideDown(300);
			isSticky = false;
		}
	});

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

	// Product Images
	$('[data-big-image]').click(function(){
		$('.big-image img').attr('src', $(this).data('big-image'));
		$(this).addClass('selected').siblings().removeClass('selected');
	});

	$('[data-big-image]:first-child').click();

	// Distributor cards
	$('.distributor-card').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
	});

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');

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