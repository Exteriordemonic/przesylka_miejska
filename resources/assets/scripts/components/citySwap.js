const citySwap = {
  init() {
    this.city = document.querySelectorAll('[data-city-swap]');

    this.current = 0;
    this.length = this.city.length - 1;
    this.time = 2000;

    this.class = '-is-active';

    console.log(this.city);

    if (this.length) {
      this.loop();
      this.city[this.current].classList.add(this.class);
    }
  },

  itteration() {
    this.current++;

    if (this.current > this.length) {
      this.current = 0;
    }
  },

  loop() {
    setInterval(() => {
      this.itteration();
      this.changeClass();
    }, this.time);
  },

  changeClass() {
    this.city.forEach(element => {
      element.classList.remove(this.class);
    });

    this.city[this.current].classList.add(this.class);
  },
}

export default citySwap;
