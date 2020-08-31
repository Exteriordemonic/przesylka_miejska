const Popup = {
  init() {
    console.log('Init Popup');

    this.popup = document.querySelector('[data-popup]');
    this.toggle = document.querySelectorAll('[data-toggle-popup]');

    this.link1 = document.querySelector('[data-one-link]');
    this.link2 = document.querySelector('[data-two-link]');

    this.class = '-is-active';

    if (this.popup && this.toggle) {
      this.addEvents();
    }
  },

  addEvents() {
    this.toggle.forEach(button => {
      button.addEventListener('click', e => {
        const $this = e.currentTarget;

        const link1 = $this.dataset.oneUrl;
        const link2 = $this.dataset.twoUrl;

        this.setLinks(link1, link2);

        this.togglePopup();
        this.toggleScrolls();
      })
    });
  },

  togglePopup() {
    this.popup.classList.toggle(this.class);
  },

  setLinks(link1, link2) {
    this.link1.setAttribute('href', link1);
    this.link2.setAttribute('href', link2);

    console.log(link1, link2);
  },

  toggleScrolls() {
    const owerflow = this.popup.classList.contains(this.class) ? 'hidden' : 'initial';
    document.body.style.overflow = owerflow;
  },
}

export default Popup;
