// import external dependencies
//import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

//import header from './components/header';
import hamburger from './components/hamburger';
import header from './components/header';
//import submenu from './components/submenu';
import menu from './components/menu';
//import slider from './components/slider';
import apartments from './components/apartments';
//import banner from './components/banner';
//import products from './components/products';
import preloader from './components/preloader';
import wp_block_gallery from './components/wp-block-gallery';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  header.init();
  //submenu.init();
  menu.init();
  preloader.init();
  hamburger.init();
  wp_block_gallery.init();
  //new WOW.WOW.init();
  apartments.init();
  // if($('.main-carousel').length) {
  //   slider.init();
  // }
  // if($('.apartments__slider').length) {
  //   apartments.init();
  // }
  // if($('.banner-carousel').length) {
  //   banner.init();
  // }
  // if($('.products-carousel').length) {
  //   products.init();
  // }
});

// setTimeout(()=>{
//   window.dispatchEvent(new Event('resize'));
//   }, 1000)
