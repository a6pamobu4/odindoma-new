jQuery(document).ready(function($) {

	$('.nav-item').eq(0).addClass('active');
	var offsetTopWithMarquee = 0;
	if ($(window).width() < 641) {
		offsetTopWithMarquee = 32;
	}
	else {
		offsetTopWithMarquee = 44;
	}

	var lastScrollTop = 0;
	var scrollOffset = 0;

	$('.post-nav .nav-item').each(function() {		

		$(this).click(function() {
			var navLink = $(this).attr('data-link');
			var navElement = document.getElementById(navLink);
			var offset = 68;
	    var elementPosition = navElement.getBoundingClientRect().top;
	    var offsetPosition = elementPosition + window.pageYOffset - offset;
	    if (offsetPosition < $(window).scrollTop()) {
	    	offsetPosition = offsetPosition - offsetTopWithMarquee;
	    }

			window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
    	});
		});		
	});

	if ($(window).width() < 992) {
		var viewport = $(window).width();
		var sideMargin = (viewport - $('main').width())/2;
		$('.post-nav .container').css({'width': viewport, 'margin-left': -sideMargin, 'margin-right': -sideMargin});
		$('.post-nav .mask-left').css({'left': -sideMargin, 'width': sideMargin});
		$('.post-nav .mask-right').css({'right': -sideMargin, 'width': sideMargin});
		$('.post-nav .nav-item:first-child').css('padding-left', sideMargin);
		$('.post-nav .nav-item:last-child').css('padding-right', sideMargin);
		$('.post-nav').addClass('wide');
	}

	$(window).load(function(){
 		var leftOffset = [];
		for (var i = 0; i < $('.post-nav .nav-item').length; i++) {
			leftOffset.push($('.post-nav .nav-item').eq(i).position().left - 12);
		}

		$(window).scroll(function () {
	    var windowTop = $(this).scrollTop();
	    if (windowTop > lastScrollTop) {
	    	scrollOffset = 73;
	    }
	    else {
	    	scrollOffset = 73 + offsetTopWithMarquee;
	    }


	    $('.nav-item').each(function() {	    	
	      if (windowTop >= $('#'+$(this).attr('data-link')).offset().top - scrollOffset) {
	        $('.nav-item').removeClass('active');
	        $(this).addClass('active');
	        $('.post-nav .container').scrollLeft(leftOffset[$('.nav-item').index($(this))]);
	      }
	    });

	    lastScrollTop = windowTop;
		});
 	});
	

	

});

