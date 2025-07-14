export const smoothScroll = () => {
  $('a[href^="#"]').on("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    
    const speed = 600;
    const headerHeight = 150;
    const href = $(e.currentTarget).attr("href");
    
    if (href === "javascript:void(0);" || href === "javascript:void(0)") {
      return;
    }
    
    let target = $();
    
    if (href === "#" || href === "") {
      target = $("html");
    } else {
      try {
        const idWithoutHash = href.substring(1);
        target = $(`[id="${idWithoutHash}"]`);
        
        if (!target.length && href.includes('%')) {
          const decodedHref = decodeURIComponent(href);
          target = $(`[ez-toc-data-id="${decodedHref}"]`);
        }
        
        if (!target.length) {
          target = $(`span[id="${idWithoutHash}"]`).parent();
        }
        
        if (!target.length) {
          const element = document.getElementById(idWithoutHash);
          if (element) {
            target = $(element);
          }
        }
        
      } catch (error) {
        const idWithoutHash = href.substring(1);
        const element = document.getElementById(idWithoutHash);
        if (element) {
          target = $(element);
        }
      }
    }
    
    if (target.length) {
      $("html, body").stop();
      const position = target.offset().top - headerHeight;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
    }
    
    return false;
  });
  
  if (window.location.hash) {
    setTimeout(() => {
      let target = $();
      const hash = window.location.hash;
      const idWithoutHash = hash.substring(1);
      
      try {
        target = $(`[id="${idWithoutHash}"]`);
        
        if (!target.length && hash.includes('%')) {
          const decodedHash = decodeURIComponent(hash);
          target = $(`[ez-toc-data-id="${decodedHash}"]`);
        }
        
        if (!target.length) {
          const element = document.getElementById(idWithoutHash);
          if (element) {
            target = $(element);
          }
        }
        
      } catch (error) {
        const element = document.getElementById(idWithoutHash);
        if (element) {
          target = $(element);
        }
      }
      
      if (target.length) {
        const headerHeight = 150;
        const position = target.offset().top - headerHeight;
        $("html, body").animate({ scrollTop: position }, 600, "swing");
      }
    }, 50);
  }
};