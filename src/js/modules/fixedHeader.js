export default function fixedHeader() {
  const header = document.querySelector('.header-main');
  if (!header) return;

  const offset = 200; // через сколько пикселей фиксировать

  function onScroll() {
    if (window.scrollY > offset) {
      header.classList.add('is-fixed');
      document.body.style.paddingTop = header.offsetHeight + 'px'; // чтобы контент не прыгал
    } else {
      header.classList.remove('is-fixed');
      document.body.style.paddingTop = '';
    }
  }

  window.addEventListener('scroll', onScroll);
}
