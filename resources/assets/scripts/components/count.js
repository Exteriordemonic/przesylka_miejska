import {
  CountUp,
} from 'countup.js';

const Count = {
  init() {
    this.counters = document.querySelectorAll('[data-counter]');
    this.options = {
      separator: ' ',
    };

    if (this.counters) {
      setTimeout(() => {
        this.offset = this.counters[0].getBoundingClientRect().top - 300;
        this.count();
      }, 1000);
    }
  },

  count() {
    const c = [];
    this.counters.forEach(element => {
      c.push(new CountUp(element, element.dataset.counter, this.options));
    });

    window.addEventListener('scroll', () => {

      if (window.scrollY > this.offset) {
        c.forEach(element => {
          element.start();
        })
      }
    })
  },
}

export default Count;
