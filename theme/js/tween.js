$(document).ready(function(e){
	var quienes = $('.quienes h1');
	var flechaAbajo = ('.flecha-abajo')
	TweenMax.set(flechaAbajo, {opacity:0});
	$(".quienes").on("mouseenter", function(){
		TweenMax.to(quienes,1.5, {opacity:"1"});
		
		TweenMax.to(flechaAbajo,1.5,{opacity:1});
	});
});