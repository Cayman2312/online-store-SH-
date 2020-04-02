-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 24 2020 г., 19:38
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `03122019_21_shop`
--
CREATE DATABASE IF NOT EXISTS `03122019_21_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `03122019_21_shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img_url`, `name`, `description`, `price`) VALUES
(1, '/images/catalog/1.jpg', 'Куртка', 'Ой какая красивая куртка', 4500),
(2, '/images/catalog/9.jpg', 'Кеды', 'Хорошие кеды', 999),
(3, '/images/catalog/7.jpg', 'Куртка', 'Ой какая красивая куртка', 500),
(4, '/images/catalog/3.png', 'Кеды', 'Хорошие кеды', 3000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
