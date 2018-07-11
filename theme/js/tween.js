$(document).ready(function(e){
	var quienes = $('.quienes h1');
	var flechaAbajo = $('.flecha-abajo')
	var tl = new TimelineMax({});
	tl.set(flechaAbajo, {opacity:0, y:100,repeat:-1,yoyo:true});
	$(".quienes").on("mouseenter", function(){
		tl.to(quienes,1.5, {opacity:"1"});		
		tl.to(flechaAbajo,1.5,{opacity:1,y:0,repeat:-1,yoyo:true},'+1');
			
	});

});