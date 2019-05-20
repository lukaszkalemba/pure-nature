const hamburgerButton = document.querySelector('.header__hamburger');
const nav = document.querySelector('.nav');

hamburgerButton.addEventListener('click', () => {
  hamburgerButton.classList.toggle('active');
  nav.classList.toggle('active');
  document.body.classList.toggle('-js-nav-is-open');
});
