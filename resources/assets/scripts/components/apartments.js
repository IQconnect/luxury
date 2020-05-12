const Flickity = require('flickity');

// deklarowanie obiektu
const apartments = {
  init() {
    this.apartments = new Flickity('.apartments__slider', {
      groupCells: 1,
      friction: 0.5,
      cellAlign: 'left',
      prevNextButtons: false,
      pageDots: false,
      draggable: true,
    });
    this.resize();

    const nextButton = document.querySelector('.next');
    const prevButton = document.querySelector('.prev');
    const line = document.querySelector('.progress');
    line.style.width ='0%';
    let count = this.apartments.slides.length;
    let index = 1;
    let precent = 100;

    nextButton.addEventListener('click', (event) => {
      event.preventDefault();
      count = this.apartments.slides.length;
      this.apartments.next();

      index = this.apartments.selectedIndex+1;

      precent = 100/(count-1);
      precent = precent*(index-1);
      line.style.width = precent+'%';

      prevButton.classList.remove('apartments__button--disabled');

      if(index == count) {
        nextButton.classList.add('apartments__button--disabled');
      }
    });

    prevButton.addEventListener('click', (event) => {
      event.preventDefault();
      count = this.apartments.slides.length;
      this.apartments.previous();

      index = this.apartments.selectedIndex+1;

      precent = 100/(count-1);
      precent = precent*(index-1);
      line.style.width = precent+'%';

      nextButton.classList.remove('apartments__button--disabled');

      if(index == 1) {
        prevButton.classList.add('apartments__button--disabled');
      }
    });

    this.apartments.on('scroll', (progress) => {
      progress = Math.max(0, Math.min(1, progress))
      precent = progress*100;
      console.log(progress);
      line.style.width = precent+'%';
    }),

    this.apartments.on('dragEnd', () => {
      count = this.apartments.slides.length;
      index = this.apartments.selectedIndex+1;
      precent = 100/(count-1);
      precent = precent*(index-1);
      //line.style.width = precent+'%';

      prevButton.classList.remove('apartments__button--disabled');
      nextButton.classList.remove('apartments__button--disabled');

      if(index == count) {
        nextButton.classList.add('apartments__button--disabled');
      }

      if(index == 1) {
        prevButton.classList.add('apartments__button--disabled');
      }
    });
  },

  resize() {
    window.onload = () => {
      this.apartments.resize();
    };
  },
}

export default apartments;