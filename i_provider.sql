-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 20 2021 г., 19:30
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `i_provider`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_card`
--

CREATE TABLE IF NOT EXISTS `access_card` (
  `ID карты доступа` int(9) NOT NULL AUTO_INCREMENT,
  `Логин` varchar(255) NOT NULL,
  `Пароль` varchar(255) NOT NULL,
  `Статус` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`ID карты доступа`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `access_card`
--

INSERT INTO `access_card` (`ID карты доступа`, `Логин`, `Пароль`, `Статус`) VALUES
(1, 'Saithidar', 'vbmmgJZ0E', 'Занят'),
(2, 'AcvlfAjdjr', '12Ass9848ds', 'Занят'),
(4, '321as33jp', '38fd737dsS', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `ID категории` int(9) NOT NULL AUTO_INCREMENT,
  `ID роутера` int(9) NOT NULL,
  `ID ТВ приставки` int(9) NOT NULL,
  PRIMARY KEY (`ID категории`),
  KEY `ID роутера` (`ID роутера`),
  KEY `ID ТВ приставки` (`ID ТВ приставки`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`ID категории`, `ID роутера`, `ID ТВ приставки`) VALUES
(1, 17, 11),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `line`
--

CREATE TABLE IF NOT EXISTS `line` (
  `ID линии` int(9) NOT NULL AUTO_INCREMENT,
  `Расположение РК подъезд` varchar(255) NOT NULL,
  `Расположение РК этаж` varchar(255) NOT NULL,
  `Расположение коммутатора подъезд` varchar(255) NOT NULL,
  `Расположение коммутатора этаж` varchar(255) NOT NULL,
  PRIMARY KEY (`ID линии`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `line`
--

INSERT INTO `line` (`ID линии`, `Расположение РК подъезд`, `Расположение РК этаж`, `Расположение коммутатора подъезд`, `Расположение коммутатора этаж`) VALUES
(1, '2 подъезд', '3 этаж', '6 подъезд', '4 этаж'),
(2, '1 подъезд', '1 этаж', '1 подъезд', '1 этаж');

-- --------------------------------------------------------

--
-- Структура таблицы `routers`
--

CREATE TABLE IF NOT EXISTS `routers` (
  `ID роутера` int(11) NOT NULL AUTO_INCREMENT,
  `Модель роутера` varchar(255) NOT NULL,
  PRIMARY KEY (`ID роутера`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `routers`
--

INSERT INTO `routers` (`ID роутера`, `Модель роутера`) VALUES
(1, 'RT-X'),
(2, 'RT-X-2'),
(4, 'RT-GM-3'),
(5, 'RT-GM-4'),
(6, 'NTU-RG-1421G'),
(7, 'NTU-RG-1421G-WZ'),
(8, 'Iskratel E80'),
(9, 'RX-22311'),
(10, 'ZTE H298A'),
(11, 'Iskratel E70'),
(12, 'Sercomm S1010'),
(13, 'RX-22200'),
(15, 'ZTE H108N'),
(16, 'UR-344'),
(18, 'Собственное');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ID услуги` int(9) NOT NULL AUTO_INCREMENT,
  `Интернет` int(9) DEFAULT NULL,
  `Цифровое ТВ` int(9) DEFAULT NULL,
  `Сотовая связь` int(9) DEFAULT NULL,
  `Проводная связь` int(9) DEFAULT NULL,
  `ID тарифного плана` int(9) NOT NULL,
  `ID карты доступа` int(9) NOT NULL,
  PRIMARY KEY (`ID услуги`),
  KEY `ID тарифного плана` (`ID тарифного плана`),
  KEY `ID карты доступа` (`ID карты доступа`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11111121 ;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`ID услуги`, `Интернет`, `Цифровое ТВ`, `Сотовая связь`, `Проводная связь`, `ID тарифного плана`, `ID карты доступа`) VALUES
(1, 0, 0, 0, 1, 7, 1),
(2, 1, 1, 1, 1, 7, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `ID Лицевого счета` int(9) NOT NULL AUTO_INCREMENT,
  `ФИО абонента` varchar(255) NOT NULL,
  `Контактный телефон` varchar(12) NOT NULL,
  `Дата подключения` date NOT NULL,
  `Адрес установки` varchar(255) NOT NULL,
  `Технология подключения` varchar(255) NOT NULL,
  `Услуги` int(9) NOT NULL,
  `Линия` int(9) NOT NULL,
  `Оборудование` int(9) NOT NULL,
  PRIMARY KEY (`ID Лицевого счета`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`ID Лицевого счета`, `ФИО абонента`, `Контактный телефон`, `Дата подключения`, `Адрес установки`, `Технология подключения`, `Услуги`, `Линия`, `Оборудование`) VALUES
(1, 'Пупкин Григорий Иванович', '89275551121', '2020-06-01', 'г. Волгоград ул. Космонавтов д.200 кв. 40', 'FTTx', 1, 1, 1),
(2, 'Григорьев Ярослав Сергеевич', '89541114354', '2020-06-07', 'г. Волгоград ул. Танкистов 11', 'PON', 2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tariff_plan`
--

CREATE TABLE IF NOT EXISTS `tariff_plan` (
  `ID Тарифного плана` int(9) NOT NULL AUTO_INCREMENT,
  `Наименование` varchar(255) NOT NULL,
  `Скорость соединения` varchar(11) DEFAULT NULL,
  `К-во ТВ каналов` varchar(11) DEFAULT NULL,
  `К-во минут сотовой связи` varchar(11) DEFAULT NULL,
  `Цена мин. сверх пакета` varchar(11) DEFAULT NULL,
  `Пакет интернет трафика` varchar(11) DEFAULT NULL,
  `Цена мин. проводной связи` varchar(11) DEFAULT NULL,
  `Цена тарифа` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID Тарифного плана`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `tariff_plan`
--

INSERT INTO `tariff_plan` (`ID Тарифного плана`, `Наименование`, `Скорость соединения`, `К-во ТВ каналов`, `К-во минут сотовой связи`, `Цена мин. сверх пакета`, `Пакет интернет трафика`, `Цена мин. проводной связи`, `Цена тарифа`) VALUES
(2, 'Скоростной', '200', NULL, NULL, NULL, NULL, NULL, '600'),
(3, 'Технологии общения', '100', NULL, '500', '0.3', '12', NULL, '650'),
(4, 'Технологии развлечения', '100', '130', NULL, NULL, NULL, NULL, '550'),
(5, 'Технологии выгоды', '100', '130', '500', '0.5', '12', NULL, '699'),
(6, 'Технологии выгоды+', '100', '190', '700', '0.1', '20', '0.05', '1000');

-- --------------------------------------------------------

--
-- Структура таблицы `tv_box`
--

CREATE TABLE IF NOT EXISTS `tv_box` (
  `ID ТВ приставки` int(11) NOT NULL AUTO_INCREMENT,
  `Модель ТВ приставки` varchar(255) NOT NULL,
  PRIMARY KEY (`ID ТВ приставки`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `tv_box`
--

INSERT INTO `tv_box` (`ID ТВ приставки`, `Модель ТВ приставки`) VALUES
(1, 'SML-5050'),
(2, 'SML-5010'),
(3, 'SML-5041'),
(4, 'SML-5010CT'),
(5, 'SML-482 HD'),
(6, 'SML-282 HD'),
(7, 'SML-292 HD'),
(8, 'MAG-250'),
(9, 'STB HD Standart'),
(10, 'Yuxing YX-6916A'),
(11, 'Motorolla VIP1003'),
(13, 'Собственное');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
