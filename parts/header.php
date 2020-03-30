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
                <div class="header__navbar-logo"></div>
                <a href="#" class="navbar-item">Женщинам</a>
                <a href="catalog.php" class="navbar-item">Мужчинам</a>
                <a href="#" class="navbar-item">Детям</a>
                <a href="#" class="navbar-item">Новинки</a>
                <a href="#" class="navbar-item">О нас</a>
            </nav>
            <div class="header__user-box">
                <a href="#" class="user-box__login">Войти</a>
                <a href="#" class="user-box__basket">Корзина</a>
            </div>
        </header>