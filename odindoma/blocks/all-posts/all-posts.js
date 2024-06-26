jQuery(document).ready(function($){

	let currentPage = 1;
	$('#load-more').on('click', function(e) {
		e.preventDefault();
	  currentPage++;
	  $('#load-more').html('<span>загружаем</span><span class="dot-flashing"></span>');

	  $.ajax({
	    type: 'POST',
	    url: '/wp-admin/admin-ajax.php',
	    dataType: 'html',
	    data: {
	      action: 'all_posts_load_more',
	      paged: currentPage,
	    },
	    success: function (res) {
	      $('.all-posts .posts').append(res);
	      $('#load-more').html('<span>показать еще</span>');
	    }
	  });
	});
  
});

