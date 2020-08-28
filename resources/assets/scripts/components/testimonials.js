import Flickity from 'flickity';

const Testimonials = {
  init() {
    this.testimonials = document.querySelectorAll('[data-testimonials]');
    this.flickity;

    if (this.testimonials.length) {
      this.initTestimonials();

      setTimeout(() => {
        this.icon = document.querySelectorAll('.quotes .flickity-button-icon');

        if (this.icon) {
          this.icon.forEach(e => {
            e.setAttribute('viewBox', '0 0 30 30');
          })

          this.icon[0].setAttribute('transform', 'translate(0, 0) rotate(180)');
          this.icon[1].querySelector('path').setAttribute('transform', 'translate(0, 0) rotate(0)');
        }
      }, 1000);
    }
  },

  initTestimonials() {
    this.flickity = new Flickity('[data-testimonials]', {
      // options, defaults listed

      accessibility: true,
      // enable keyboard navigation, pressing left & right keys

      adaptiveHeight: false,
      // set carousel height to the selected slide

      autoPlay: true,
      // advances to the next cell
      // if true, default is 3 seconds
      // or set time between advances in milliseconds
      // i.e. `autoPlay: 1000` will advance every 1 second

      cellAlign: 'left',
      // alignment of cells, 'center', 'left', or 'right'
      // or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)

      cellSelector: '[data-testimonials-item]',
      // specify selector for cell elements

      contain: false,
      // will contain cells to container
      // so no excess scroll at beginning or end
      // has no effect if wrapAround is enabled

      draggable: '>1',
      // enables dragging & flicking
      // if at least 2 cells

      dragThreshold: 3,
      // number of pixels a user must scroll horizontally to start dragging
      // increase to allow more room for vertical scroll for touch devices

      freeScroll: false,
      // enables content to be freely scrolled and flicked
      // without aligning cells

      friction: 0.2,
      // smaller number = easier to flick farther

      groupCells: false,
      // group cells together in slides

      initialIndex: 0,
      // zero-based index of the initial selected cell

      lazyLoad: true,
      // enable lazy-loading images
      // set img data-flickity-lazyload="src.jpg"
      // set to number to load images adjacent cells

      percentPosition: true,
      // sets positioning in percent values, rather than pixels
      // Enable if items have percent widths
      // Disable if items have pixel widths, like images

      prevNextButtons: true,
      // creates and enables buttons to click to previous & next cells

      pageDots: false,
      // create and enable page dots

      resize: true,
      // listens to window resize events to adjust size & positions

      rightToLeft: false,
      // enables right-to-left layout

      setGallerySize: true,
      // sets the height of gallery
      // disable if gallery already has height set with CSS

      watchCSS: false,
      // watches the content of :after of the element
      // activates if #element:after { content: 'flickity' }

      wrapAround: true,
      // at end of cells, wraps-around to first for infinite scrolling

      arrowShape: 'M14.721,28.88A14.159,14.159,0,1,0,.563,14.721,14.156,14.156,0,0,0,14.721,28.88ZM8.1,12.209h6.623V8.161a.686.686,0,0,1,1.17-.485l6.526,6.56a.679.679,0,0,1,0,.965l-6.526,6.56a.685.685,0,0,1-1.17-.485V17.233H8.1a.687.687,0,0,1-.685-.685V12.894A.687.687,0,0,1,8.1,12.209Z',
    });
  },
}

export default Testimonials;
