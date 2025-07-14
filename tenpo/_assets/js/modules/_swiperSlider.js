export const swiperSlider = () => {
  let swiperClass = document.querySelectorAll('.secCompanies__slider');

  if (swiperClass.length > 0) {
    const swiperWrapper = document.querySelector('.secCompanies__slider .swiper-wrapper');

    if (swiperWrapper) {
      const originalSlides = Array.from(swiperWrapper.children);

      // Duplicate slides 2 more times (total 3x)
      for (let i = 0; i < 2; i++) {
        originalSlides.forEach(slide => {
          const clonedSlide = slide.cloneNode(true);
          swiperWrapper.appendChild(clonedSlide);
        });
      }

      // Initialize Swiper after tripling
      const slider01 = new Swiper('.secCompanies__slider', {
        autoplay: {
          delay: 1,
          disableOnInteraction: false
        },
        freeMode: true,
        speed: 4000,
        slidesPerView: 'auto',
        centeredSlides: false,
        spaceBetween: 40,
        loop: true,
        breakpoints: {
          769: {
            spaceBetween: 80
          }
        }
      });
    }
  }

  
  let swiperClass02 = document.querySelectorAll('.secMobile__slider');

  if (swiperClass02.length > 0) {
    const swiperWrapper = document.querySelector('.secMobile__slider .swiper-wrapper');

    if (swiperWrapper) {
      const originalSlides = Array.from(swiperWrapper.children);

      // Duplicate slides 2 more times (total 3x)
      for (let i = 0; i < 2; i++) {
        originalSlides.forEach(slide => {
          const clonedSlide = slide.cloneNode(true);
          swiperWrapper.appendChild(clonedSlide);
        });
      }

      // Initialize Swiper after tripling
      const slider02 = new Swiper('.secMobile__slider', {
        autoplay: {
          delay: 1,
          disableOnInteraction: false
        },
        freeMode: true,
        speed: 4000,
        slidesPerView: 'auto',
        centeredSlides: false,
        spaceBetween: 50,
        loop: true,
        breakpoints: {
          0: {
            spaceBetween: 30,
          },
          769: {
            spaceBetween: 50,
          }
        }
      });
    }
  }

  let swiperClass03 = document.querySelectorAll('.common-swiper');

  if (swiperClass03.length > 0) {
    const slider03 = new Swiper('.common-swiper', {
      direction: 'horizontal',
      autoHeight: false,
      grabCursor: false,
      watchOverflow: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      speed: 800,
      loop: false,
      spaceBetween: 16,
      slidesPerView: 1,
      slidesPerGroup: 1,
      centeredSlides: false,
      preloadImages: true,
      lazy: false,
      effect: 'slide',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next',
      },
    });
  }
};
