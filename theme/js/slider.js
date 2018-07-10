$(document).ready(function(e){
 $('.prueba').slick({
      slidesToShow:1,
      infinite:false,
      pauseOnHover:false,
      arrows:true,
 	  prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});