
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    // spaceBetween: 10,
    loop:true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      // el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.leftImg',
      prevEl: '.rightImg',
    },
    
    breakpoints: {
  
      450: {
        slidesPerView: 2,
        // spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        // spaceBetween: 100,
      },
      1024: {
        slidesPerView: 5,
        // spaceBetween: 40,
      },
    },
  });