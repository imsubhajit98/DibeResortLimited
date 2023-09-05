const swiperEl = document.querySelector('swiper-container')
    Object.assign(swiperEl, {
      slidesPerView: "auto",
      spaceBetween: 60,
      pagination: {
        clickable: true,
      },
      loop: true,
      autoplay: {
      delay: 1000,
    },
   
      breakpoints: {
        480: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
    swiperEl.initialize();


var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 2,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true
    },
    spaceBetween: 60,
    loop: true,
    autoplay: {
      delay: 1000,
    },
    pagination: {
      el: ".swiper-pagination",
      // clickable: true
    }
  });
  
  


      
  var date = new Date();
  var year = date.getFullYear();
  var month = String(date.getMonth()+1).padStart(2,'0');
  var todayDate = String(date.getDate()).padStart(2,'0');
  var datePattern = year + '-' + month + '-' + todayDate;
  document.getElementById("date2").value = datePattern;
  
  var nextDate = String(date.getDate()+1).padStart(2,'0');
  var datePattern1 = year + '-' + month + '-' + nextDate;
  document.getElementById("date3").value = datePattern1;



  


 