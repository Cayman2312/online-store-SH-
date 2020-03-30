<?php

$header_config = [
    'title' => 'Корзина',
    'style' => 'basket.css'
];

include('parts/header.php');
?>

<div class="basket-top">
    <h1 class="basket-top__title">Ваша корзина</h1>
    <p class="basket-top__title-plus">Товары резервируются на ограниченное время</p>
</div>

<div class="basket-container">
    <table>
        <tr class="basket-header">
            <th>Фото</th>
            <th>Наименование</th>
            <th class="basket-option">Размер</th>
            <th class="basket-option">Колличество</th>
            <th class="basket-option">Стоимость</th>
            <th class="basket-option">Удалить</th>
        </tr>

        <tr>
            <td class="basket-container__img">
                <img src="images/catalog/1.jpg" alt="">
            </td>

            <td class="basket-container__name">
                <p>Куртка синяя</p>
                <p class="basket-container__article">арт. 123412</p>
            </td>

            <td class="basket-option">39</td>
            <td class="basket-option buttons">
                1
                <img class="btn-plus" src="/images/basket/plus.jpg" alt="">
                <img class="btn-minus" src="/images/basket/minus.jpg" alt="">
            </td>

            <td class="basket-option">3800 руб.</td>
            <td class="basket-option">
                <div class="basket-x"></div>
            </td>
        </tr>
    </table>

    <div class="basket-container__result">
        <span>Итог:</span>
        <span class="basket-container__sum">12500 руб.</span>
    </div>
</div>

<div class="basket-container__symbol">
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
</div>

<div class="basket-form">
    <h1 class="basket-top__title">Адрес доставки</h1>
    <p class="basket-top__title-plus">Все поля обязательны для заполнения</p>

    <form action="/#" class="popup-adress">
        <p class="popup__text">Выберите вариант доставки</p>
        <div class="popup__select">
            <select name="service" id="">
                <option value="">Курьерская служба - 500р</option>
                <option value="">Курьерская служба - 500р</option>
                <option value="">Курьерская служба - 500р</option>
            </select>
        </div>

        <div class="popup-flex">
            <div class="popup-flex__box">
                <p class="popup__text">Имя</p>
                <input type="text" name="name">
            </div>
            <div class="popup-flex__box">
                <p class="popup__text">Фамилия</p>
                <input type="text" name="surname">
            </div>
        </div>

        <p class="popup__text">Адрес</p>
        <input type="text" name="adress">

        <div class="popup-flex">
            <div class="popup-flex__box">
                <p class="popup__text">Город</p>
                <input type="text" name="city">
            </div>
            <div class="popup-flex__box">
                <p class="popup__text">Индекс</p>
                <input type="text" name="index">
            </div>
        </div>

        <div class="popup-flex">
            <div class="popup-flex__box">
                <p class="popup__text">Телефон</p>
                <input type="tel" name="phone">
            </div>
            <div class="popup-flex__box">
                <p class="popup__text">E-mail</p>
                <input type="email" name="email">
            </div>
        </div>
        
        <input type="submit" value="заказать">
    </form>
</div>

<div class="basket-container__symbol">
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
</div>

<div class="basket-form basket-payment">
    <div class="payment__container">
        <h1 class="basket-top__title">Варианты оплаты</h1>
        <p class="basket-top__title-plus">Все поля обязательны для заполнения</p>

        <div class="payment__list">
            <div class="payment__list-left">
                <li class="payment__item">Стоимость:</li>
                <li class="payment__item">Доставка:</li>
                <li class="payment__item">Итого:</li>
            </div>
            <div class="payment__list-right">
                <li class="payment__item">12500 руб.</li>
                <li class="payment__item">500 руб.</li>
                <li class="payment__item">13000 руб.</li>
            </div>
        </div>

        <p class="popup__text">Выберите способ оплаты</p>
        <div class="popup__select">
            <select name="service" id="">
                <option value="">Банковская карта</option>
                <option value="">Банковская карта</option>
                <option value="">Банковская карта</option>
            </select>
            <img src="/images/basket/cards.jpg" alt="">
        </div>
    </div>
</div>

<?php
$footer_config = [
    'script' => 'basket.js'
];

include('parts/footer.php');
?>