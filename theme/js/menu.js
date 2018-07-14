    $(document).ready(function(){
   	if ( $(window).width()>=760) {
   		$(window).on("scroll",function(e){
			if($(window).scrollTop()>200){
				$('#nav-main').fadeOut('slow');
			}else{
				$('#nav-main').fadeIn('fast');
			}
		});	
   	} 	
	
	$(".menu-item-has-children").on("mouseenter",function(e){
		$(this).children('.sub-menu').show();
	});
	$(".menu-item-has-children").on("mouseleave",function(e){
		$('.sub-menu').hide();
	});
	console.log($(window).innerHeight());
	console.log($(window).outerHeight());
});