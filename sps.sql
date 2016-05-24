-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2016 г., 14:01
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `base_setting`
--

CREATE TABLE IF NOT EXISTS `base_setting` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `name` varchar(255) NOT NULL COMMENT 'Название',
  `value` varchar(255) NOT NULL COMMENT 'Значение',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `base_setting`
--

INSERT INTO `base_setting` (`id`, `name`, `value`) VALUES
(1, 'adress', 'Шарлыкское шоссе 1/6, оф. 406'),
(2, 'phone', '29-24-78'),
(3, 'email', 'betonvsem2015@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `beton`
--

CREATE TABLE IF NOT EXISTS `beton` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `title` varchar(255) NOT NULL COMMENT 'Название',
  `description` text NOT NULL COMMENT 'Описание',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `beton`
--

INSERT INTO `beton` (`id`, `title`, `description`) VALUES
(1, 'Товарный бетон М100 (В7,5)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(2, 'Товарный бетон М150 (В 12,5)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(3, 'Товарный бетон М200 (В 15)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(4, 'Товарный бетон М250 (В 20)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(5, 'Товарный бетон М300 (В 22,5)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(6, 'Товарный бетон М350 (В 25)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(7, 'Товарный бетон М400 (В30)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(8, 'Товарный бетон М450 (В 35)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.'),
(9, 'Товарный бетон М500 (В 40)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `img` varchar(255) NOT NULL COMMENT 'Картинка',
  `description` text NOT NULL COMMENT 'Описание',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `description`) VALUES
(1, '1.jpg', 'Гарантия качества'),
(2, '2.jpg', 'Низкие цены'),
(3, '3.jpg', 'Быстрая доставка');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `title` varchar(255) NOT NULL COMMENT 'Название',
  `block` varchar(255) NOT NULL COMMENT 'Блок',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `block`) VALUES
(1, 'Продажа бетона', 'pb'),
(2, 'Аренда спецтехники', 'st'),
(3, 'Контакты', 'cont'),
(4, 'Написать нам', 'write');

-- --------------------------------------------------------

--
-- Структура таблицы `specteh`
--

CREATE TABLE IF NOT EXISTS `specteh` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Номер',
  `title` varchar(255) NOT NULL COMMENT 'Название',
  `description` text NOT NULL COMMENT 'Описание',
  `img` varchar(255) NOT NULL COMMENT 'Картинка',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `specteh`
--

INSERT INTO `specteh` (`id`, `title`, `description`, `img`) VALUES
(1, 'КАМАЗ 6520-60', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'kamaz.jpg'),
(2, 'Самосвал КАМАЗ 45392D', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'kamaz2.jpg'),
(3, 'Автокран ZOOMLION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'kran.jpg'),
(4, 'Экскаватор-погрузчик JCB 3CX 14M2WM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'traktor.jpg'),
(5, 'Фронтальный погрузчик LIUGONG CLG856 (3м3)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'spectehnika-frontalnyy-pogruzchik-LIUGONG-CLG-856---1_big--11080413254961052700.jpg'),
(6, 'Погрузчик JCB225', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'mini-pogruzchik-jcb-225-agri-650x488-59098.jpg'),
(8, 'Автобетоносмеситель 5КАМАЗ5511 (5 куб.)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'ETz6Umm4.jpg'),
(9, 'BAW FENIX', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'baw_fenix_1044.jpeg'),
(10, 'Каток XGMA модель XG6121', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas id, quis voluptates a esse officiis quibusdam rerum sed quisquam, cum minus in itaque labore maxime quae iusto, assumenda nam explicabo.', 'katok.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
