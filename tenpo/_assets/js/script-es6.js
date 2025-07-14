import { polyfill } from "./modules/_polyfill";
// import { viewport } from './modules/_viewport';
import { btnFunc } from "./modules/_btnFunc";
// import { getSearchParams } from './modules/_getSearchParams';
import { accordion } from "./modules/_accordion";
import { accordionTestimoniesDetail } from "./modules/_accordionTestimoniesDetail";
import { backToTop } from './modules/_backToTop';
// import { checkView } from './modules/_checkView';
// import { customSelect } from './modules/_customSelect';
// import { modal } from './modules/_modal';
import { smoothScroll } from "./modules/_smoothScroll";
// import { stickyHeader } from './modules/_stickyHeader';
import { openModal } from './modules/_secSolutionBtn';
import { swiperSlider } from "./modules/_swiperSlider";
import { hamMenuToggle } from "./modules/_hamMenuBtn";
import { wowEffects } from './modules/_wowEffects';
// import { smoothScrollVs } from './modules/_smoothScrollVs';
// import { sampleArray } from './modules/_sampleArray';
import { toggle } from './modules/_toggle';
import { tocToggle } from "./modules/_tocToggle";



$(function () {
  toggle();
  tocToggle();
  backToTop();
  swiperSlider();
  polyfill();
  smoothScroll();
  // smoothScrollVs()
  // sampleArray();  
  // viewport();
  btnFunc();
  wowEffects();
  accordion();
  accordionTestimoniesDetail();
  // customSelect();
  // modal();
  openModal();
  hamMenuToggle();
});

// $(window).on('load resize scroll', function () {
//   checkView();
//   stickyHeader();
// });
