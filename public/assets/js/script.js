$(function () {
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

});

$(document).ready(function() {
    $('.hamburger').on('click', function(){
        $('.hamburger').toggleClass('is-active');
        $('.navigation-list').toggleClass('un-active');
    });
    // $(".article-txt").hover(function () {
    //     $(this).toggleClass("article-news-txt");
    //     $(".article-news-p").toggleClass("un-active");
    //  });
    // $(window).scroll(function() {
    //     if ($(document).scrollTop() > 200) {
    //         $("header").addClass("header-bg");
    //         $("header").removeClass("main-nav-header");
    //     } else {
    //         $("header").removeClass("header-bg");
    //         $("header").addClass("main-nav-header");
    //     }
    // });
});

// accordion start
const accordion = document.querySelectorAll(".accordion");

accordion.forEach((element) => {
  element.addEventListener("click", () => {
    element.classList.toggle("toggle");
    let panel = element.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
});

$(document).ready(function(){
  $(".accordion").click(function(){
    $(this).parent().toggleClass('active-border');
  });
});
// accordion end

// slider js
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 24,
  padding: 30,
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

$(document).ready(function() {
    let count = $('.results').length,
        start = 6,
        show = 6;

    $('.results').addClass('d-none');
    $('.results:lt(' + start + ')').removeClass('d-none');

    $('.show-more').click(function(e) {
        e.preventDefault();

        let load = $(this).data('load'),
            more = $(this).data('more');

        start = (start + show <= count) ? start + show : count;

        $(this).text(load);

        setTimeout(() => {

            $('.results:lt(' + start + ')').removeClass('d-none');

            if ($('.results:not(.d-none)').length == count) {
                $(this).parent().remove();
            }

            $(this).text(more);
        }, 1000);

    });

});
