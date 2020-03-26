<?php
/**
 * 
 * Подключение к базе данных
 * 
 */

$link = mysqli_connect('localhost', 'root', '', '03122019_21_shop');
mysqli_set_charset($link, 'utf8');
?>