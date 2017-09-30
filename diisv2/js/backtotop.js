$(window).scroll(function(){
	if($(window).scrollTop() > 100){
		$('a.back-to-top').fadeIn('slow');
	}
	else{
	$('a.back-to-top').fadeOut('slow');	
	}


})