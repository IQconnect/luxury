// import external dependencies
//import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import hamburger from './components/hamburger';
import header from './components/header';
import apartments from './components/apartments';
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
  preloader.init();
  hamburger.init();
  wp_block_gallery.init();
  apartments.init();
});
