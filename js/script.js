$(function () {
  //do something

  $(".btn-round").click(
    { animateIn: "closeButton", animateOut: "plusButton" },
    animate_function
  );

  function animate_function(event) {
    if ($(this).hasClass(event.data.animateIn)) {
      $(this).removeClass(event.data.animateIn).addClass(event.data.animateOut);
    } else if ($(this).hasClass(event.data.animateOut)) {
      $(this).removeClass(event.data.animateOut).addClass(event.data.animateIn);
    } else {
      $(this).addClass("animated " + event.data.animateIn);
    }
  }

  //end do something
});

// slider js
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 24,
  width: 3300,
  navText: [
    "<span aria-label='Previous'><i class='fa-sharp fa-solid fa-arrow-left'></i></span>",
    "<span aria-label='Next'><i class='fa-sharp fa-solid fa-arrow-right'></i></span>",
  ],
  dots: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      loop: false,
    },
    768: {
      items: 2,
      nav: true,
      loop: false,
      autoHeight: true,
    },
    992: {
      items: 3,
      nav: true,
      loop: false,
      margin: 15,
      autoHeight: true,
    },
    1200: {
      items: 3,
      nav: true,
      loop: false,
      margin: 20,
      autoHeight: true,
    },
    1400: {
      items: 4,
      margin: 24,
      nav: true,
      loop: false,
    },
  },
});
