jQuery(document).ready(function($){

  $('.wysiwyg').each(function(){
  	if ($(this).parent().next().hasClass('wp-block-acf-images-grid') || $(this).next().hasClass('images-grid')) {
  		$(this).css('margin-bottom','40px');
  	}

    if ($(this).parent().prev().hasClass('wp-block-acf-interval') || $(this).prev().hasClass('interval')) {
      $('h2',this).css('margin-top','0');
    }

    $('p').each(function(){
      if ($(this).next().is('ul')) {
        $(this).css('margin-bottom','10px');
      }
    });    
  });
  
});

