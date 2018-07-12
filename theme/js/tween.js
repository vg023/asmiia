$(document).ready(function(e){
	var quienes = $('.quienes h1');
	var flechaAbajo = $('.flecha-abajo')
	var tl = new TimelineMax({});
	tl.set(flechaAbajo, {opacity:0, y:100,repeat:-1,yoyo:true});
	$(".quienes").on("mouseenter", function(){
		tl.to(quienes,1.5, {opacity:"1"});		
		tl.to(flechaAbajo,1.5,{opacity:1,y:0,repeat:-1,yoyo:true},'+1');		
	});
	$(".noticias").each(function(){
		var conte = $(this).find("div#content");		
		console.log(conte);
		tl2= new TimelineMax({});
		tl2.set(conte, {opacity:"0"});
		tl2.set( $(".pub .container"), {x:500,y:500,opacity:"0"});	
		tl2.set( $(".art .container-fluid .col"), {x:500,y:500,opacity:"0"});	
	
		$(window).on("scroll",function(e){
			if($(this).scrollTop()>=$(".art").position().top)
			{
				tl2.to( $(".art .container-fluid .col"), 2, {x:0,y:0,opacity:"1"});
			}
		});

	});

});
