$(function() {
    //do something
      
      $(".btn-round").click({animateIn: "closeButton", animateOut: "plusButton"}, animate_function);
      
      function animate_function(event){
          if( $(this).hasClass(event.data.animateIn) ) {
                $(this).removeClass(event.data.animateIn).addClass(event.data.animateOut);
               }
            else if( $(this).hasClass(event.data.animateOut) ) {
               $(this).removeClass(event.data.animateOut).addClass(event.data.animateIn);
            }
            else {
              $(this).addClass('animated ' + event.data.animateIn);
            }     
      }
      
  //end do something     
	});

// slider js
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  navText: ["<span aria-label='Previous'><i class='fa-sharp fa-solid fa-arrow-left'></i></span>", "<span aria-label='Next'><i class='fa-sharp fa-solid fa-arrow-right'></i></span>"],
  dots: false,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:4,
          nav:true,
          loop:false
      }
  }
})