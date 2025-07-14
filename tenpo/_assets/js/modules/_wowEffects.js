export const wowEffects = () => {
  const ua = window.navigator.userAgent;

  const wowInit = () => {
    if (typeof WOW !== 'undefined') {
      const wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animate__animated', // Animate.css v4+
        offset: 100,
        mobile: true,
        live: true,
        scrollContainer: null,
        resetAnimation: false
      });
      wow.init();
    } else {
      console.warn('WOW.js not found.');
    }
  };

  // Internet Explorer
  if (ua.indexOf('Trident') !== -1 || ua.indexOf('MSIE') !== -1) {
    $(window).on('load', wowInit);
  } else {
    wowInit();
  }
};