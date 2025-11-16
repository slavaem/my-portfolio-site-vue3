//swiper slider
new Swiper('.swiper1', {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 10,
    breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  },
  loopAdditionalSlides: 1,
  // Вывод стрелок навигации
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  pagination: {
    el: '.swiper-pagination',
	clickable: true,
  },
    // Вывод скроллбара
  scrollbar: {
    el: '.swiper-scrollbar',
     draggable: true
  },

  
	
  });
  
  new Swiper('.swiper2', {
  slidesPerView: 1,
  loop: true,
  centeredSlides: true,
  spaceBetween: 0,
    breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 0
    },
	370: {
      slidesPerView: 3,
      spaceBetween: 0
    },
	610: {
      slidesPerView: 4,
      spaceBetween: 0
    },
	 910: {
      slidesPerView: 5,
      spaceBetween: 0
    },
	1320: {
      slidesPerView: 6,
      spaceBetween: 0
    }
  },
  loopAdditionalSlides: 1,
  // Вывод стрелок навигации
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  pagination: {
    el: '.swiper-pagination',
	clickable: true,
  },
    // Вывод скроллбара
  scrollbar: {
    el: '.swiper-scrollbar',
     draggable: true
  },
	
  });
//slikslider
$(document).ready(function(){
      $('.exhibitions__slider').slick({
       infinite: true,
	   draggable: true,
	   arrows: true,
	   dots: true,
	   appendArrows:'.slider-nav',
	   prevArrow: ".arrow-left",
       nextArrow: ".arrow-right",
      appendDots: '.slider-dots',
      slidesToShow: 3,
      slidesToScroll: 1,
	  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 361,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
 });