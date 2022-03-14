-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2021 г., 14:05
-- Версия сервера: 5.5.62
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newmvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `user`, `date`, `img`, `text`) VALUES
(2, 'Girls Pink T Shirt arrived in store', 'Mac Doe 1', '0000-00-00 00:00:00', 'blog-one.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(3, 'Girls Pink T Shirt arrived in store', 'Mac Doe 1', '2021-08-01 19:54:41', 'blog-one.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(4, 'Girls Pink T Shirt arrived in store', ' Mac Doe 2', '2021-08-01 19:54:35', 'blog-two.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(5, 'Girls Pink T Shirt arrived in store', 'Mac Doe 3', '2021-08-01 19:54:30', 'blog-three.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(6, 'Girls Pink T Shirt arrived in store', 'Mac Doe 4', '2021-08-01 19:54:23', 'blog-one.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(7, 'Girls Pink T Shirt arrived in store', 'Mac Doe 5', '2021-08-01 19:54:17', 'blog-two.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(8, 'Girls Pink T Shirt arrived in store', 'Mac Doe 6', '2021-08-01 13:35:40', 'blog-three.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(77) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `updated_at`, `created_at`) VALUES
(1, 'ACNE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'GRÜNE ERDE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ALBIRO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'RONHILL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ODDMOLLY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'BOUDESTIJN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'RÖSCH CREATIVE CULTURE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'wwww', '2021-11-04 09:27:07', '2021-11-04 09:27:07');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(77) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'MENS'),
(3, 'WOMENS'),
(4, 'KIDS'),
(5, 'FASHION'),
(6, 'HOUSEHOLDS'),
(7, 'INTERIORS'),
(8, 'CLOTHING'),
(9, 'BAGS'),
(10, 'SHOES');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `post_id` int(111) NOT NULL,
  `user_id` int(111) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `user_id`, `time`, `name`, `email`, `textarea`) VALUES
(0, 0, 0, '2021-08-01 10:08:12', 'mir', 'mir6raid@gmail', 'qwerty'),
(2, 2, 0, '2021-08-01 10:09:08', 'mir', 'mir6raid@gmail', 'FOR 2'),
(3, 3, 0, '2021-08-01 10:09:14', 'mir', 'mir6raid@gmail', 'IJ'),
(4, 0, 157, '2021-08-14 12:51:01', '1234', 'mir6raid@gmail.com', 'qwer');

-- --------------------------------------------------------

--
-- Структура таблицы `details_details`
--

CREATE TABLE `details_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int(44) NOT NULL,
  `sale` int(11) NOT NULL,
  `new` int(44) NOT NULL,
  `img` varchar(232) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(232) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `details_details`
--

INSERT INTO `details_details` (`id`, `title`, `hits`, `sale`, `new`, `img`, `price`, `name`, `href`) VALUES
(1, '', 1, 0, 0, '\r\ngallery1.jpg', '16', 'Easy Polo Black Edition 1', ''),
(2, 'Details', 0, 1, 0, 'gallery2.jpg', '26', 'Easy Polo Black Edition 2', 'details'),
(3, 'Company Profile', 0, 0, 1, 'gallery3.jpg', '36', 'Easy Polo Black Edition 3', 'companyprofile'),
(4, 'Tag', 1, 0, 1, 'gallery4.jpg', '46', 'Easy Polo Black Edition 4', 'tag'),
(6, 'Reviews (5)', 0, 0, 0, '', '', '', 'reviews');

-- --------------------------------------------------------

--
-- Структура таблицы `feature_item`
--

CREATE TABLE `feature_item` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `num_prod` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feature_item`
--

INSERT INTO `feature_item` (`id`, `img`, `price`, `name`, `cat_id`, `num_prod`) VALUES
(1, 'product1.jpg', '6', 'Easy Polo Achkarik', 1, '5'),
(2, 'product2.jpg', '26', 'Easy Polo qiltiru', 2, '10'),
(3, 'product3.jpg', '36', 'Easy Polo keresh', 2, '7'),
(4, 'product4.jpg', '46', 'Easy Polo Shadod', 5, '6'),
(5, 'product5.jpg', '56', 'Easy Polo takoy', 5, '5'),
(6, 'product6.jpg', '66', 'Easy Polo boladi', 3, '4'),
(7, 'product1.jpg', '76', 'Easy Polo Black oxiri', 3, '3');

-- --------------------------------------------------------

--
-- Структура таблицы `feature_item_brand`
--

CREATE TABLE `feature_item_brand` (
  `id` int(11) NOT NULL,
  `title` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T-SHIRT` int(11) NOT NULL,
  `BLAZERS` int(11) NOT NULL,
  `SUNGLASS` int(11) NOT NULL,
  `KIDS` int(11) NOT NULL,
  `POLO SHIRT` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feature_item_brand`
--

INSERT INTO `feature_item_brand` (`id`, `title`, `img`, `price`, `name`, `T-SHIRT`, `BLAZERS`, `SUNGLASS`, `KIDS`, `POLO SHIRT`, `cat_id`) VALUES
(1, '', '', '', '', 1, 2, 3, 4, 5, 0),
(2, 'T-SHIRT', 'gallery1.jpg', '56', 'Easy Polo Black Edition', 1, 2, 3, 4, 5, 0),
(3, 'BLAZERS', 'gallery2.jpg', '56', 'Easy Polo Black Edition', 1, 2, 3, 4, 5, 0),
(4, 'SUNGLASS', 'gallery3.jpg', '56', 'Easy Polo Black Edition', 1, 2, 3, 4, 5, 0),
(5, 'KIDS', 'gallery4.jpg', '56', 'Easy Polo Black Edition', 1, 2, 3, 4, 5, 0),
(6, 'POLO SHIRT', 'gallery4.jpg', '56', 'Easy Polo Black Edition', 1, 2, 3, 4, 5, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `title`, `href`) VALUES
(6, 'Home', ''),
(7, 'Shop', ''),
(8, 'Blog', 'blog'),
(9, '404', ''),
(10, 'Contact', ''),
(11, 'Магазин', 'magazin');

-- --------------------------------------------------------

--
-- Структура таблицы `mini_slider`
--

CREATE TABLE `mini_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mini_slider`
--

INSERT INTO `mini_slider` (`id`, `img`, `title`, `price`) VALUES
(2, 'recommend1.jpg', 'Easy Polo Black Edition', '56'),
(3, 'recommend2.jpg', 'Easy Polo Black Edition', '56'),
(4, 'recommend3.jpg', 'Easy Polo Black Edition', '56'),
(5, 'recommend3.jpg', 'Easy Polo Black Edition', '56'),
(6, 'recommend2.jpg', 'Easy Polo Black Edition', '56'),
(7, 'recommend1.jpg', 'Easy Polo Black Edition', '56');

-- --------------------------------------------------------

--
-- Структура таблицы `newbrand`
--

CREATE TABLE `newbrand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `price` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `newbrand`
--

INSERT INTO `newbrand` (`id`, `title`, `img`, `new`, `hits`, `sale`, `price`) VALUES
(1, 'Easy Polo Black Edition', 'gallery1.jpg', 1, 0, 1, '56'),
(2, 'Easy Polo Black Edition2', 'gallery2.jpg', 0, 1, 0, '56'),
(3, 'Easy Polo Black Edition3', 'gallery3.jpg', 0, 1, 1, '56'),
(4, 'Easy Polo Black Edition4', 'gallery4.jpg', 1, 1, 0, '56'),
(5, 'Easy Polo Black Edition5', 'gallery4.jpg', 1, 0, 1, '56');

-- --------------------------------------------------------

--
-- Структура таблицы `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `password_2`, `img`) VALUES
(303, 'mir', 'mir6raid@gmail', '202cb962ac59075b964b07152d234b70', 'd41d8cd98f00b204e9800998ecf8427e', 'C'),
(305, 'mir', 'mir6raid@gmail', '698d51a19d8a121ce581499d7b701668', 'd41d8cd98f00b204e9800998ecf8427e', 'C'),
(308, 'moxir', '123@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', 'd41d8cd98f00b204e9800998ecf8427e', 'C'),
(309, 'mir', '111@gmail.com', '698d51a19d8a121ce581499d7b701668', 'd41d8cd98f00b204e9800998ecf8427e', 'C');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sticker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `title`, `text`, `img`, `sticker`) VALUES
(1, 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'girl1.jpg', 'pricing.png'),
(2, 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'girl2.jpg', 'pricing.png'),
(3, 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'girl3.jpg', 'pricing.png'),
(4, 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'girl1.jpg', 'pricing.png');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_details`
--

CREATE TABLE `slider_details` (
  `id` int(11) NOT NULL,
  `img` varchar(77) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider_details`
--

INSERT INTO `slider_details` (`id`, `img`) VALUES
(1, ''),
(2, 'similar1.jpg'),
(3, 'similar2.jpg'),
(4, 'similar3.jpg'),
(5, 'similar1.jpg'),
(6, 'similar2.jpg'),
(7, 'similar3.jpg'),
(8, 'similar1.jpg'),
(9, 'similar2.jpg'),
(10, 'similar3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_detail_item`
--

CREATE TABLE `slider_detail_item` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider_detail_item`
--

INSERT INTO `slider_detail_item` (`id`, `img`, `price`, `name`) VALUES
(1, '', '', ''),
(2, 'recommend1.jpg', '1', 'Easy Polo Black Edition 1'),
(3, 'recommend2.jpg', '22', 'Easy Polo Black Edition 2'),
(4, 'recommend3.jpg', '33', 'Easy Polo Black Edition 3'),
(5, 'recommend3.jpg', '46', 'Easy Polo Black Edition 4'),
(6, 'recommend2.jpg', '56', 'Easy Polo Black Edition 5'),
(7, 'recommend1.jpg', '66', 'Easy Polo Black Edition 6');

-- --------------------------------------------------------

--
-- Структура таблицы `tab_content_detail`
--

CREATE TABLE `tab_content_detail` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tab_content_detail`
--

INSERT INTO `tab_content_detail` (`id`, `img`, `price`, `name`) VALUES
(1, '', '', ''),
(2, 'gallery1.jpg', '16', 'Easy Polo Black Edition 1'),
(3, 'gallery2.jpg', '26', 'Easy Polo Black Edition 2'),
(4, 'gallery3.jpg', '36', 'Easy Polo Black Edition 3'),
(5, 'gallery4.jpg', '46', 'Easy Polo Black Edition 4');

-- --------------------------------------------------------

--
-- Структура таблицы `tab_pane_detail`
--

CREATE TABLE `tab_pane_detail` (
  `id` int(11) NOT NULL,
  `img` varchar(77) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tab_pane_detail`
--

INSERT INTO `tab_pane_detail` (`id`, `img`, `price`, `name`) VALUES
(1, '', '', ''),
(2, 'gallery1.jpg', '16', 'Easy Polo Black Edition 1'),
(3, 'gallery3.jpg', '20', 'Easy Polo Black Edition 2'),
(4, 'gallery2.jpg', '30', 'Easy Polo Black Edition 3'),
(5, 'gallery4.jpg', '40', 'Easy Polo Black Edition 4');

-- --------------------------------------------------------

--
-- Структура таблицы `tab_tag_detail`
--

CREATE TABLE `tab_tag_detail` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tab_tag_detail`
--

INSERT INTO `tab_tag_detail` (`id`, `img`, `price`, `name`) VALUES
(1, '', '', ''),
(2, 'gallery1.jpg', '1', 'Easy Polo Black Edition 1'),
(3, 'gallery2.jpg', '2', 'Easy Polo Black Edition 2'),
(4, 'gallery3.jpg', '3', 'Easy Polo Black Edition 3'),
(5, 'gallery4.jpg', '4', 'Easy Polo Black Edition 4');

-- --------------------------------------------------------

--
-- Структура таблицы `usershop`
--

CREATE TABLE `usershop` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `usershop`
--

INSERT INTO `usershop` (`id`, `title`, `price`, `img`, `user_id`, `shop_id`) VALUES
(287, 'contacts', ' 3500', 'Jellyfish.jpg', 305, '1'),
(288, 'contacts', ' 3500', 'Koala.jpg', 305, '1'),
(296, '303', 'contacts', ' 3500', 0, 'Koala.jpg'),
(298, 'contacts', ' 3500', 'Koala.jpg', 303, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `details_details`
--
ALTER TABLE `details_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feature_item`
--
ALTER TABLE `feature_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feature_item_brand`
--
ALTER TABLE `feature_item_brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mini_slider`
--
ALTER TABLE `mini_slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newbrand`
--
ALTER TABLE `newbrand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_details`
--
ALTER TABLE `slider_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_detail_item`
--
ALTER TABLE `slider_detail_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tab_content_detail`
--
ALTER TABLE `tab_content_detail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tab_pane_detail`
--
ALTER TABLE `tab_pane_detail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tab_tag_detail`
--
ALTER TABLE `tab_tag_detail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usershop`
--
ALTER TABLE `usershop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `details_details`
--
ALTER TABLE `details_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `feature_item`
--
ALTER TABLE `feature_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `feature_item_brand`
--
ALTER TABLE `feature_item_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `mini_slider`
--
ALTER TABLE `mini_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `newbrand`
--
ALTER TABLE `newbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `slider_details`
--
ALTER TABLE `slider_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `slider_detail_item`
--
ALTER TABLE `slider_detail_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tab_content_detail`
--
ALTER TABLE `tab_content_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tab_pane_detail`
--
ALTER TABLE `tab_pane_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tab_tag_detail`
--
ALTER TABLE `tab_tag_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `usershop`
--
ALTER TABLE `usershop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
