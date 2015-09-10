jQuery(document).ready(function($) {

	$('.slick-slider').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1000,
	  centerMode: true,
	  
	});

	/**
 *
 * Nav Active Highlight
 *
 */
	 	var page = window.location.pathname;
	 	// console.log(page);

	 	var currentPage = page.substring(1, page.length);
	 	// console.log(currentPage);
		
		// var $activeLink = $('.main-nav').children("li:contains('About')").css('border', '1px solid red');
		// var $activeLink = $('.main-nav').children('li').children("a:contains('About')").css('color', 'red');
		
		$(".main-nav").find("[data-page='" + currentPage + "']").addClass('active');

		$('.dropdown-menu').find("[data-page='" + currentPage + "']").addClass('active');
		// $('.dropdown-menu').children('li').css('border', '1px solid yellow');

		var dropdown = $('.dropdown-menu').children('li').hasClass('active');
		console.log(dropdown);

		if (dropdown) {
			$('.dropdown').addClass('active');
		}

});