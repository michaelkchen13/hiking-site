$(function() {

	// Cache the window object
	var $window = $(window);

	// Parallax background effect
	$('section[data-type="background"]').each(function() {

		var $bgobj = $(this); //assigning the object

		$(window).scroll(function() {

			//scroll the background at var speed
			//the ypos is a neg value because we are scrolling up

			var yPos = -($window.scrollTop() /$bgobj.data('speed'));

			//put together our final background position
			var coords = '50% '+ yPos + 'px';

			//move the background
			$bgobj.css({ backgroundPosition: coords});

		}); //end window scroll

	});

});