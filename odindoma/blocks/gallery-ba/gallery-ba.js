jQuery(document).ready(function($) {

	$('.before').each(function(){
		$(this).on('mousemove', function(event){
			var numberOfImages = $('.image', this).length;
			var beforeWidth = $(this).width();
			var sliderPos = event.pageX;
			var	offsetLeft = $(this).offset().left;
		  var sliderPosIn = sliderPos - offsetLeft;
			if (numberOfImages == 5) {
				if (sliderPosIn > beforeWidth/5 && sliderPosIn < beforeWidth*2/5) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > beforeWidth*2/5 && sliderPosIn < beforeWidth*3/5) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > beforeWidth*3/5 && sliderPosIn < beforeWidth*4/5) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > beforeWidth*4/5 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
			}

			else if (numberOfImages == 4) {
				if (sliderPosIn > beforeWidth/4 && sliderPosIn < beforeWidth*2/4) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
				}
				else if (sliderPosIn > beforeWidth*2/4 && sliderPosIn < beforeWidth*3/4) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
				}
				else if (sliderPosIn > beforeWidth*3/4 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
				}
			}  
		});
	});

	$('.after').each(function(){
		$(this).on('mousemove', function(event){
			var numberOfImages = $('.image', this).length;
			var afterWidth = $(this).width();
			var sliderPos = event.pageX;
			var	offsetLeft = $(this).offset().left;
		  var sliderPosIn = sliderPos - offsetLeft;
			if (numberOfImages == 5) {
				if (sliderPosIn > afterWidth/5 && sliderPosIn < afterWidth*2/5) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > afterWidth*2/5 && sliderPosIn < afterWidth*3/5) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > afterWidth*3/5 && sliderPosIn < afterWidth*4/5) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-4');
				}
				else if (sliderPosIn > afterWidth*4/5 && sliderPosIn < afterWidth) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
			}

			else if (numberOfImages == 4) {
				if (sliderPosIn > afterWidth/4 && sliderPosIn < afterWidth*2/4) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
				}
				else if (sliderPosIn > afterWidth*2/4 && sliderPosIn < afterWidth*3/4) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
				}
				else if (sliderPosIn > afterWidth*3/4 && sliderPosIn < afterWidth) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
				}
			}  
		});
	});

	/**
	 * Mobile before/after slider
	 * */

	$('.before-after-item').each(function(){
		$(this).on('touchmove', function(event){
		  var sliderPos = event.pageX;
		  var	offsetLeft = $(this).offset().left;
		  var afterWidth = sliderPos - offsetLeft;
		  $('.after', this).css('width', afterWidth);
		  $('.slider-button', this).css('left', afterWidth - 13);
		});
	});

	$('.before-after-item').each(function(){
		$(this).on('mousemove', function(event){
		  var sliderPos = event.pageX;
		  var	offsetLeft = $(this).offset().left;
		  var afterWidth = sliderPos - offsetLeft;
		  $('.after', this).css('width', afterWidth);
		  $('.slider-button', this).css('left', afterWidth - 13);
		});
	});

	$('.nav-image-0').click(function(){
		$(this).parents('.before-after-mobile').addClass('show-image-0');
		$(this).parents('.before-after-mobile').removeClass('show-image-1');
		$(this).parents('.before-after-mobile').removeClass('show-image-2');
		$(this).parents('.before-after-mobile').removeClass('show-image-3');
		$(this).parents('.before-after-mobile').removeClass('show-image-4');
	});

	$('.nav-image-1').click(function(){
		$(this).parents('.before-after-mobile').addClass('show-image-1');
		$(this).parents('.before-after-mobile').removeClass('show-image-0');
		$(this).parents('.before-after-mobile').removeClass('show-image-2');
		$(this).parents('.before-after-mobile').removeClass('show-image-3');
		$(this).parents('.before-after-mobile').removeClass('show-image-4');
	});

	$('.nav-image-2').click(function(){
		$(this).parents('.before-after-mobile').addClass('show-image-2');
		$(this).parents('.before-after-mobile').removeClass('show-image-0');
		$(this).parents('.before-after-mobile').removeClass('show-image-1');
		$(this).parents('.before-after-mobile').removeClass('show-image-3');
		$(this).parents('.before-after-mobile').removeClass('show-image-4');
	});

	$('.nav-image-3').click(function(){
		$(this).parents('.before-after-mobile').addClass('show-image-3');
		$(this).parents('.before-after-mobile').removeClass('show-image-0');
		$(this).parents('.before-after-mobile').removeClass('show-image-1');
		$(this).parents('.before-after-mobile').removeClass('show-image-2');
		$(this).parents('.before-after-mobile').removeClass('show-image-4');
	});

	$('.nav-image-4').click(function(){
		$(this).parents('.before-after-mobile').addClass('show-image-4');
		$(this).parents('.before-after-mobile').removeClass('show-image-0');
		$(this).parents('.before-after-mobile').removeClass('show-image-1');
		$(this).parents('.before-after-mobile').removeClass('show-image-2');
		$(this).parents('.before-after-mobile').removeClass('show-image-3');
	});

	$('.before-after-mobile').each(function(){
		var numberOfImagesMobile = $('.before-after-item', this).length;
		if (numberOfImagesMobile == 4) {
			$('.nav', this).css({'justify-content':'left','gap':'8px'});
		}
	});
  
});

