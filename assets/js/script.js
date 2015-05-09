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


})(window, document, jQuery);