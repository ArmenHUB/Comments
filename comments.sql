-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 12 2018 г., 12:15
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `comments`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `login` varchar(200) NOT NULL,
  `password` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('admin', 123);

-- --------------------------------------------------------

--
-- Структура таблицы `allcomments`
--

CREATE TABLE `allcomments` (
  `id` int(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(250) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allcomments`
--

INSERT INTO `allcomments` (`id`, `email`, `name`, `comment`, `date`, `image`, `status`) VALUES
(3, 'max-fox88@inbox.ru', 'Armen', 'dghdfghfdhbdfbhfgh', '2018-02-12 10:53:01', 'achq.png', 1),
(5, 'arme.1993@mail.ru', 'Armen', 'fgsdfsfgbhsghbgh', '2018-02-12 10:59:16', 'apple.jpg', -1),
(6, 'mister.manukyan@inbox.ru', 'Ashot', 'dhdghdghdghdfgsdf', '2018-02-12 11:14:46', '01.jpg', 1),
(7, 'max-fox88@inbox.ru', 'opo', 'dsgvxbvdfbvdfb', '2018-02-12 11:14:48', 'Basic_CSS_Template_Business_Cartel_Preview_Big.jpg', -1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allcomments`
--
ALTER TABLE `allcomments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allcomments`
--
ALTER TABLE `allcomments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
