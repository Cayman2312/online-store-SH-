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
</head>
<body>
    <div class="wrapper">