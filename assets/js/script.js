;(function (window, document, $, undefined) {
	'use strict';

	// Global variables
	var $window = $(window);
	var $document = $(document);
	var $body = $('body');

	// FitVids
	$('.js-video-container').fitVids();

	$('.js-case-load-more').on('click', function () {
		$(this).remove();
		var $notLoaded = $('.case-list-li.not-loaded');
		$notLoaded.removeClass('not-loaded');
		$window.lazyLoadXT();
		$document.scroll();
	});

	$('.fullscreen-continue').on('click touch', function () {
		$('html, body').animate({
			scrollTop: $('header[role="banner"]').offset().top
		});
	});

	var $fullscreen = $('#fullscreen');
	if ($fullscreen.length) {
		var fullScreen = function () {
			$fullscreen.css({
				width: $window.width(),
				height: $window.height()
			});
		};
		$window.on('resize orientationchange', function () {
			fullScreen();
		});
		$document.ready(function () {
			fullScreen();
			if (!Modernizr.touch && ($window.width() > 1000)) {
				document.querySelector('#fullscreen video').play();
			}
		});
	}


})(window, document, jQuery);