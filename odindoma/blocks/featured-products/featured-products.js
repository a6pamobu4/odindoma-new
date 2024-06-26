jQuery(document).ready(function($) {

	/*var topOffset = $('.swiper .image').outerHeight()/2;
	$('.swiper-button-next').css('top', topOffset);
	$('.swiper-button-prev').css('top', topOffset);	*/

	$('.featured-product .image').hover(function(){
		$(this).parent().toggleClass('hovered');
	});

	$('.featured-product .text').hover(function(){
		$(this).parent().toggleClass('hovered');
	});

	var init = false;
	var swiper;

	function swiperCard() {
	  if (window.innerWidth <= 640) {
	    if (!init) {
	      init = true;
	      swiper = new Swiper('.swiper', {
			  	slidesPerView: 1,
			  	loop: true,
			  	navigation: {
			      nextEl: ".swiper-button-next",
			      prevEl: ".swiper-button-prev",
			    },
				});
	    }
	  } 
	  else if (init) {
	    swiper.destroy();
	    init = false;
	  }
	}
	swiperCard();
	window.addEventListener("resize", swiperCard);
  
});

