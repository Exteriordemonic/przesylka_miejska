// import external dependencies
import 'jquery';
import AOS from 'aos';

// import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// import Components
import citySwap from './components/citySwap';
import Testimonials from './components/testimonials';

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

  setTimeout(() => {
    citySwap.init();
    Testimonials.init();

    window.dispatchEvent(new Event('resize'));
    AOS.init();
  }, 300)
});
