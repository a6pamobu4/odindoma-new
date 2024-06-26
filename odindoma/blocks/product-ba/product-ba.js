jQuery(document).ready(function($) {

	$('.before-after').each(function(){
		$(this).on('touchmove', function(event){
		  var sliderPos = event.pageX;
		  var	offsetLeft = $(this).offset().left;
		  var afterWidth = sliderPos - offsetLeft;
		  $('.after', this).css('width', afterWidth);
		  $('.slider-button', this).css('left', afterWidth - 13);
		});
	});

	$('.before-after').each(function(){
		$(this).on('mousemove', function(event){
		  var sliderPos = event.pageX;
		  var	offsetLeft = $(this).offset().left;
		  var afterWidth = sliderPos - offsetLeft;
		  $('.after', this).css('width', afterWidth);
		  $('.slider-button', this).css('left', afterWidth - 13);
		});
	});
  
});

