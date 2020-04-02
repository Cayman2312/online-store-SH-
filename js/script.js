/**
 * 
 * Общие js функции
 * 
 */
document.querySelector('.navbar-toggle').addEventListener('click', function () {
  let navbarMenu = document.querySelector('.navbar-menu');
  navbarMenu.classList.toggle('open');
})