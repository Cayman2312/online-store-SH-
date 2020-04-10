// Окно уведомлений -----------------------

const $notice = document.querySelector('.notice-popup');

function notice (response) {
    $notice.classList.add('noticeAni');
    $notice.innerHTML = `<p>${response}</p>`;

    setTimeout(() => {
        $notice.classList.remove('noticeAni');
        $notice.innerHTML = '';
    }, 3000);
}

//-----------------------------------------


document.querySelector('.navbar-toggle').addEventListener('click', function () {
    let navbarMenu = document.querySelector('.navbar-menu');
    navbarMenu.classList.toggle('open');
});


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
const $logClose = document.querySelector('.popup-log__close');
const $popupLog = document.querySelector('.popup-log');
const $logForm = document.querySelector('.popup-log__form');
const $logSubmit = document.querySelector('.popup-log__form [type="submit"]');

// Toggle авторизации
$logIn.addEventListener('click', function () {
    if ($popupLog.classList.contains('open')) {
        $popupLog.classList.remove('open');
        $popupLog.style.opacity = 0;
        $popupLog.style.display = 'none';

        $logSubmit.disabled = true;
        $logForm.reset();

    } else {
        $popupLog.classList.add('open');
        $popupLog.style.display = 'block';

        setTimeout(function () {
            $popupLog.style.opacity = 1;
        }, 10);
    }

    // Кнопка Close
    $logClose.addEventListener('click', () => {
        if ($popupLog.classList.contains('open')) {
            $popupLog.classList.remove('open');
            $popupLog.style.opacity = 0;
            $popupLog.style.display = 'none';

            $logSubmit.disabled = true;
            $logForm.reset();
        }

    });
});

//Валидация
function checkFormLog(form) {
    let errorsCounter = 0;

    for (let i = 0; i < form.length - 1; i++) {

        if (!form[i].value.replace(/^\s+|\s+$/g, '')) {
            errorsCounter++;
        }
    }

    if (!errorsCounter > 0) {
        form[form.length - 1].disabled = false;
    } else {
        form[form.length - 1].disabled = true;
    }
};

//------------------------------------------

// Попап регистрации нового пользователя ---

const $regHref = document.querySelector('.reg-href');
const $regBack = document.querySelector('.registration');
const $regPopup = document.querySelector('.registration__popup');
const $regPopupEl = $regPopup.getElementsByTagName('*');
const $regClose = document.querySelector('.registration__close');
const $errorReg = document.querySelector('.registration__error');
const $regPass = document.querySelector('.registration__popup [name="pass"]');
const $regPassCheck = document.querySelector('.registration__popup [name="pass-check"]');

// Ссылка на регистрацию
$regHref.addEventListener('click', function () {
    $regBack.style.display = 'block';
    setTimeout(function () {
        $regBack.style.bottom = '-100%';
    }, 100);

    setTimeout(function () {
        $regPopup.style.display = 'block';

        setTimeout(function () {
            $regPopup.style.opacity = 1;

        }, 100);

    }, 500);
});

// Кнопка Close
$regClose.addEventListener('click', function () {
    $regBack.style.bottom = '0%';
    $regBack.style.display = 'none';
    $regPopup.style.opacity = 0;
    $regPopup.style.display = '';
    $errorReg.style.opacity = 0;

    for (let i = 0; i < $regPopupEl.length - 1; i++) {
        $regPopupEl[i].style.borderLeft = '';
    }

    $regPopup.reset();
});

// Валидация submit
function chekFormReg(form) {
    let e = 0;

    for (let i = 0; i < form.length - 1; i++) {
        if (!form[i].value.replace(/^\s+|\s+$/g, '')) {
            form[i].style.borderLeft = '2px solid red';
            $errorReg.style.opacity = 1;
            e = 1;
        }
    }

    if (e) {
        return false;
    }

    if (!form['agree'].checked) {
        alert('Либо за меня выходи, либо закрой страницу! xD');
        return false;
    }

    if ($regPass.value !== $regPassCheck.value) {
        alert('Пароли не совпадают');
        return false;
    }

    alert('Поздравляю с регистрацией нашего брака! :D');
}

// Валидация keyup
function checkKeyupFormReg(form) {
    for (let i = 0; i < form.length - 1; i++) {
        if (form[i].value.replace(/^\s+|\s+$/g, '')) {
            form[i].style.borderLeft = '';
            $errorReg.style.opacity = 0;
        }
    }
}


//------------------------------------------


// Форма забытого пароля -------------------

const $forgotHref = document.querySelector('.forgot-href');
const $forgotPopup = document.querySelector('.forgot-popup');
const $forgotClose = document.querySelector('.forgot-popup__close');
const $forgotError = document.querySelector('.forgot-popup__error');

$forgotHref.addEventListener('click', function () {
    $regBack.style.display = 'block';
    setTimeout(function () {
        $regBack.style.bottom = '-100%';
    }, 100);

    setTimeout(function () {
        $forgotPopup.style.display = 'block';

        setTimeout(function () {
            $forgotPopup.style.opacity = 1;

        }, 100);

    }, 500);
});

$forgotClose.addEventListener('click', function () {
    $regBack.style.display = 'none';
    $regBack.style.bottom = '0%';
    $forgotPopup.style.display = 'none';
    $forgotPopup.style.opacity = 0;

    $forgotPopup.reset();
});

function checkFormForgot(form) {
    if (!form[0].value.replace(/^\s+|\s+$/g, '')) {
        $forgotError.style.opacity = 1;
        return false;
    } else {
        $forgotError.style.opacity = 0;
    }
}

function checkKeyupFormForgot(form) {
    if (form[0].value.replace(/^\s+|\s+$/g, '')) {
        $forgotError.style.opacity = 0;
    }
}

//------------------------------------------