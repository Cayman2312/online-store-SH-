// Анимация для меню header.php ------------

const $navMenu = document.querySelectorAll('.menu-item');
const $navMenuLog = document.querySelector('.user-box__login');
const $navMenuBasket = document.querySelector('.user-box__basket');
let delay = 0;

$navMenu.forEach(function (item) {

    item.classList.add('menuAni');
    item.style.animationDelay = `${delay / 3}s`;
    delay++;

});

$navMenuLog.classList.add('centre');
$navMenuBasket.classList.add('centre');


//------------------------------------------

// Валидация для subscribe -----------------

const $subError = document.querySelector('.subscribe__error');

function checkFormSubscribe(form) {
    if (!form[0].value.replace(/^\s+|\s+$/g, '')) {
        $subError.style.opacity = 1;
        return false;
    } else {
        $subError.style.opacity = 0;
        alert('Поздравляем тебя, подписота! ;)')
    }
}

function checkKeyupFormSubscribe(form) {
    if (form[0].value.replace(/^\s+|\s+$/g, '')) {
        $subError.style.opacity = 0;
    }
}

//------------------------------------------

// Delay для offerItems --------------------

const $offerItems = document.querySelectorAll('.offer .item');
delay = 0;

$offerItems.forEach(function (item) {
    item.style.animationDelay = `${delay / 3}s`;
    delay++;
})

//------------------------------------------
