// Анимация для меню header.php ------------

const $navMenu = document.querySelectorAll('.menu-item');
let delay = 0;

$navMenu.forEach(function (item) {

    item.classList.add('menuAni');
    item.style.animationDelay = `${delay / 3}s`;
    delay++;

});


//------------------------------------------
