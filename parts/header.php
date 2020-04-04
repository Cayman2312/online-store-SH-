<?php

/**
 * 
 * Шапка сайта
 * 
 */

include('parts/header_conf.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>

    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/<?= $header_config['style'] ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <nav class="header__navbar">
                <a href="/" class="navbar-logo"></a>
                <div class="navbar-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navbar-menu">
                    <a href="/catalog.php?category_id=1" class="menu-item">Женщинам</a>
                    <a href="/catalog.php?category_id=2" class="menu-item">Мужчинам</a>
                    <a href="/catalog.php?category_id=3" class="menu-item">Детям</a>
                    <a href="#" class="menu-item">Новинки</a>
                    <a href="#" class="menu-item">О нас</a>
                </div>
            </nav>
            <div class="header__user-box">
                <a href="#" class="user-box__login">Войти</a>
                <a href="/basket.php" class="user-box__basket">Корзина</a>
            </div>
            <div class="popup-log">
                <div class="error-login"><img src="/images/icons/warning.png">поле не заполнено</div>
                <div class="error-pass"><img src="/images/icons/warning.png">поле не заполнено</div>
                <form method="get" action="/#" class="popup-log__form" onsubmit="return checkForm(this.elements)">
                    <input type="email" name="login" placeholder="E-mail">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" value="Войти">
                </form>
                <span><a href="#/">забыли пароль?</a></span>
                <span>/</span>
                <span><a href="#/">регистрация</a></span>
            </div>
        </header>
