/**
 *
 * Общие js функции
 *
 */
document.querySelector('.navbar-toggle').addEventListener('click', function () {
    let navbarMenu = document.querySelector('.navbar-menu');
    navbarMenu.classList.toggle('open');
})


// Клики на меню ---------------------------

const $navItems = document.querySelectorAll('.menu-item');

$navItems.forEach(function (item) {

    if (item.classList.contains('active')) {
        item.classList.remove('active');
    }

    item.addEventListener('click', function () {

        this.classList.add('active');
        // debugger
    });
});

//------------------------------------------

// Popup-login и валидация -----------------

const $logIn = document.querySelector('.user-box__login');
const $popupLog = document.querySelector('.popup-log');
const $logForm = document.querySelector('.popup-log__form');


$logIn.addEventListener('click', function () {
    if ($popupLog.classList.contains('open')) {
        $popupLog.classList.remove('open');
        $popupLog.style.opacity = 0;
        $errorPass.style.opacity = 0;
        $errorLogin.style.opacity = 0;
        $logForm.reset();
    } else {
        $popupLog.classList.add('open');
        $popupLog.style.opacity = 1;
    }
});

const $errorLogin = document.querySelector('.error-login');
const $errorPass = document.querySelector('.error-pass');

function checkFormLogin(form) {
    let e = 0;

    for (let i = 0; i < form.length - 1; i++) {

        if (!form[i].value.replace(/^\s+|\s+$/g, '') && i == 0) {
            $errorLogin.style.opacity = 1;
        } else if (!form[i].value.replace(/^\s+|\s+$/g, '') && i == 1) {
            $errorPass.style.opacity = '1';
        }

        if (form[i].value.replace(/^\s+|\s+$/g, '') && i == 0) {
            $errorLogin.style.opacity = 0;
        } else if (form[i].value.replace(/^\s+|\s+$/g, '') && i == 1) {
            $errorPass.style.opacity = 0;
        }

        if (form[0].value.replace(/^\s+|\s+$/g, '') && form[1].value.replace(/^\s+|\s+$/g, '')) {
            e = 1;
        }
    }

    if (!e) {
        return false
    }
}

//------------------------------------------