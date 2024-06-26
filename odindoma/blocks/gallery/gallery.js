jQuery(document).ready(function($) {

	$('.images').each(function(){
		var numberOfImages = $('.image', this).length;
		$(this).on('mousemove', function(event){			
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

			else if (numberOfImages == 6) {
				if (sliderPosIn > beforeWidth/6 && sliderPosIn < beforeWidth*2/6) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
				}
				else if (sliderPosIn > beforeWidth*2/6 && sliderPosIn < beforeWidth*3/6) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
				}
				else if (sliderPosIn > beforeWidth*3/6 && sliderPosIn < beforeWidth*4/6) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
				}
				else if (sliderPosIn > beforeWidth*4/6 && sliderPosIn < beforeWidth*5/6) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-5');
				}
				else if (sliderPosIn > beforeWidth*5/6 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-5');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
				}
			}

			else if (numberOfImages == 7) {
				if (sliderPosIn > beforeWidth/7 && sliderPosIn < beforeWidth*2/7) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
				else if (sliderPosIn > beforeWidth*2/7 && sliderPosIn < beforeWidth*3/7) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
				else if (sliderPosIn > beforeWidth*3/7 && sliderPosIn < beforeWidth*4/7) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
				else if (sliderPosIn > beforeWidth*4/7 && sliderPosIn < beforeWidth*5/7) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
				else if (sliderPosIn > beforeWidth*5/7 && sliderPosIn < beforeWidth*6/7) {
					$(this).parent().addClass('show-image-5');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-6');
				}
				else if (sliderPosIn > beforeWidth*6/7 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-6');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
			}

			else if (numberOfImages == 8) {
				if (sliderPosIn > beforeWidth/8 && sliderPosIn < beforeWidth*2/8) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*2/8 && sliderPosIn < beforeWidth*3/8) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*3/8 && sliderPosIn < beforeWidth*4/8) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*4/8 && sliderPosIn < beforeWidth*5/8) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*5/8 && sliderPosIn < beforeWidth*6/8) {
					$(this).parent().addClass('show-image-5');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*6/8 && sliderPosIn < beforeWidth*7/8) {
					$(this).parent().addClass('show-image-6');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-7');
				}
				else if (sliderPosIn > beforeWidth*7/8 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-7');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
			}

			else if (numberOfImages == 9) {
				if (sliderPosIn > beforeWidth/9 && sliderPosIn < beforeWidth*2/9) {
					$(this).parent().addClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*2/9 && sliderPosIn < beforeWidth*3/9) {
					$(this).parent().addClass('show-image-2');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*3/9 && sliderPosIn < beforeWidth*4/9) {
					$(this).parent().addClass('show-image-3');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*4/9 && sliderPosIn < beforeWidth*5/9) {
					$(this).parent().addClass('show-image-4');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*5/9 && sliderPosIn < beforeWidth*6/9) {
					$(this).parent().addClass('show-image-5');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*6/9 && sliderPosIn < beforeWidth*7/9) {
					$(this).parent().addClass('show-image-6');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*7/9 && sliderPosIn < beforeWidth*8/9) {
					$(this).parent().addClass('show-image-7');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-8');
				}
				else if (sliderPosIn > beforeWidth*8/9 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-8');
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
				}
				else {
					$(this).parent().removeClass('show-image-1');
					$(this).parent().removeClass('show-image-2');
					$(this).parent().removeClass('show-image-3');
					$(this).parent().removeClass('show-image-4');
					$(this).parent().removeClass('show-image-5');
					$(this).parent().removeClass('show-image-6');
					$(this).parent().removeClass('show-image-7');
					$(this).parent().removeClass('show-image-8');
				}
			}

			else if (numberOfImages == 2) {
				if (sliderPosIn > beforeWidth/2 && sliderPosIn < beforeWidth) {
					$(this).parent().addClass('show-image-1');
				}
				else {
					$(this).parent().removeClass('show-image-1');
				}
			} 
		});

		let touchstartX = 0;
		let touchendX = 0;

		$(this).on('touchstart', e => {
		  touchstartX = e.changedTouches[0].screenX;
		});

		$(this).on('touchend', e => {
		  touchendX = e.changedTouches[0].screenX;

		  if (touchendX < touchstartX) {
		  	if (numberOfImages == 8) {
		  		if ($(this).parent().hasClass('show-image-1')) {
			  		$(this).parent().removeClass('show-image-1');
			  		$(this).parent().addClass('show-image-2');
			  	}
			  	else if ($(this).parent().hasClass('show-image-2')) {
			  		$(this).parent().removeClass('show-image-2');
			  		$(this).parent().addClass('show-image-3');
		  		}
		  		else if ($(this).parent().hasClass('show-image-3')) {
			  		$(this).parent().removeClass('show-image-3');
			  		$(this).parent().addClass('show-image-4');
		  		}
		  		else if ($(this).parent().hasClass('show-image-4')) {
			  		$(this).parent().removeClass('show-image-4');
			  		$(this).parent().addClass('show-image-5');
		  		}
		  		else if ($(this).parent().hasClass('show-image-5')) {
			  		$(this).parent().removeClass('show-image-5');
			  		$(this).parent().addClass('show-image-6');
		  		}
		  		else if ($(this).parent().hasClass('show-image-6')) {
			  		$(this).parent().removeClass('show-image-6');
			  		$(this).parent().addClass('show-image-7');
		  		}
		  		else if ($(this).parent().hasClass('show-image-7')) {
			  		return false;
		  		}
		  		else {
		  			$(this).parent().addClass('show-image-1');
		  		}
		  	}
		  	else if (numberOfImages == 6) {
		  		if ($(this).parent().hasClass('show-image-1')) {
			  		$(this).parent().removeClass('show-image-1');
			  		$(this).parent().addClass('show-image-2');
			  	}
			  	else if ($(this).parent().hasClass('show-image-2')) {
			  		$(this).parent().removeClass('show-image-2');
			  		$(this).parent().addClass('show-image-3');
		  		}
		  		else if ($(this).parent().hasClass('show-image-3')) {
			  		$(this).parent().removeClass('show-image-3');
			  		$(this).parent().addClass('show-image-4');
		  		}
		  		else if ($(this).parent().hasClass('show-image-4')) {
			  		$(this).parent().removeClass('show-image-4');
			  		$(this).parent().addClass('show-image-5');
		  		}
		  		else if ($(this).parent().hasClass('show-image-5')) {
			  		return false;
		  		}
		  		else {
		  			$(this).parent().addClass('show-image-1');
		  		}
		  	}
		  	else if (numberOfImages == 5) {
		  		if ($(this).parent().hasClass('show-image-1')) {
			  		$(this).parent().removeClass('show-image-1');
			  		$(this).parent().addClass('show-image-2');
			  	}
			  	else if ($(this).parent().hasClass('show-image-2')) {
			  		$(this).parent().removeClass('show-image-2');
			  		$(this).parent().addClass('show-image-3');
		  		}
		  		else if ($(this).parent().hasClass('show-image-3')) {
			  		$(this).parent().removeClass('show-image-3');
			  		$(this).parent().addClass('show-image-4');
		  		}
		  		else if ($(this).parent().hasClass('show-image-4')) {
			  		return false;
		  		}
		  		else {
		  			$(this).parent().addClass('show-image-1');
		  		}
		  	}
		  	else if (numberOfImages == 4) {
		  		if ($(this).parent().hasClass('show-image-1')) {
			  		$(this).parent().removeClass('show-image-1');
			  		$(this).parent().addClass('show-image-2');
			  	}
			  	else if ($(this).parent().hasClass('show-image-2')) {
			  		$(this).parent().removeClass('show-image-2');
			  		$(this).parent().addClass('show-image-3');
		  		}
		  		else if ($(this).parent().hasClass('show-image-3')) {
			  		return false;
		  		}
		  		else {
		  			$(this).parent().addClass('show-image-1');
		  		}
		  	}
		  	else if (numberOfImages == 2) {
		  		if ($(this).parent().hasClass('show-image-1')) {
			  		return false;
		  		}
		  		else {
		  			$(this).parent().addClass('show-image-1');
		  		}
		  	}
		  }

		  if (touchendX > touchstartX) {
		  	if ($(this).parent().hasClass('show-image-1')) {
		  		$(this).parent().removeClass('show-image-1');
		  	}
		  	else if ($(this).parent().hasClass('show-image-2')) {
		  		$(this).parent().removeClass('show-image-2');
		  		$(this).parent().addClass('show-image-1');
		  	}
		  	else if ($(this).parent().hasClass('show-image-3')) {
		  		$(this).parent().removeClass('show-image-3');
		  		$(this).parent().addClass('show-image-2');
		  	}
		  	else if ($(this).parent().hasClass('show-image-4')) {
		  		$(this).parent().removeClass('show-image-4');
		  		$(this).parent().addClass('show-image-3');
		  	}
		  	else if ($(this).parent().hasClass('show-image-5')) {
		  		$(this).parent().removeClass('show-image-5');
		  		$(this).parent().addClass('show-image-4');
		  	}
		  	else if ($(this).parent().hasClass('show-image-6')) {
		  		$(this).parent().removeClass('show-image-6');
		  		$(this).parent().addClass('show-image-5');
		  	}
		  	else if ($(this).parent().hasClass('show-image-7')) {
		  		$(this).parent().removeClass('show-image-7');
		  		$(this).parent().addClass('show-image-6');
		  	}
		  }
		});
	});

	/**
	 * Mobile swipe
	 * */

	
  
});

