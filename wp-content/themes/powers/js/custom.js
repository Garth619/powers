

jQuery(document).ready(function(){



jQuery('.video_wrapper').mouseenter(function(){
	
	jQuery('img.play_hover').fadeIn(200);
	
});


jQuery('.video_wrapper').mouseleave(function(){
	
	jQuery('img.play_hover').fadeOut(200);
	
});


}); // Document Ready

