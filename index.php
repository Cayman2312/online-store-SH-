<?php

/**
 * 
 * Главная страница
 * 
 */

$header_config = [
    'title' => 'Главная страница',
    'style' => 'index.css'
];

include('parts/header.php');
?>

<div class="offer">
    <h1 class="offer__title">Новые поступления весны</h1>
    <p class="offer__text">Мы подготовили для Вас лучшие новинки сезона</p>
    <a href="#" class="offer__button">Посмотреть новинки</a>
    <div class="offer__grid-container">
        <div class="item">
            <h4 class="item-title">Джинсовые куртки</h4>
            <h5 class="item-new">New arrival</h5>
        </div>
        <div class="item">
            <div class="item-alert"></div>
            <p class="item-text">
                Каждый сезон мы подготавливаем для Вас исключительно лучшую
                 модную одежду. Следите за нашими новинками!
            </p>
        </div>
        <div class="item"></div>
        <div class="item">
            <div class="item-arrow">&larr;</div>
            <h4 class="item-title">Элегантная обувь</h4>
            <h5 class="item-new">Ботинки, кроссовки</h5>
        </div>
        <div class="item">
            <h4 class="item-title">Джинсы</h4>
            <p class="item-price">от 3200 руб.</p>
        </div>
        <div class="item">
            <div class="item-alert"></div>
            <p class="item-text">
                Самые низкие цены в Москве. <br>
                Нашли дешевле? Вернем разницу.
            </p>
        </div>
        <div class="item">
            <h4 class="item-title">Детская одежда</h4>
            <h5 class="item-new">New arrival</h5>
        </div>
        <div class="item"></div>
        <div class="item">
            <div class="item-arrow">&larr;</div>
            <h4 class="item-title">Аксессуары</h4>
        </div>
        <div class="item">
            <h4 class="item-title">Спортивная одежда</h4>
            <p class="item-price">от 590 руб.</p>
        </div>
    </div>
</div>

<?php
$footer_config = [
    'script' => 'index.js'
];

include('parts/footer.php');
?>