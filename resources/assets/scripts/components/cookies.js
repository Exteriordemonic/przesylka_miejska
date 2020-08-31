import Cookies from 'js-cookie'

const Cookie = {
  init() {
    this.cookies = document.querySelector('[data-cookies]');
    this.toggle = document.querySelector('[data-cookies-accept]');

    this.class = '-is-active';

    if (this.cookies && this.toggle) {
      this.addEvents();
    }
  },

  addEvents() {
    this.toggle.addEventListener('click', () => {
      this.toggleCookies();
      this.setCookies();
    })
  },

  toggleCookies() {
    this.cookies.classList.toggle(this.class);
  },

  setCookies() {
    Cookies.set('cookie-accept', 'true');
  },
}

export default Cookie;
