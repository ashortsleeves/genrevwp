export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
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
          breakpoint: 990,
          settings: {
            autoplay: true,
            autoplaySpeed: 5000,
          },
        },
      ],
    });
  },
};
