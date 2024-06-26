jQuery(document).ready(function($){

  $('.interval').each(function(){
    if($('body').hasClass('wp-admin')) {
      $(this).parent().prev().css('margin-bottom','0');  
    }

    else {
      $(this).prev().css('margin-bottom','0');  
    }
    
  });
  
});

