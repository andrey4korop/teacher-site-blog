-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2016 г., 00:23
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `teacher`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `media_video` text NOT NULL,
  `media_audio` text NOT NULL,
  `media_img` varchar(255) NOT NULL,
  `vazhno` int(2) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `type`, `category`, `title`, `full_text`, `media_video`, `media_audio`, `media_img`, `vazhno`, `date`) VALUES
(1, 'text', 'Украинские композиторы', 'Текстовая новость', 'Праздник Вербное воскресенье связан со знаменитым входом Христа в Иерусалим верхом на осле, с чего и начали его крестные страдания. Рассказы об этом событии можно найти в Евангелиях от всех четырех евангелистов - Марка, Матфея, Луки и Иоанна. Праздник Вербное воскресенье имеет такое важное значение для всех верующих потому, что вход Иисуса в Иерусалим символизировал начало его добровольных страданий ради людей. А въезд его в город на осле был связан с тем, что во времена Христа все земные цари и победители въезжали в Иерусалим на ослах или лошадях, а народ встречал их с криками и взмахами пальмовых веток. Но Христос въезжал не как победитель или земной царь, а как царь Небесного царства и Победитель греха и смерти. И он знал, что его ждет, осознанно идя на смерть ради всех живущих.', '', '', '', 1, 0),
(2, 'video', '', 'Пример видео', 'Описание видео.', '<iframe src="https://player.vimeo.com/video/95929658?color=ffffff&title=0&byline=0&portrait=0" allowFullScreen></iframe>', '', '', 1, 0),
(3, 'chit', '', 'Котовский Глеб', 'Пример вставки цитаты пример,\r\n вставки цитаты пример вставки цитаты пример.', '', '', '', 0, 11111111),
(4, 'audio', '', 'Название песни', 'Краткое описание данной песни ', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `set` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `set`, `title`, `full_text`, `img`, `video`, `audio`, `add`, `add2`) VALUES
(1, 'about_me', 'Обо мне', 'Лиза лично заинтересована в прогрессе каждого ученика - маленького или взрослого. Сторонница коммуникативного метода преподавания, где учащийся является активным участником занятий, а не объектом обучающей деятельности. Так как одним лишь знанием теории и умением писать нельзя обойтись, необходимо умение комфортно общаться в живую.\r\n\r\nИспользует различные подходы и формы занятий, в зависимости от необходимости - первое знакомство с английским языком (Браво!!), подтянуть или систематизировать грамматику (иногда после 10 лет изучения языка в школе в голове каша, хотя вроде столько всего знаем), подготовиться к собеседованию (на многочисленных примерах и "репетициях"), помочь с домашним заданием, разрушить (наконец) языковой барьер и заговорить. Лиза жила 2 года в США, Мексике, Испании, обожает путешествовать и делится языковым и культурным опытом и считает, что владение английским это норма в современном мире, дверь к увлекательному миру литературы, музыки, новейшей информации и, главное, общению.\r\n\r\nНижегородский Государственный Лингвистический Университет, диплом с отличием. Опыт в преподавательской деятельности составляет более 5 лет.\r\n\r\nВладение языками: английский, испанский.', '/img/photo/4chan1313310396316.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `url`, `title`) VALUES
(1, '/img/photo/ImageJPEG_0075.jpg', 'Мы крутые!!!'),
(2, '/img/photo/ImageJPEG_0068.jpg', 'Мы крутые'),
(3, '/img/photo/ImageJPEG_0038.jpg', 'Мы крутые');

-- --------------------------------------------------------

--
-- Структура таблицы `slider2`
--

CREATE TABLE IF NOT EXISTS `slider2` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `slider2`
--

INSERT INTO `slider2` (`id`, `url`) VALUES
(1, '/img/media/item-big/img1.jpg'),
(2, '/img/media/item-big/img2.png'),
(4, '/img/media/item-big/img3.png'),
(6, '/img/photo/ImageJPEG_0287.jpg'),
(7, '/img/photo/ImageJPEG_0291.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `slider3`
--

CREATE TABLE IF NOT EXISTS `slider3` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slider3`
--

INSERT INTO `slider3` (`id`, `url`) VALUES
(1, '/img/media/item-big/img1.jpg'),
(2, '/img/media/item-big/img1.jpg'),
(3, '/img/photo/ImageJPEG_0344.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`login`, `pass`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
