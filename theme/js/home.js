$(document).ready(function(){
	$('.flecha-abajo').on("click",function(){
		$('.quienes').toggleClass('comprimido');
		$(this).fadeOut();
	});
	$('.flecha-arriba').on("click",function(){
		$('.quienes').toggleClass('comprimido');
		$('.flecha-abajo').fadeIn();
	});
	
});