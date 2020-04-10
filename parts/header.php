<?php

/**
 *
 * Шапка сайта
 *
 */


include('parts/header_conf.php');

//подсчет количества элементов в корзине
$basket_sum = 0;
if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])) {

    foreach ($_SESSION['basket'] as $id_array) {
        $basket_sum =+ count($id_array);
    };
}

//получение списка категорий для отрисовки на странице
$sql_category_list = "SELECT * FROM categories";
$result_category_list = mysqli_query($link, $sql_category_list);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>

    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/<?= $header_config['style'] ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                <?php while ($category = mysqli_fetch_assoc($result_category_list)) : ?>
                    <a href="/catalog.php?category_id=<?= $category['id'] ?>" class="menu-item"><?= $category['name'] ?></a>
                <?php endwhile ; ?>
            </div>
        </nav>
        <div class="header__user-box">
            <a href="#" class="user-box__login">Войти</a>
            <a href="/basket.php" class="user-box__basket">
                Корзина (<b><?= $basket_sum ?></b>)
            </a>
        </div>
        <div class="popup-log">
            <div class="popup-log__close"></div>
            <form method="GET" action="/#" class="popup-log__form"
                  onsubmit="return checkFormLog(this.elements)"
                  onkeyup="return checkFormLog(this.elements)">
                <div class="form__group">
                    <input type="email" name="login" placeholder=" ">
                    <label>Email</label>
                </div>
                <div class="form__group">
                    <input type="password" name="pass" placeholder=" ">
                    <label>Пароль</label>
                </div>
                <input type="submit" value="Войти" disabled>
            </form>
            <span><a href="#/" class="forgot-href">забыли пароль?</a></span>
            <span>/</span>
            <span><a href="#" class="reg-href">регистрация</a></span>
        </div>

        <!-- Попап уведомлений -->
        <div class="notice-popup"></div>

        <!-- Тут лежит попап регистрации новых пользователей и попап восстановления пороля-->
        <?php include('parts/registration.php') ?>
    </header>


    <?php

    // Авторизация пользователя -----------------------

    if (isset($_GET['login']) && isset($_GET['pass'])) {

        if (!empty($_GET['login']) && !empty($_GET['pass'])) {

//            exit("<meta http-equiv='refresh' content='0; url= /'>");
        }
    }

    //-------------------------------------------------

    ?>
