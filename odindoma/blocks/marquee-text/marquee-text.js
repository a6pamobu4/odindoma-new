jQuery(document).ready(function($) {

	if ($('.marquee-text').length > 0) {
		var lastScrollTop = 0;
		var marqueeTopOffset = $('.hero-posts').offset().top + $('.hero-posts').outerHeight() + 24;

		$(window).scroll(function(event){
	  	var st = $(this).scrollTop();
	  	if(st > marqueeTopOffset) {
	  		$('.marquee-text').addClass('active');
  			if (st < lastScrollTop){
		   		$('.marquee-text').addClass('visible');
		    	$('.post-nav').addClass('marquee');
		    	lastScrollTop = st;  	
		   	} else if ((st - lastScrollTop) > 29) {
		    	$('.marquee-text').removeClass('visible');
		    	$('.post-nav').removeClass('marquee');
		    	lastScrollTop = st;
		   	}	  		  	
	  	} else {
	  		$('.marquee-text').removeClass('active');
	  		$('.post-nav').removeClass('marquee');
	  	}	  	
		});

		if ($(window).width() < 992) {
			var viewport = $(window).width();
			var sideMargin = (viewport - $('main').width())/2;
			$('.marquee-text').css({'width': viewport, 'margin-left': -sideMargin, 'margin-right': -sideMargin});
		}
	}

	$('.scrolling-text-inner').click(function() {
		ym(95640841,'reachGoal','goto-social');
	});
  
});

