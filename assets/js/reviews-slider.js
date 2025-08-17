document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".reviews-swiper", {
    slidesPerView: 1,
    // spaceBetween: 60,
    loop: true,
    effect: "coverflow",
    coverflowEffect: {
      rotate: 30,      // угол наклона слайдов
      stretch: 0,      // растяжение по оси
      depth: 200,      // глубина 3D
      modifier: 1,     // мультипликатор эффекта
      slideShadows: false // тени слайдов
    },
    navigation: {
      nextEl: ".reviews__button-next",
      prevEl: ".reviews__button-prev",
    },
    pagination: {
      el: ".reviews-pagination",
      clickable: true,
    },
  });
});
