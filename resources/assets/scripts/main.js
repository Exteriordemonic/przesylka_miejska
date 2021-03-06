// import external dependencies
import 'jquery';
import AOS from 'aos';
import 'select2';
import './components/smooth';

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
import Count from './components/count';
import Popup from './components/popup';
import Form from './components/form';
import Cookie from './components/cookies';

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
    Count.init();
    Popup.init();
    Form.init();
    Cookie.init();

    window.dispatchEvent(new Event('resize'));
    $('.select').select2({
      minimumResultsForSearch: -1,
      placeholder: 'Wybierz miejscowość z listy',
    });
    AOS.init();

  }, 300)
});
