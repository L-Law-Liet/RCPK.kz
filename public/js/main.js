$(document).ready(function () {

  // Show menu
  $('.navbar-toggle').click(function() {
    $('.overlay').fadeToggle();
    $('.header__box').toggleClass('open');
  });

  $(document).click(function(event) {
    if ($(event.target).closest('.navbar-toggle').length 
      || $(event.target).closest('.header__box').length ) return;
      $('.overlay').fadeOut();
      $('.header__box').removeClass('open');
      event.stopPropagation();
  });

  // Modal
  $('.open-modal-btn').on('click', function() {
    $('.modal_code').fadeIn();
  });

  $('.modal__close').on('click', function() {
    $('.modal').fadeOut();
  });

  $(document).click(function(event) {
    if ($(event.target).closest('.open-modal-btn').length 
      || $(event.target).closest('.modal__box').length ) return;
      $('.modal').fadeOut();
      event.stopPropagation();
  });

  // Intro sl
  $('.intro__sl').slick({
    arrows: true,
    autoplay: true,
    slidesToShow: 1,
    autoplaySpeed: 5000,
    dots: true,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'),
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: false
        }
      }
    ]
  });

  // Associate sl
  $('.associate__sl').slick({
    arrows: true,
    autoplay: true,
    slidesToShow: 8,
    autoplaySpeed: 5000,
    dots: false,
    prevArrow: '<button class="slick-prev"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 443.52 443.52"><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"/></svg></button>',
    nextArrow: '<button class="slick-next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005"><path d="M388.418,240.923L153.751,6.256c-8.341-8.341-21.824-8.341-30.165,0s-8.341,21.824,0,30.165L343.17,256.005L123.586,475.589c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251l234.667-234.667C396.759,262.747,396.759,249.264,388.418,240.923z"/></svg></button>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 6
        }
      },{
        breakpoint: 992,
        settings: {
          slidesToShow: 4
        }
      },{
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },{
        breakpoint: 576,
        settings: {
          slidesToShow: 2
        }
      },{
        breakpoint: 360,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

});