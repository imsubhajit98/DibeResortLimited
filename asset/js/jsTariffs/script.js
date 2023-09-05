var swipers = new Swiper(".mySwipers", {
    slidesPerView: 1,
    // spaceBetween: 40,
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
        slidesPerView: 1,
        // spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        // spaceBetween: 100,
      },
      1024: {
        slidesPerView: 4,
        // spaceBetween: 40,
      },
    },
  });