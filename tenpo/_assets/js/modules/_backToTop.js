
export const backToTop = () => {
  const $backToTopBtn = $('.js-toTop');
  const $footer = $('footer');
  
  
  const toggleBackToTopButton = () => {
    const scrollTop = $(window).scrollTop();
    const showThreshold = 10;
    
    if (scrollTop > showThreshold) {
      $backToTopBtn.stop().show().animate({ opacity: 1 }, 300);
    } else {
      $backToTopBtn.stop().animate({ opacity: 0 }, 300, function() {
        $(this).hide();
      });
    }
  };
  
  const positionButton = () => {
    if ($footer.length === 0) return;
    
    const windowHeight = $(window).height();
    const scrollTop = $(window).scrollTop();
    const documentHeight = $(document).height();
    const footerTop = $footer.offset().top;
    const buttonHeight = $backToTopBtn.outerHeight();
    const bottomMargin = 60; 
    
    const distanceFromBottom = documentHeight - (scrollTop + windowHeight);
    const footerHeight = $footer.outerHeight();
    

    if (distanceFromBottom <= footerHeight + bottomMargin) {
      const newBottom = (footerHeight + bottomMargin) - distanceFromBottom;
      $backToTopBtn.css({
        'position': 'fixed',
        'bottom': newBottom + 'px'
      });
    } else {
      $backToTopBtn.css({
        'position': 'fixed',
        'bottom': bottomMargin + 'px'
      });
    }
  };
  
  $(window).scroll(function() {
    toggleBackToTopButton();
    positionButton();
  });
  
  $backToTopBtn.click(function(e) {
    e.preventDefault();
    $('html, body').delay(300).animate({ scrollTop: 0 }, 800);
  });
  
  toggleBackToTopButton();
  positionButton();
};