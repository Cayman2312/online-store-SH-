-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 02 2020 г., 20:22
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
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Женщинам'),
(2, 'Мужчинам'),
(3, 'Детям');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img_url`, `name`, `description`, `price`) VALUES
(1, '/images/catalog/1.jpg', 'Куртка', 'Ой какая красивая куртка', 4500),
(2, '/images/catalog/9.jpg', 'Кеды', 'Хорошие кеды', 999),
(3, '/images/catalog/7.jpg', 'Куртка', 'Ой какая красивая куртка', 500),
(4, '/images/catalog/3.png', 'Кеды', 'Хорошие кеды', 3000),
(5, '/images/catalog/12.jpg', 'Куртка', 'Ой какая красивая куртка', 4500),
(6, '/images/catalog/10.jpg', 'Кеды', 'Хорошие кеды', 999),
(7, '/images/catalog/4.jpg', 'Куртка', 'Ой какая красивая куртка', 500),
(8, '/images/catalog/1.jpg', 'Кеды', 'Хорошие кеды', 3000),
(9, '/images/catalog/6.jpg', 'Куртка', 'Ой какая красивая куртка', 4500),
(10, '/images/catalog/5.jpg', 'Кеды', 'Хорошие кеды', 999),
(11, '/images/catalog/4.jpg', 'Куртка', 'Ой какая красивая куртка', 500),
(12, '/images/catalog/8.jpg', 'Кеды', 'Хорошие кеды', 3000),
(13, '/images/catalog/11.jpg', 'Куртка', 'Ой какая красивая куртка', 4500),
(14, '/images/catalog/10.jpg', 'Кеды', 'Хорошие кеды', 999),
(15, '/images/catalog/1.jpg', 'Куртка', 'Ой какая красивая куртка', 500),
(16, '/images/catalog/12.jpg', 'Кеды', 'Хорошие кеды', 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 2),
(4, 3, 1),
(5, 4, 3),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 11, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
