<?php
$header_config = [
    'title' => 'Корзина',
    'style' => 'basket.css'
];

include('parts/header.php');

d($_SESSION['basket']);
?>

<div class="basket-top">
    <h1 class="big-title">Ваша корзина</h1>
    <h3 class="min-title">Товары резервируются на ограниченное время</h3>
</div>

<div class="basket-order">
    <div class="basket-order__header">
        <p>Фото</p>
        <p>Наименование</p>
        <p class="option">Размер</p>
        <p class="option">Колличество</p>
        <p class="option">Стоимость</p>
        <p class="option">Удалить</p>
    </div>

    <div class="basket-order__item">
        <img src="images/catalog/1.jpg" alt="">
        <p article="арт. 123412" class="name">Куртка синяя</p>
        <p class="option">39</p>
        <div class="option buttons">
            1
            <img class="btn-plus" src="/images/basket/plus.jpg" alt="">
            <img class="btn-minus" src="/images/basket/minus.jpg" alt="">
        </div>
        <p class="option">3800 руб.</p>
        <div class="basket-x"></div>
    </div>

    <div class="basket-order__result">
        <span class="text">Итог:</span>
        <span class="sum">12500 руб.</span>
    </div>
</div>

<div class="symbol">
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
</div>


<div class="basket-form">
    <h2 class="big-title">Адрес доставки</h2>
    <h3 class="min-title">Все поля обязательны для заполнения</h3>

    <form action="/#" class="popup">
        <div title="Выберите вариант доставки" class="popup__box box_full">
            <select title="Выберите вариант доставки" name="service" id="">
                <option value="">Курьерская служба - 500р</option>
                <option value="">Курьерская служба - 500р</option>
                <option value="">Курьерская служба - 500р</option>
            </select>
        </div>

        <div title="Имя" class="popup__box">
            <input type="text" name="name">
        </div>

        <div title="Фамилия" class="popup__box">
            <input type="text" name="surname">
        </div>

        <div title="Адрес" class="popup__box box_full">
            <input type="text" name="adress">
        </div>

        <div title="Город" class="popup__box">
            <input type="text" name="city">
        </div>

        <div title="Индекс" class="popup__box">
            <input type="text" name="index">
        </div>

        <div title="Телефон" class="popup__box">
            <input type="tel" name="phone">
        </div>

        <div title="E-mail" class="popup__box">
            <input type="email" name="email">
        </div>

        <div title="Выберите способ оплаты" class="popup__box box_full" id="payment">
            <select name="payment">
                <option value="">Банковская карта</option>
                <option value="">Банковская карта</option>
                <option value="">Банковская карта</option>
            </select>
            <img src="/images/basket/cards.jpg" alt="">
        </div>

        <div class="popup__box box_full">
            <input type="submit" value="заказать">
        </div>
    </form>
</div>

<div class="symbol">
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
    <div class="symbol-el"></div>
</div>

<div class="basket-form basket_payment">
    <h2 class="big-title">Варианты оплаты</h2>
    <h3 class="min-title">Все поля обязательны для заполнения</h3>

    <div class="payment-list">
        <li class="list-item">Стоимость:</li>
        <li class="list-item">12500 руб.</li>
        <li class="list-item">Доставка:</li>
        <li class="list-item">500 руб.</li>
        <li class="list-item orange">Итого:</li>
        <li class="list-item orange">13000 руб.</li>
    </div>
</div>

<?php
$footer_config = [
    'script' => 'basket.js'
];

include('parts/footer.php');
?>