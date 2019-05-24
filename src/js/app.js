const hamburgerButton = document.querySelector('.header__hamburger');
const nav = document.querySelector('.navigation');

const testimonialsItem = document.querySelector('.carousel-item--testimonials');
const testimonialsIndicator = document.querySelector(
  '.carousel__indiactior--testimonials'
);
const sliderItem = document.querySelector('.carousel-item--offer');
const sliderIndicator = document.querySelector('.carousel__indiactior');

hamburgerButton.addEventListener('click', () => {
  hamburgerButton.classList.toggle('active');
  nav.classList.toggle('active');
  document.body.classList.toggle('-js-nav-is-open');
});

testimonialsItem.classList.add('active');

sliderItem.classList.add('active');

testimonialsIndicator.classList.add('active');

sliderIndicator.classList.add('active');
