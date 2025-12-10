$(document).ready(function () {
  // 1. MAIN SLIDER (Верхний)
  $('.main-slider').slick({
    infinite: true,
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,

    draggable: true,
    touchMove: true,
    variableWidth: true,
    adaptiveHeight: false,
    appendArrows: '.main-slider-nav',
    appendDots: '.main-dots',
    prevArrow: $('.main-prev'),
    nextArrow: $('.main-next'),

    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          centerMode: false,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          variableWidth: true,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          centerMode: true,
          variableWidth: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
        },
      },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
        },
      },
    ],
  })

  // 2. SWIPER
  new Swiper('.swiper2', {
    loop: true,
    centeredSlides: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper2-next',
      prevEl: '.swiper2-prev',
    },
    pagination: {
      el: '.swiper2-pagination',
      clickable: true,
    },
    breakpoints: {
      320: { slidesPerView: 2 },
      370: { slidesPerView: 3 },
      610: { slidesPerView: 4 },
      910: { slidesPerView: 5 },
      1320: { slidesPerView: 6 },
    },
    loopAdditionalSlides: 1,
  })

  // 3. EXHIBITIONS SLIDER (Нижний)
  $('.exhibitions__slider').slick({
    infinite: true,
    draggable: true,
    arrows: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    appendArrows: '.slider-nav',
    appendDots: '.exh-dots',
    prevArrow: $('.exh-prev'),
    nextArrow: $('.exh-next'),

    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 361,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  })
})
