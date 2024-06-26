jQuery(document).ready(function($) {

	$.getJSON("/wp-content/themes/odindoma/polls.json", function(data) {
		$('.quote').each(function(){
			var pollID = $('.quote-poll', this).attr('id');

			for (var i = 0; i < data.length; i++) {
				if (pollID == data[i].id) {
					$('.like-votes', this).text(data[i].likes);
					$('.dislike-votes', this).text(data[i].dislikes);
				}
			}

			if ($('.like-votes', this).text() == '0') {
				$('.like', this).addClass('no-votes');
			}

			if ($('.dislike-votes', this).text() == '0') {
				$('.dislike', this).addClass('no-votes');
			}
		});		
	});

	$('.quote-poll').each(function(){
		var pollID = $(this).attr('id');
		if (getCookie(pollID)) {
			if (getCookie(pollID) == 'liked') {
				$(this).addClass('liked');
			}
			else if (getCookie(pollID) == 'disliked') {
				$(this).addClass('disliked');
			}
		}
	});

	$('.like').click(function() {
		var likes = parseInt($('.like-votes', this).text());
		var dislikes = parseInt($(this).siblings('.dislike').children('.dislike-votes').text());

		if ($(this).parent().hasClass('disliked')) {
			$(this).siblings('.dislike').children('.dislike-votes').text(dislikes - 1);	
			if ($(this).siblings('.dislike').children('.dislike-votes').text() == '0') {
				$(this).siblings('.dislike').addClass('no-votes');
			}		
		}

		var pollID = $(this).parent().attr('id');
		var decrease = $(this).parent().hasClass('disliked');
		$.ajax({
      type: "POST",
      url: '/wp-content/themes/odindoma/polls.php',
      data: {button_clicked: 'like', poll_id: pollID, decrease: decrease},
    });

		$(this).parent().removeClass('disliked');
		$(this).parent().addClass('liked');
		$(this).removeClass('no-votes');
		$('.like-votes', this).text(likes + 1);

		setCookie(pollID, 'liked');		
	});

	$('.dislike').click(function() {
		var dislikes = parseInt($('.dislike-votes', this).text());
		var likes = parseInt($(this).siblings('.like').children('.like-votes').text());

		if ($(this).parent().hasClass('liked')) {
			$(this).siblings('.like').children('.like-votes').text(likes - 1);
			if ($(this).siblings('.like').children('.like-votes').text() == '0') {
				$(this).siblings('.like').addClass('no-votes');
			}
		}

		var pollID = $(this).parent().attr('id');
		var decrease = $(this).parent().hasClass('liked');
		$.ajax({
      type: "POST",
      url: '/wp-content/themes/odindoma/polls.php',
      data: {button_clicked: 'dislike', poll_id: pollID, decrease: decrease},
    });

		$(this).parent().removeClass('liked');
		$(this).parent().addClass('disliked');
		$(this).removeClass('no-votes');
		$('.dislike-votes', this).text(dislikes + 1);

		setCookie(pollID, 'disliked');
	});
  
});

function setCookie(key, value) {
  var expires = new Date();
  expires.setTime(expires.getTime() + 2629746000); 
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
  var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
  return keyValue ? keyValue[2] : null;
}

