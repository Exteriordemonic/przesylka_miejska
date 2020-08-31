const Form = {
  init() {
    this.form = document.querySelector('[data-form]');

    this.link1 = 'https://trojmiasto.przesylkamiejska.pl/moje-konto/';
    this.link2 = 'https://bydgoszcz.przesylkamiejska.pl/moje-konto/';

    if (this.form) {
      this.select = this.form.querySelector('[name="city"]');
      this.addEvents();
    }
  },

  addEvents() {
    this.form.addEventListener('submit', e => {
      e.preventDefault();

      const value = this.select.value;

      const url = value === 'Bydgoszcz i Toruń' ? this.link2 : this.link1;

      window.location.href = url;
      console.log(value);
    })
  },
}

export default Form;
