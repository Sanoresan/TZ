-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 14 2019 г., 22:12
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `genid`
--

CREATE TABLE `genid` (
  `ID` int(11) NOT NULL,
  `textt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genid`
--

INSERT INTO `genid` (`ID`, `textt`) VALUES
(1, 'saffsa'),
(2, 'фыаыфа'),
(3, 'PcYY'),
(4, 'odaq'),
(5, 'LxpQ'),
(6, '18674'),
(7, 'Yie'),
(8, '76'),
(9, 'Jqm0l7'),
(10, 'ODtY'),
(11, 'maUure'),
(12, 'a5m');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `genid`
--
ALTER TABLE `genid`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `genid`
--
ALTER TABLE `genid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
