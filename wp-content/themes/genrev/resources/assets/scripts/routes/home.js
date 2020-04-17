export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 30) {
          $('.banner').addClass('fixed-header');
        }
        else {
          $('.banner').removeClass('fixed-header');
        }

        if ($(window).scrollTop() >= 300) {
          $('.brand').addClass('brand-scrolled');
        }
        else {
          $('.brand').removeClass('brand-scrolled');
        }
    });

    $('.event-slider').slick({
      infinite: true,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      nextArrow: '<i class="fas fa-chevron-right"></i>',
      prevArrow: '<i class="fas fa-chevron-left"></i>',
      slidesToShow: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            autoplay: false,
            autoplaySpeed: 10000,
          },

        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
          },
        },
      ],
    });
  },
};
