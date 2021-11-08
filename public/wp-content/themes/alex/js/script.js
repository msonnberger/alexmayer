const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', () =>  {
  hamburger.classList.toggle('is-active');
  document.querySelector('section#top-nav nav').classList.toggle('is-active');
});