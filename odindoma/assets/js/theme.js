jQuery(document).ready(function($) {

	var offsetTopWithMarquee = 0;
	if ($(window).width() < 641) {
		offsetTopWithMarquee = 32;
	}
	else {
		offsetTopWithMarquee = 44;
	}
	var toSummaryOffset = 68 + offsetTopWithMarquee;

	$('.to-summary').click(function(e) {
		e.preventDefault();
		var toSummaryNavElement = document.getElementById('summary');
		var toSummaryElementPosition = toSummaryNavElement.getBoundingClientRect().top;
  	var toSummaryOffsetPosition = toSummaryElementPosition + window.pageYOffset - toSummaryOffset;

		window.scrollTo({
      top: toSummaryOffsetPosition,
      behavior: "smooth"
  	});

  	ym(95640841,'reachGoal','btn-solution');
	});

	$('.to-recipe').click(function(e) {
		e.preventDefault();
		var toRecipeNavElement = document.getElementById('recipe');
		var toRecipeElementPosition = toRecipeNavElement.getBoundingClientRect().top;
  	var toRecipeOffsetPosition = toRecipeElementPosition + window.pageYOffset - offsetTopWithMarquee - 68;

		window.scrollTo({
      top: toRecipeOffsetPosition,
      behavior: "smooth"
  	});
	});

	$('.social-buttons a').click(function() {
  	ym(95640841,'reachGoal','goto-social');
	});

	$('body:not(.page-template-lp) .telegram a').click(function() {
  	ym(95640841,'reachGoal','goto-social');
	});

	$('.share-buttons a').click(function() {
  	ym(95640841,'reachGoal','share-post');
	});

	$('.page-template-lp a').click(function() {
  	ym(96967119,'reachGoal','telegram-btn');
	});

	setTimeout(function()	{
		ym(95640841,'reachGoal','60sec');
	}, 60000);

});