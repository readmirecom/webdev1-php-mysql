-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Сер 26 2019 р., 02:03
-- Версія сервера: 5.7.27-0ubuntu0.18.04.1
-- Версія PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `rud`
--

-- --------------------------------------------------------

--
-- Структура таблиці `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `featured_image` int(1) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `images`
--

INSERT INTO `images` (`id`, `title`, `featured_image`, `image_name`) VALUES
(75, 'dasdsa', 0, 'Photo45d63113830a06.png');

-- --------------------------------------------------------

--
-- Структура таблиці `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`) VALUES
(25, 'dsaasd', 'asdas');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT для таблиці `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
