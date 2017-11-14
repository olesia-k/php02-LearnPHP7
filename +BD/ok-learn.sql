-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2017 г., 15:06
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ok-learn`
--

-- --------------------------------------------------------

--
-- Структура таблицы `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `subject` tinytext NOT NULL,
  `img` tinytext NOT NULL,
  `message` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `form`
--

INSERT INTO `form` (`id`, `email`, `name`, `phone`, `subject`, `img`, `message`) VALUES
(1, 'seo@graver.by', '', '', 'Заявка с сайта', 'img', 'message'),
(2, 'seo@graver.by', '', '', 'Заявка с сайта', 'img', 'message'),
(3, '', '', '', '', 'img', 'message'),
(4, '', 'Женя', '000 00 00', 'Заявка с сайта', 'img', 'message'),
(5, '', 'Женя', '000 00 00', 'Заявка с сайта', 'img', 'message'),
(6, 'test@test.gmail.ru', 'Надя', '', 'Заявка с сайта', 'img', 'message'),
(7, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: Заявка 04', 'img', 'message'),
(8, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: Заявка 05', 'img', 'user_message'),
(9, '', '', '', '', 'img', 'user_message'),
(10, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: Заявка 06', 'img', 'user_message'),
(11, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: Заявка 06', 'img', 'text'),
(12, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: Заявка 07', '17-11_14_02_57_191.jpg', 'Сообщение с сайта'),
(13, 'test@test.gmail.ru', 'Надя', '000 00 00', 'Заявка с сайта: ', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
