-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2020 г., 13:55
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

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
-- Структура таблицы `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orders_list_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size` int(11) NOT NULL,
  `product_size_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `orders_list_id`, `product_id`, `product_size`, `product_size_amount`) VALUES
(5, 7, 0, 40, 1),
(6, 7, 0, 41, 1),
(7, 7, 1, 50, 1),
(8, 7, 2, 34, 4),
(9, 7, 2, 35, 1),
(10, 8, 0, 41, 1),
(11, 9, 0, 48, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_list`
--

CREATE TABLE IF NOT EXISTS `orders_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `mail-index` int(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `full-price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_list`
--

INSERT INTO `orders_list` (`id`, `name`, `lastname`, `phone`, `email`, `adress`, `city`, `mail-index`, `payment`, `price`, `service`, `full-price`) VALUES
(7, 'Иван', 'Петров', '84995525423', 'ivan@mail.ru', '5-ая улица Строителей', 'Москва', 112111, 'card', 21500, 500, 22000),
(8, 'Петр', 'Иванов', '89035214524', 'pishma@mail.ru', 'Болотная улица, д.5', 'Верхние Пупки', 665523, 'card', 999, 500, 1499),
(9, 'Иван', 'Грозный', '89262265125', 'tsar@azesm.ru', 'Палаты', 'Москва', 111111, 'card', 13500, 500, 14000);

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

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_sizes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `product_sizes`) VALUES
(1, 1, '[40,42,44,46,48,50,52,54,56,58]'),
(2, 2, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(3, 3, '[40,42,44,46,48,50,52,54,56,58]'),
(4, 4, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(5, 5, '[40,42,44,46,48,50,52,54,56,58]'),
(6, 6, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(7, 7, '[40,42,44,46,48,50,52,54,56,58]'),
(8, 8, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(9, 9, '[40,42,44,46,48,50,52,54,56,58]'),
(10, 10, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(11, 11, '[40,42,44,46,48,50,52,54,56,58]'),
(12, 12, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(13, 13, '[40,42,44,46,48,50,52,54,56,58]'),
(14, 14, '[34,35,36,37,38,39,40,41,42,43,44,45,46]'),
(15, 15, '[40,42,44,46,48,50,52,54,56,58]'),
(16, 16, '[34,35,36,37,38,39,40,41,42,43,44,45,46]');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscriber`) VALUES
(81, 'asd@sad'),
(82, 'asd@asdasd');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `pass`) VALUES
(4, 'asd', 'asd', 'asd@asd', 'asd'),
(5, 'fdsdfs', 'dfsfds', 'asd@asd', 'ghdfghfd'),
(6, 'n', 'n', 'n@n', 'n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
