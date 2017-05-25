-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 25 2017 г., 22:33
-- Версия сервера: 5.5.46-0+deb7u1
-- Версия PHP: 5.5.33-1~dotdeb+7.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ss`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `allocution`
--

CREATE TABLE IF NOT EXISTS `allocution` (
  `text` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `allocution`
--

INSERT INTO `allocution` (`text`) VALUES
('<p>Всем привет! В ноябре 2016 года я был выбран новым Уполномоченным по правам студентов.</p><p><br></p><p>Моя главная цель — обеспечить защиту прав и создать комфортные условия для обучающихся в Высшей школе экономики.</p><p>\r\n\r\n</p><p>Для этого мы с командой определили несколько направлений работы:\r\n</p><p><span style="font-weight: bold;">\r\n</span></p><p><span style="font-weight: bold;"><br></span></p><p><span style="font-weight: bold;">Защита прав студентов и создание новых возможностей</span></p><p><br></p><p>Основная задача студентов - обучение. И в процессе обучения важны не только образовательные программы и преподаватели, но и понятные и удобные для них правила, регулирующие данный процесс в университете. Основная моя задача это защита прав студентов в соответствии с правилами и уставом ВШЭ и предложение изменений в некоторые пункты этих правил;\r\n</p><p><span style="font-weight: bold;">\r\n</span></p><p><span style="font-weight: bold;"><br></span></p><p><span style="font-weight: bold;">Работа с общежитиями</span><br></p><p>\r\n</p><p><br></p><p>В общежитиях иногородние студенты проводят не меньше времени, чем в самом университете. Общежития - важный фактор социализации, где студенты не только учатся и готовятся к занятиям, но также обретают самостоятельность и независимость. Несмотря на то что общежития ВШЭ - одни из лучших в России, там регулярно случаются проблемы, которые необходимо решать;</p><p><span style="font-weight: bold;">\r\n\r\n</span></p><p><span style="font-weight: bold;"><br></span></p><p><span style="font-weight: bold;">Поддержка студенческих инициатив\r\n</span></p><p><br></p><p>У Вышки есть свой лозунг – « Не для школы, а для жизни мы учимся». Многие вышкинские студенческие организации являются гордостью университета. Когда я только поступил в ВШЭ, мой профессор сказал: «В ВШЭ ты сможешь попробовать себя, поиграть во взрослую жизнь: хочешь быть бизнесменом – создавай или вступай в студ. организацию или делай стартап, хочешь стать ученым – становись учебным ассистентом и начинай работать в научной лаборатории; хочешь быть политиком – баллотируйся в студсовет; если хочешь быть спортсменом – записывайся в секцию, ты даже можешь создать свое студенческое СМИ или стать журналистом уже существующего».\r\n</p><p>\r\n</p><p><br></p><p>Кроме того, в случае конфликтов между студентами, студенческими организациями и студенческими советами или между органами студенческого самоуправления, Уполномоченный по правам студентов выступает в роли арбитра.</p>\r\n              \r\n              \r\n              \r\n              \r\n              \r\n              \r\n              ');

-- --------------------------------------------------------

--
-- Структура таблицы `appeals`
--

CREATE TABLE IF NOT EXISTS `appeals` (
  `id` int(11) NOT NULL,
  `appeal` text CHARACTER SET utf8 NOT NULL,
  `author_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `author_surname` varchar(40) CHARACTER SET utf8 NOT NULL,
  `id_category` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `appeals`
--

INSERT INTO `appeals` (`id`, `appeal`, `author_name`, `author_surname`, `id_category`, `email`, `status`, `answer`) VALUES
(46, 'asdasd', 'fhfh', 'fjfjfj', 1, 'specialforbattle@mail.ru', 1, 'asdasdasd'),
(48, 'ndvsdvsdjnnlnvjnv', 'cnvknvfjnv', 'fnvknfvn', 1, 'dan@styleru.net', 0, ''),
(49, 'андрей посмотри какой клевый сайт', 'плралгапрл', 'серпагщаг', 2, 'dan@styleru.net', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `appeals_category`
--

CREATE TABLE IF NOT EXISTS `appeals_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `appeals_category`
--

INSERT INTO `appeals_category` (`id`, `name`) VALUES
(1, 'В студсовет'),
(2, 'Омбудсмену');

-- --------------------------------------------------------

--
-- Структура таблицы `blognews`
--

CREATE TABLE IF NOT EXISTS `blognews` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_blog` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `blognews`
--

INSERT INTO `blognews` (`id`, `date_created`, `author`, `name`, `id_blog`, `text`, `picture`) VALUES
(1, '2017-05-19', '', 'Студсовет решил проблему с гардеробом', 3, 'У многих студентов возникали вопросы, связанные с гардеробом. Руководство с удовольствием пошло бы навстречу, но, к сожалению, по техническим причинам, жалобы не получится удовлетворить. Во-первых, нужно учитывать, что, если все студенты начнут вешать с куртками обувь в пакетах, гардеробные вешалки не выдержат такой вес. Во-вторых, пакет с обувью может испачкать чужую куртку. В-третьих, если оставлять обувь без пакетов, она вся не уместится. Вешалки нельзя разрешить опять же из-за недостатка места. В индивидуальных случаях обувь можно оставлять в пакетах в камерах хранения.\r\n		              ', 'gard_uch43_4.jpg'),
(2, '2017-05-10', '', 'Комитет по внешним связям проводит набор', 2, 'Осталось совсем немного времени до закрытия регистрации на собеседование!\r\nКого мы ищем?\r\n-Амбициозных\r\n-Ответственных\r\n-Любознательных\r\n-Умных\r\n-Креативных\r\nЧто мы тебе дадим?\r\nПоле для реализации своих идей, возможность улучшить навыки английского языка, поможем​ преодолеть коммуникационные барьеры.\r\nНемного о наших текущих проектах: мы работаем над разработкой гайда по мобильности, работаем над расширением списка грантов и стипендий путем привлечения внешних сторон, расширяем поле стажировок для наших студентов, спасаем наших иностранных студентов, мы в курсе всех важных событий в Москве, а еще у нас есть один секретный проект...\r\nСтановись частью комитета по внешним связям и будь на волне ?\r\nВнимание! Регистрация закроется 20 апреля в 23:00.\r\nСсылка на регистрацию: https://goo.gl/forms/Wfg6jMAZLBf8OzNK2', ''),
(3, '2017-05-16', '', 'fbbffb', 7, 'Важная информация❗ \r\nС 01.01.2017 в НИУ ВШЭ приостановлена выплата стипендии Jaguar Game Сhanger в связи с разрывом сотрудничества с компанией. \r\nНапомним, что стипендия выпл<span style="font-weight: bold;">ачивалась студентам</span> из стран СНГ и коммерческим студентам за успехи в учебной и общественной деятельности. \r\nК сожалению, о том, когда будет возобновлена выплата данной стипендии неи<span style="background-color: yellow;">звест</span>но. По всем вопросам просим обращаться в наш Социальный комитет!\r\n		              \r\n		              ', ''),
(5, '2017-05-19', '', 'Защита прав студентов', 5, '<p><span style="font-weight: bold;"><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span></span><br></p>\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              ', 'gyOoq-0h7f4.jpg'),
(10, '2017-05-25', '', 'Студсовет решил проблему с гардеробом', 4, 'У многих студентов возникали вопросы, связанные с гардеробом. Руководство с удовольствием пошло бы навстречу, но, к сожалению, по техническим причинам, жалобы не получится удовлетворить. Во-первых, нужно учитывать, что, если все студенты начнут вешать с куртками обувь в пакетах, гардеробные вешалки не выдержат такой вес. Во-вторых, пакет с обувью может испачкать чужую куртку. В-третьих, если оставлять обувь без пакетов, она вся не уместится. Вешалки нельзя разрешить опять же из-за недостатка места. В индивидуальных случаях обувь можно оставлять в пакетах в камерах хранения.\r\n		              ', '7f2d7c88a0fb9ffdce6ce75690a85aad.jpg'),
(23, '2017-05-19', '', 'Защита прав студентов', 5, '<span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span>', 'gyOoq-0h7f4.jpg'),
(24, '2017-05-19', '', 'Защита прав студентов', 5, '<span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span>', 'gyOoq-0h7f4.jpg'),
(25, '2017-05-19', '', 'Защита прав студентов', 5, '<span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span>', 'gyOoq-0h7f4.jpg'),
(26, '2017-05-19', '', 'Защита прав студентов', 5, '<span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span>', 'gyOoq-0h7f4.jpg'),
(27, '2017-05-19', '', 'Защита прав студентов', 5, '<span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span><span style="color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;">Очень важно осознавать необходимость соблюдения определенных правил...</span>', 'gyOoq-0h7f4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `name`) VALUES
(1, 'Блог комитета по качеству образования'),
(2, 'Блог комитета по внешним связям'),
(3, 'Блог студсовета ФБМ'),
(4, 'Блог студсовета ФСН'),
(5, 'Блог комитета по информационному обеспечению'),
(6, 'Блог комитета по защите прав студентов'),
(7, 'Блог комитета по социальным проблемам'),
(8, 'Блог комитета по внутренней работе'),
(9, 'Блог комитета по работе с общежитиями'),
(10, 'Блог комитета по работе с иностранными студентами'),
(11, 'Блог комитетта по внеучебной деятельности'),
(12, 'Блог финансового комитета'),
(13, 'Блог студсовета ФМ'),
(14, 'Блог студсовета ФФ'),
(15, 'Блог студсовета ФКН'),
(16, 'Блог студсовета ФП'),
(17, 'Блог студсовета ФГН'),
(18, 'Блог студсовета ФКМД'),
(19, 'Блог студсовета ФМЭМП'),
(20, 'Блог студсовета ФЭН'),
(21, 'Блог студсовета МИЭФ');

-- --------------------------------------------------------

--
-- Структура таблицы `commitees`
--

CREATE TABLE IF NOT EXISTS `commitees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_head` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `commitees`
--

INSERT INTO `commitees` (`id`, `name`, `info`, `logo`, `link`, `id_head`) VALUES
(1, 'По информационному обеспечению', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'information_support', 105),
(3, 'По защите прав студентов', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              \r\n		              \r\n		              \r\n		              ', 'Снимок экрана 2017-05-25 в 0.04.04.png', 'right_protection', 0),
(4, 'По социальным проблемам', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'social_problems', 103),
(5, 'По внутренней работе', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'inner_problems', 100),
(6, 'По работе с общежитиями', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'dormitories_work', 0),
(7, 'По работе с иностранными студентами', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'foreig_students_work', 0),
(8, 'По внеучебной деятельности', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'extracurricular_activities', 0),
(9, 'По внешним связям', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'external_links', 0),
(10, 'Финансовый ', '<span style="background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e<span style="font-weight: bold;">x ea commodo co</span>nsequat. D<span style="font-weight: bold;">uis aute irure </span>dolor in reprehenderit in vol.\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              </span>\r\n		              ', 'exvdsv.jpg', 'financial_commitee', 99);

-- --------------------------------------------------------

--
-- Структура таблицы `commitees_members`
--

CREATE TABLE IF NOT EXISTS `commitees_members` (
  `id_member` int(11) NOT NULL,
  `id_commitee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `commitees_members`
--

INSERT INTO `commitees_members` (`id_member`, `id_commitee`) VALUES
(81, 1),
(82, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `commitee_blog`
--

CREATE TABLE IF NOT EXISTS `commitee_blog` (
  `id_blog` int(11) NOT NULL,
  `id_commitee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `commitee_blog`
--

INSERT INTO `commitee_blog` (`id_blog`, `id_commitee`) VALUES
(2, 9),
(5, 1),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `council`
--

CREATE TABLE IF NOT EXISTS `council` (
  `id` int(11) NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `council`
--

INSERT INTO `council` (`id`, `info`, `picture`) VALUES
(1, '<div class="items_group clearfix" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; zoom: 1;"><p style="margin-bottom: 15px; transition: all 0.4s ease 0s; line-height: 1.5; font-variant-numeric: inherit; padding: 0px; border: 0px; font-stretch: inherit; vertical-align: baseline;">Основная идея создания Студсовета&nbsp;–&nbsp;дать студентам возможность свободно выражать свое мнение&nbsp;и&nbsp;принимать участие&nbsp;в&nbsp;обсуждении&nbsp;ключевых вопросов&nbsp;(учебных&nbsp;и&nbsp;внеучебных),&nbsp;затрагивающих интересы студенчества<br style="transition: all 0.4s ease 0s;"></p><p style="margin-bottom: 0px; transition: all 0.4s ease 0s; line-height: 1.5; font-variant-numeric: inherit; padding: 0px; border: 0px; font-stretch: inherit; vertical-align: baseline;">Студсовет имеет право предлагать руководству Университета свое видение развития жизни студентов. Члены Студсовета обладают правом совещательного голоса и на равных участвуют в заседаниях Ученого совета НИУ ВШЭ, на которых высказывают позицию студентов по всем темам совещаний.</p><p style="margin-bottom: 0px; transition: all 0.4s ease 0s; line-height: 1.5; font-variant-numeric: inherit; padding: 0px; border: 0px; font-stretch: inherit; vertical-align: baseline;"><br style="transition: all 0.4s ease 0s;">Студсовет уже сейчас активно работает, и любой студент может прийти сюда с инициативным проектом или проблемой.&nbsp;</p></div>\r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              \r\n		              ', 'logo.png');

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `name`, `id_local`) VALUES
(1, 'Факультет бизнеса и менеджмента', 1),
(2, 'Факультет социальных наук', 2),
(3, 'Факультет математики', 3),
(4, 'Факультет физики', 4),
(5, 'Факультет компьютерных наук', 5),
(6, 'Факультет права', 6),
(7, 'Факультет гуманитарных наук', 7),
(9, 'Факультет коммуникаций, медиа и дизайна', 8),
(10, 'Факультет мировой экономики и мировой политики', 9),
(11, 'Факультет экономических наук', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `directors`
--

CREATE TABLE IF NOT EXISTS `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `vk` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_category` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `name`, `id_category`, `link`, `type`) VALUES
(5, ' Положение о стипендиальном обеспечении', 1, '1465318029.docx', 0),
(6, 'Отчет о деятельности правового комитета за март 2016', 4, '1465318029.docx', 0),
(7, ' Отчет о деятельности информационного комитета за март 2016', 4, '1465318029.docx', 0),
(8, 'Отчет председателя студенческого совета НИУ ВШЭ за март 2016', 5, '1465318029.docx', 0),
(9, 'Отчет председателя студенческого совета НИУ ВШЭ за апрель 2016', 5, '1465318029.docx', 0),
(10, 'Анкета для заявки на ПГАС по общ деятельности', 6, '1465318029.docx', 0),
(11, 'Анкета для заявки на ПГАС по учебной деятельности', 6, '1465318029.docx', 0),
(12, 'Отчет о деятельности правового комитета за март 2016', 4, '1465318029.docx', 0),
(13, 'Отчет о деятельности информационного комитета за март 2016', 4, '1465318029.docx', 0),
(14, ' Отчет о деятельности правового комитета факультета социальных наук за март 2016', 7, '1465318029.docx', 0),
(15, ' Отчет о деятельности правового комитета факультета бизнеса и менеджмента за март 2016', 7, '1465318029.docx', 0),
(18, 'Результат СОП за первый модуль 2016-2017 учебного года', 8, '1465318029.docx', 0),
(19, 'Результат СОП за второй модуль 2016-2017 учебного года', 8, '1465318029.docx', 0),
(21, 'Протокол заседания студсовета ФБМ от 23.04.2017', 7, '1465318029.docx', 0),
(41, 'Анкета для записи на ПГАС по общественной деятельности', 6, '1465318029.docx', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `document_categories`
--

CREATE TABLE IF NOT EXISTS `document_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `document_categories`
--

INSERT INTO `document_categories` (`id`, `name`) VALUES
(1, 'Положения'),
(2, 'Повестки заседаний'),
(3, 'Протоколы заседаний'),
(4, 'Отчеты о деятельности комитетов'),
(5, 'Отчеты о деятельности председателя'),
(6, 'Анкеты'),
(7, 'Локальные акты'),
(8, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `initiatives`
--

CREATE TABLE IF NOT EXISTS `initiatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `initiatives`
--

INSERT INTO `initiatives` (`id`, `name`) VALUES
(1, 'Анализ финансовых планов расходов Университета за 2014, 2015, 2016'),
(2, 'Анализ экономической и энергетической эффективности различных типов лампочек'),
(3, 'Моделирование платы за проживание в общежитиях'),
(4, 'Моделирование порядка определения градаций и размера ПГАС');

-- --------------------------------------------------------

--
-- Структура таблицы `locals`
--

CREATE TABLE IF NOT EXISTS `locals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_head` int(11) NOT NULL,
  `id_secretary` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `locals`
--

INSERT INTO `locals` (`id`, `name`, `link`, `id_head`, `id_secretary`) VALUES
(1, 'Студсовет факультета бизнеса и менеджмента', 'business_management', 16, 17),
(2, 'Студсовет факультета социальных наук', 'social_science', 0, 0),
(3, 'Студсовет факультета математики', 'mathematics', 0, 0),
(4, 'Студсовет факультета физики', 'physics', 0, 0),
(5, 'Студсовет факультета компьютерных наук', 'computer_science', 0, 0),
(6, 'Студсовет факультета права', 'right', 0, 0),
(7, 'Студсовет факультета гуманитарных наук', 'humanitarian_science', 0, 0),
(8, 'Студсовет факультета коммуникаций, медиа и дизайна', 'media', 0, 0),
(9, 'Студсовет факультета мировой экономики и мировой политики', 'world_economics', 0, 0),
(10, 'Студсовет факультета экономических наук', 'economical_science', 0, 0),
(11, 'Студсовет международного института экономики и финансов', 'international_institute_economics', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `local_blogs`
--

CREATE TABLE IF NOT EXISTS `local_blogs` (
  `id_blog` int(11) NOT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `local_blogs`
--

INSERT INTO `local_blogs` (`id_blog`, `id_local`) VALUES
(3, 1),
(4, 2),
(13, 3),
(14, 4),
(15, 5),
(16, 6),
(17, 7),
(18, 8),
(19, 9),
(20, 10),
(21, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `local_documents`
--

CREATE TABLE IF NOT EXISTS `local_documents` (
  `id_document` int(11) NOT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `local_documents`
--

INSERT INTO `local_documents` (`id_document`, `id_local`) VALUES
(21, 1),
(41, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `local_members`
--

CREATE TABLE IF NOT EXISTS `local_members` (
  `id_local` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `missions`
--

CREATE TABLE IF NOT EXISTS `missions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `missions`
--

INSERT INTO `missions` (`id`, `name`, `picture`) VALUES
(6, 'Разработка системы фандайзинга', 'coins_copy.png'),
(7, 'Защита прав студентов', 'rights.png'),
(9, 'Обеспечение обратной связи', 'phone.png'),
(10, 'Разрешение спорных ситуаций', 'law_copy.png'),
(11, 'Оценка студенческих инициатив', 'note.png'),
(12, 'Оценка деятельности студорганизаций', 'man_copy.png');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_created` date NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` longtext CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `date_created`, `picture`, `text`, `author`) VALUES
(62, 'Интервью с Артемом Хромовым', '2017-05-19', '1474744505.jpg', '<p style="line-height: 1.6;">Председатель Студсовета беседует с Уполномоченным по правам студентов в РФ о том, есть ли жизнь после студсовета, зачем нужны уполномоченные и как работать с правовыми актами, если ты журналист.</p>\r\n<p style="line-height: 1.6;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-weight: bold;">— Ты на сегодняшний день являешься эдаким титаном студенческого самоуправления, ты ведь уже 10 лет в студенческой тусовке. Для начала, можешь рассказать, как тебя в это занесло?</span></p>\r\n<p style="line-height: 1.6;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="line-height: 1.6;">		              </p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline; text-decoration-style: initial; text-decoration-color: initial;">— Несколько лет назад мы с товарищами активно обсуждали то, что многие вопросы оперативно не решаются на федеральном уровне и внутри университета, потому что на федеральный уровень выносятся различные проблемы: стипендиальное обеспечение, ремонт общежитий и так далее, и так далее. В связи с этим мы решили, что очень важно создать организацию, которая будет отстаивать на федеральном уровне права студенчества и продвигать инициативы, которые могут изменить судьбу студентов нашей страны. Так был образован Российский Студенческий Союз, который я и возглавил, он занимался решением многих вопросов.&nbsp;<br>Некоторое время спустя органы власти объявили проведение выборов федерального студенческого омбудсмена, на которые я выдвинулся. Была достаточно жесткая борьба, но мне удалось победить. И, собственно говоря, после этого момента я стал уже другой формации, на другом уровне решать многие вопросы и проблемы. Мы заявили ряд программных установок, с которыми выступили и которых впоследствии мы добились. Это отмена комендантского часа, вопросы, связанные с нарушением прав иногородних студентов, вопросы задержки стипендий, которые нередко зависали на несколько месяцев. Мы добивались того, чтобы решались проблемы студентов вузов, которые начали активно закрываться, ликвидироваться. Добились того, чтобы студенты могли бесплатно посещать музеи и многого другого.&nbsp;<br>И одна из важных составляющих работы, как я считаю – развитие студенческого самоуправления в регионах и в вузах. Нужно сказать, что нередко в университетах просто нет молодых людей с активной гражданской позицией, которые готовы добиваться решения своих вопросов, нередко многие проблемы, которые оглашаются студентами, заканчиваются тем, что к ним применяют определенные санкции. За последние годы ситуация в корне изменилась, нам удалось изменить позицию органов власти. При этом мы взяли установку, что должны проводиться всеобщие студенческие выборы в высших школах, после этого мы запустили проект выборов всех студенческих лидеров прямым тайным голосованием, с программными установками, с дебатами. Именно поэтому сейчас проходят выборы студенческих омбудсменов после того, как Вышка их ввела. Проходят уже в 18 регионах и в 80 университетах нашей страны.&nbsp;<br>Мне кажется, что в настоящее время просто-напросто не существует никаких социальных лифтов, которые были раньше. Они упали после того, как распался Советский Союз. В нынешней ситуации политические институты и партии не смогли создать те самые социальные лифты, которые действительно позволили бы молодым людям реализовать свой потенциал. Поэтому мне видится, что, как и во многих странах мира, университеты должны стать кузницей кадров политической, экономической, университетской элиты, которые смогут в ближайшей перспективе руководить страной. И мне видится, что сейчас многие политические лидеры начинают выделяться в университетах, потом, после окончания Высшей школы, они переходят в политическую жизнь, где добиваются очень весомых результатов, потому что действительно прекрасно знают повестку, обладают опытом избирательных технологий и готовы идейно отстаивать свои интересы. Я разговаривал с председателями студсоветов многих других вузов и, конечно, профсоюза. У многих из них неоднозначное отношение к институту уполномоченных вуза: где-то просто их не хотят, где-то, как в СПбГУ председатель студсовета стал уполномоченным своего вуза.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><span style="font-weight: bold;">— Я достаточно часто общаюсь с председателями других ВУЗов и порой их отношение к институту уполномоченного внутри университета действительно неоднозначное, многие опасаются, что уполномоченный будет ограничивать их возможности. Скажи, какую роль, по-твоему, должен занимать уполномоченный в вузе и как избежать конфликта между уполномоченным и профсоюзом, или уполномоченным и студсоветом?</span></p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline; text-decoration-style: initial; text-decoration-color: initial;">— Профсоюзные организации существуют в университетах очень давно, нередко их возглавляют молодые и прогрессивные ребята, которые действительно стремятся изменить ситуацию внутри вузов. Но часто студенческие профсоюзы возглавляют люди достаточно взрослые, которые, как показывает практика, нередко не встают на позицию студентов, а выступают с обратной точкой зрения. Поэтому меня не удивляет, что и к моей деятельности, и к деятельности молодых профсоюзников, и к деятельности молодых студенческих лидеров, и к прямым тайным выборам среди студенчества есть предвзятое отношение. Но я абсолютно убежден, что неизбежна ситуация, при которой прямые тайные выборы станут основой формирования студенческих организаций и кузницей студенческих лидеров. Поэтому я выступаю за то, чтобы сама система была такой, когда каждый студент может прийти и заявить себя в качестве кандидата, когда он может что-то требовать с человека, которого он выбирает, когда каждый может прийти на избирательный участок и проголосовать, когда существует механизм работы того или иного представителя, как существует он во взрослой политике во многих странах мира.&nbsp;<br>Но мне не принципиально, будут ли существовать институты студенческих омбудсменов в вузах. Мне кажется, это добровольный выбор каждой университетской организации: если они считают, что должен быть главный орган, который этим занимается – пусть так и будет. И действительно, многие по-разному решают этот вопрос: некоторые перекладывают эти полномочия на председателя, некоторые напрямую председателя выбирают на эту должность. А некоторые делают достаточно хитро — они делают человека частью своей структуры в рамках правозащитной деятельности, и делают так, чтобы этот человек был всенародно избран на должность омбудсмена.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline; text-decoration-style: initial; text-decoration-color: initial;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><span style="font-weight: bold;">— В Вышке был избран первый уполномоченный по правам студентов. С тех пор прошел почти год. Как ты оцениваешь Вышкинский опыт?</span></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— На самом деле, вышкинский опыт стал прототипом проекта, который сейчас реализуется во многих регионах страны. В Вышке действительно прошли выборы, где выдвинулось много кандидатов, которые идейно болели проблемами студентов, хотели решать все вопросы на уровне законодательства. Поэтому опыт Вышки по решению проблем нужно применять для того, чтобы лучшие практики тиражировались в университеты и там развивались.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><span style="font-weight: bold;">— Ты взаимодействуешь с огромным количеством нормативно-правовых актов, да и правовая база — это основной инструмент уполномоченного. Скажи, как ты, выпускник журфака МГУ, адаптировался к такой работе и как работаешь сейчас?</span></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— Вопрос заключается в том, какая команда тебя окружает. Мне кажется, у меня очень яркие, профессиональные друзья, которые могут решать глобальные задачи и формировать новую повестку. И мне удалось изучить действующее законодательство, чтобы разбираться во всех вопросах, но мне это безумно интересно. Не вижу проблемы в том, чтобы студенческим лидером был человек, который не изучает право. Организация подобного процесса неизбежно предполагает работу с правозащитой, знание законодательства и, главное, — возможность и стремления его изменить.&nbsp;<br>Мы делаем все возможное, чтобы понять болевые точки, которые есть у университетов. Их достаточно много. Тогда и возникает повестка, когда мы под лупой рассматриваем проблемы. Когда студентов не пускали ночью, а это заканчивалось смертями, когда мы видели коррупционные взимания за пропуск занятий, сдачу зачетов — это вызывало шок. Всем было понятно, что это беззаконие, и с ним надо бороться. Мы начали довольно жестко искоренять это, и мне хочется верить, что сегодня студенческие омбудсмены будут равняться на лучшие студенческие практики, которые уже существуют. На самом деле, студенческим лидерам не надо заново изобретать велосипед. В топовых университетах есть все документы, чтобы стипендии выдавались прозрачно, чтобы столовые работали хорошо, а студентам не приходилось выходить на переменах за шаурмой; чтобы были нормальные спортзалы, которые работали бы для студентов, а не сдавались бы на сторону. Мне кажется, что есть все необходимое, чтобы все лучшие практики, которые есть у нас сейчас, мы могли бы им показать. В течение долгого времени все собирались на форумах, крупных мероприятиях: вели постоянные дискуссии, общались неформально, знакомились и стали дружить. Но потом все разъезжались, и никто не знал, что дальше делать, чтобы изменить ситуацию у себя в университете.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">Теперь мы сделали все возможное, чтобы свести теории и практики изменений в единую базу. У нас единые документы о правах студентов. У нас есть единые предложения и инициативы: чего же хочет подавляющее большинство студентов. Нам известно, как можно добиваться решения проблем, не обращаясь в правоохранительные органы. Вопрос заключается в том, что теперь нам нужно обучить тех, кто побеждает на выборах. Мы понимаем, что это молодые студенты, которые, возможно, и не сталкивались с правом, так же, как и я в свое время, но которые болеют теми проблемами, которые есть. Если у них есть это стремление, я уверен, что они сделают все возможное, чтобы расколоть этот гранит науки и достичь желаемого.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><span style="font-weight: bold;">— Ты говорил про социальные лифты: недавно прошли выборы в Госдуму. У молодых, активных, общественно настроенных людей возникает желание где-то себя реализовать. Куда бы ты рекомендовал пойти студенту с активной жизненной позицией? В студсовет, в общественную, в партийную организацию? Возможно, к тебе в штаб?</span><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— В настоящее время у студентов достаточно просторов для деятельности: наука, спорт, образование. Но я думаю, что без гражданского участия невозможно влиять на ситуацию. К тому же, это безумно интересно. Поэтому, если есть возможность и желание не только лежать на диване в свободное время, то я всех призываю участвовать в деятельности студенческих объединений и любых общественных организаций. И, безусловно, надо ходить на выборы — и в университете, и на выборы органов власти. Со своим избирательным правом и бюллетенем студенты могут по-разному поступить, но в любом случае стоит прийти на участок.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br><br><span style="font-weight: bold;">— К вопросу о гражданской позиции. Стоит ли членам студорганизаций лезть в политику, или, наоборот, лучше дистанцироваться от этого?</span></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— Если ты не занимаешься политикой, политика займётся тобой. В нынешнюю эпоху любой человек сталкивается с политическими процессами, на которые он, если хочет, может влиять, а если не хочет, будет продолжать обсуждать их на кухне. Поэтому я советую в любом случае интересоваться политической жизнью. И нужно помнить, что нередки ситуации, в которых, например, в журналистику приходят люди с техническим образованием, а в политику — люди, не имеющие о ней понятия: жизнь заставила. Ввиду этого нельзя пренебрегать политическим процессом, нельзя дистанцироваться от политической жизни. Но необязательно в ней активно участвовать.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br><span style="font-weight: bold;">— Общественная деятельность равнозначна политике или нет?</span><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— Журналистика, как говорят, четвёртая власть, а гражданское общество — пятая, которая может контролировать всё. Она является частью политического процесса, но не всегда общественная жизнь основана на политической траектории — существуют и волонтёрские объединения, и детские клубы, и совсем необязательно они участвуют в политической жизни. Если они видят, что законодательство не отвечает их интересам, тогда они могут выступать в роли политических игроков, и, как показывает мировой опыт, достаточно серьёзных. Именно общественные институты являются фундаментом политических структур и оказывают на них сильное влияние. Молодые люди, которые в рамках общественных структур выдвигаются на выборы, зачастую становятся элитой политический системы: можно вспомнить Николя Саркози, Барака Обаму и других — они в своё время были студенческими лидерами, а потом стали заниматься политическими процессами. Многие из них тогда проводили митинги, организовывали “уличную демократию”, в итоге став крупными политическими игроками.</p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"><br><br><span style="font-weight: bold;">— Вопрос напоследок: по твоему мнению, есть ли жизнь после студсовета и куда идут руководители различных студенческих объединений?</span><br></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;"></p>\r\n<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 1.6; vertical-align: baseline;">— Раньше проблема заключалась в том, что не было легитимности, полномочий, траекторий развития студенческих лидеров. Максимум — они верили в то, что смогут подружиться с представителями администрации и получить “хлебное место”. Времена изменились: сегодня многие студенческие лидеры представляют из себя серьёзных людей, знающих законодательство и владеющих избирательными технологиями, обладающих опытом деятельности. Они могут сами выстраивать жизненную траекторию: они становятся нужными в университетах, и их просят там оставаться. Через несколько лет мы увидим, что университеты стали социальными лифтами для политической элиты нашей страны.</p>\r\n<div style="line-height: 1.6;"><br></div>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-weight: normal; font-stretch: inherit; font-size: 13px; line-height: 1.6; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(98, 98, 98); letter-spacing: normal; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(252, 252, 252); text-decoration-style: initial; text-decoration-color: initial;"><br></p>\r\n		              \r\n		              ', 'Дмитрий Овакимян'),
(69, 'Колонка председателя Студсовета', '2017-05-19', '1476123882.jpg', '<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Вот и подошел к концу первый учебный месяц. Первокурсники активно включаются в учебную жизнь, студенческие организации бьются за новых участников, а Студенческий совет продолжает свою работу. Правда, стоит сказать, что работа у нас не останавливалась и летом, но сейчас Студсовет входит в активную фазу, поскольку уже совсем скоро придется подводить итоги за год работы.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Раз в месяц в этой колонке я рассказываю про работу, проделанную Студенческим советом за прошедший месяц, стараюсь объяснить происходящие в Вышке изменения и пишу о планах на будущее.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(98, 98, 98); background-color: rgb(252, 252, 252);"><br></p>', 'Дмитрий Овакимян'),
(70, 'Встреча с ректором: что изменится после?', '2017-05-19', '1468009602.jpeg', '<p></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">6 июля Студенческий совет &nbsp;встретился с ректором ВШЭ Ярославом Кузьминовым и профильными руководителями.&nbsp;</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Ярослав Иванович принял ряд важных решений, которые коснутся как работы Студсовета, так и жизни обычных студентов. Рассказываем, что же изменится по результатам встречи:<br><br><span style="color: rgb(98, 98, 98); font-family: inherit; background-color: rgb(252, 252, 252); border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-weight: bold;">1. Будут опубликованы результаты студенческой оценки преподавания по учебным курсам</span></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Иными словами, все желающие смогут узнать, как студенты оценили преподавание на тех или иных учебных курсах в рамках СОП, которое проходит в системе LMS перед сессиями — сейчас эта информация доступна только для администрации.&nbsp;</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><br><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">Почему это важно?</span><br></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Абитуриенты и студенты при выборе образовательных программ и курсов по выбору смогут опираться не только на программы учебных дисциплин, отзывы и слухи, но и на результаты СОП, являющиеся анонимными и статистически значимыми<br></li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Преподаватели плохо оцененных курсов получат мотивацию к совершенствованию<br></li></ul><br><span style="font-weight: bold;"><span style="border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; color: rgb(98, 98, 98); background-color: rgb(252, 252, 252);">2. Проверка ПУД студсоветами факультетов будет продолжаться, а порядок будет зафиксирован в нормативных документах</span>&nbsp;</span><p></p><p><br>Программы учебных дисциплин — документы, в которых отражены тематические планы, формулы оценок и формы контроля по предметам. На сегодняшний день ПУД бакалавриата проверены на четырёх факультетах — ФСН, ФБМ, МИЭМ и МЭиМП. Нарушений оказалось больше, чем ожидалось — например, на ОП «Менеджмент» ФБМ 85% ПУД не соответствовало нормам.&nbsp;<br>Ректор поручил продолжить проверку ПУД на оставшихся факультетах. Мнение локальных студсоветов по поводу ПУД будет учитываться академическими советами образовательных программ.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><br><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">Почему это важно?</span><br></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Имея на руках корректную программу, студенты всегда будут знать, чего ждать от курса — например, какой вес у экзамена, какие работы предстоит написать в рамках курса<br></li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Проверка ПУД исключает так называемые «блокирующие оценки» (оценки, которые равны результирующей в обход взвешенной суммы иных оценок) — таким образом исключаются нарушения Устава ВШЭ касательно оценивания<br></li></ul><br><span style="font-weight: bold;"><span style="border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; color: rgb(98, 98, 98); background-color: rgb(252, 252, 252);">3. Будет доработан механизм «выразительной кнопки»</span>&nbsp;</span><p></p><p><span style="font-weight: bold;"><br></span><br>Не все студенты доверяют «выразительной кнопке», и это вполне обосновано — порой после жалобы на преподавателя, несмотря на декларируемую анонимность обращения, у студентов начинаются проблемы с этими преподавателями. Жалоба поступает руководителю того, на кого пожаловались, и порою руководители, обсуждая жалобу, нарушают условия анонимности.<br>Относительно соблюдения анонимности планируется провести разъяснение с академическим составом. Также будет зафиксирована ответственность руководителей за разглашение информации, а студенческому омбудсмену Ивану Чернявскому ректор поручил проработать механизм защиты заявителя.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">Почему это важно?</span><br></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Наличие безукоризненно работающего механизма анонимной обратной связи увеличит число активных и честных студентов, которые считают нужным отстаивать свои права<br></li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Лица, разгласившие закрытую информацию, будут наказаны<br></li></ul><br><span style="border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; color: rgb(98, 98, 98); background-color: rgb(252, 252, 252); font-weight: bold;">4. Студсовет будет участвовать в формировании финансового плана</span><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Уже с этого года финансовый комитет студсовета начнет участвовать в планировании&nbsp;расходования средств на организацию культурно-массовой, физкультурной и спортивной, оздоровительной работы со студентами.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">Почему это важно?</span><br></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В формировании фин.плана через студсовет будет представлено мнение студентов</li></ul>		              <p></p>\r\n		              \r\n		              ', 'Студенческий Совет НИУ ВШЭ'),
(71, 'Проверка программ учебных дисциплин на факультете мировой экономики и мировой политики', '2017-05-19', '1467225805.jpg', '<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Завершилась полномасштабная проверка Программ учебных дисциплин (ПУД) на МЭиМП. Всего было проверено 163 дисциплины, 101 из которых полностью соответствовали всем правилам и стандартам. Однако нас интересуют именно те 62, которые не попали в список «добропорядочных дисциплин».<br></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Самый хороший результат из трёх образовательных программ показало "Востоковедение". Из 35 ПУД проблемы были выявлены в 12:</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 2 программах формы контроля и формула оценки не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной из программ&nbsp;формула оценки не совпадает с реальной</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной нет даты принятия ПУД и формулы оценки</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 2 программах нет формулы оценки</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">3 ПУД отсутствуют на сайте и студентам не высланы</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной формы контроля не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной (экономика изучаемого региона) ПУД указана только для Кореи</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одном случае на сайте представлена аннотация, в которой нет формулы оценки и форм контроля</li></ul><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><img alt="" src="https://pp.vk.me/c630819/v630819172/3584a/fbmIPDMx95A.jpg" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; max-width: 100%; height: auto;"><br></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Следующей по количеству недобропорядочных ПУД оказалась ОП "Мировая политика", где из 56 ПУД вопросы возникли к 21:</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">Четыре программы отсутствуют на сайте и студентам не высланы</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 7 программах&nbsp;формы контроля и формула оценки не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одном случае ПУД указана для 3-4 курса вместо 1</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной из программ нет формулы оценки и нельзя оценить реальность форм контроля</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 3 программах формула оценки не совпадает с реальной</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одном случае на сайте представлена аннотация программы</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной из программ отсутствует дата принятия, нет форм контроля и формулы оценки</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной формы контроля не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной присутствует блокирующая оценка за экзамен</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной присутствует как блокирующая оценка, так и плавающие коэффициенты</li></ul><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><img alt="" src="https://pp.vk.me/c630819/v630819172/3583a/Fk0v_VytLfc.jpg" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; max-width: 100%; height: auto;"></p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Наибольшее количество некорректных ПУД нашлось на "Мировой экономике": из 72 ошибки были найдены в 29.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"></p><ul style="margin-right: 0px; margin-bottom: 15px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 21px; vertical-align: baseline; list-style: none outside;"><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 11 программах формы контроля и формулы оценки не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">5 программ отсутствуют на сайте и не высланы студентам</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 2 программах формы контроля не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 3 программах формулы оценки не совпадают с реальными</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В 2 программах в формуле оценки отсутствуют коэффициенты<br></li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одном случае ПУД для 4 курса вместо 3</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одном случае ПУД для 3 курса вместо 1</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной из программ неизвестна формула оценки</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной присутствует блокирующая оценка</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной, помимо блокирующей оценки, есть плавающие коэффициенты</li><li style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; list-style: disc outside;">В одной отсутствуют и формы контроля, и формула оценки</li></ul><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><img alt="" src="https://pp.vk.me/c630819/v630819172/35853/2bXaOLEEI5k.jpg" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; max-width: 100%; height: auto;"></p>		              ', 'Студенческий Совет НИУ ВШЭ'),
(72, 'ПГАС: Challenge Accepted', '2017-05-19', '1465317000.jpg', '<p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">В этот понедельник, 6 июня, открылась подача заявок на ПГАС (повышенную государственную академическую стипендию) по различным видам деятельности. Студенческое Правительство расскажет, как правильно заполнить анкету, обойти все подводные камни и на шаг приблизиться к заветной стипендии.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">В первую очередь, постарайтесь не перепутать номинации – общественная, культурная, спортивная и научная деятельность относятся к разным позициям! Во-вторых, помните, что неудовлетворительные оценки, предшествующие подаче заявки, лишают вас права на получение ПГАС. Заявки на конкурс могут подавать только студенты, обучающиеся на бюджетной основе и получающие на момент подачи заявки ГАС (государственную академическую стипендию) (да-да, это именно та стипендия, которая 1408 руб.).</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Для правильного заполнения заявки используйте документы, которые вы сможете найти в документах сайта (боковое меню), а также, в группе Студенческого Совета&nbsp;<a target="_blank" rel="nofollow" href="https://vk.com/hsecouncil" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">Вконтакте</a>&nbsp;– это значительно облегчит жизнь и вам, и нам. Сначала мы рекомендуем ознакомиться со стипендиальным положением – именно оно освещает весь процесс подачи и проверки заявок. Там указаны важные сроки - дата начала и окончания подачи заявок, даты заседания общеуниверситетской стипендиальной комиссии, критерии оценивания каждого блока, их подробное описание и т.д.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Также обратите внимание на новую форму подачи заявки в ЛМС: теперь там всего лишь 4 вопроса. Самые важные - это два последних, куда вы должны прикрепить заполненную анкету с указанием всех мероприятий и проектов и приложить подтверждающие документы. Приложения к анкете стоит сохранять архивом, так как в ЛМС есть ограничения по количеству прикладываемых файлов (до 10 Мб).</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Еще одно нововведение - единая форма благодарности, которая включается в пул подтверждающих документов. Она была разработана специально для того, чтобы экспертам было проще справедливо и объективно оценить деятельность каждого кандидата на получение ПГАС. Как это работает на практике? Прежде всего, мы рассчитываем на использование данной формы благодарности студенческими организациями и менеджерами факультетов. В будущем мы постараемся сделать так, чтобы за все виды деятельности внутри Вышки выписывалась именно эта благодарность.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Заполнить форму на получение ПГАС можно будет до 18:00 29 июня. Списки студентов, разместивших свои заявки в ЛМС будут опубликованы в 19:00 29 июня на сайте&nbsp;<a target="_blank" rel="nofollow" href="https://www.hse.ru/scholarships/academic_raised" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">ЦСиБП</a>. Итоги конкурса будут объявлены уже в июле, а выплаты теперь будут производиться раз в месяц: с июля по декабрь, но выплаты могут прекратиться в ноябре по итогам сессии в 1-м модуле.&nbsp;</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Если вы подали заявку, но не нашли себя в этом списке, то срочно обращайтесь в ЦСиБП к Иващенко В.Г. (<a target="_blank" rel="nofollow" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">scholarship@hse.ru</a>). Работа с обращениями по опубликованному списку будет происходить только 30 июня с 10:00 до 18:00. Советуем, внести эту дату себе в календарь, так как потом эти обращения не будут рассматриваться, и ваша заявка не будет оцениваться.Если же во время заполнения или сохранения заявки у вас возникли технические проблемы с работой &nbsp;ЛМС, то не паникуйте. Первым делом, сделайте принтскрин страницы с ошибками, а затем напишите письмо Администратору сайта с данным “скриншотом” на почту&nbsp;<a target="_blank" rel="nofollow" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;"><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">lms@hse.ru</span></a><span style="border-style: initial; border-color: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit;">.</span>&nbsp;Вам обязательно ответят, но только в рабочие дни с 10:00 до 18:00.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Также мы решили создать горячую линию, где вы можете задать все интересующие вас вопросы о ПГАС по общественной деятельности, которые мы уверены, у вас будут. Адрес горячей линии –&nbsp;<a target="_blank" rel="nofollow" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">pgas.help@gmail.com</a>. Но задавая вопрос, помните, что команда не имеет права открывать внутренние материалы проверки, так как проверка заявок на ПГАС по общественной деятельности является экспертной.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">И самое главное, не оставляйте подачу заявки на последний день. Заранее скачайте анкету и начните собирать все необходимые документы уже сейчас. Учтите, что все мы люди, и для того, чтобы выписать ту или иную благодарность, нам требуется время.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">И еще раз напоминаем, что все перечисленные документы вы сможете найти на сайте или же в группе Студенческого совета&nbsp;<a target="_blank" rel="nofollow" href="https://vk.com/hsecouncil" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">здесь</a>.</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">Удачи!</p><p style="margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;">&nbsp;</p>		              \r\n		              ', 'Студенческий Совет НИУ ВШЭ');

-- --------------------------------------------------------

--
-- Структура таблицы `ombudsmen`
--

CREATE TABLE IF NOT EXISTS `ombudsmen` (
  `id` int(11) NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_created` date NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `name`, `photo`, `link`) VALUES
(2, 'Бизнес в стиле .RU', 'hse.png', 'https://www.hse.ru/'),
(3, 'Кто-то еще крутой', 'hse.png', 'https://www.hse.ru/'),
(4, 'Ufights', 'hse.png', 'https://www.hse.ru/');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_school` int(11) NOT NULL,
  `vk` varchar(100) CHARACTER SET utf8 NOT NULL,
  `twitter` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fb` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `name`, `surname`, `photo`, `id_school`, `vk`, `twitter`, `fb`, `email`) VALUES
(1, 'Сергей', 'Мосяков', 'Снимок экрана 2017-05-10 в 18.57.18.png', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(2, 'Дмитрий', 'Овакимян', ' ex.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(3, 'Александра', 'Шуляк', ' ex.jpg', 2, '123', '123', '', '213'),
(4, 'Михаил ', 'Логинов', 'log.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(5, 'Фокина', 'Дарья', 'fok.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(6, 'Азиза\r\n', 'Исаева', 'is.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(7, 'Максим', 'Савенков', ' ex.jpg', 2, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', ''),
(12, 'Анна', 'Подображных', ' ex.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', ''),
(13, 'Андрей', 'Буханцов', ' ex.jpg', 2, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', ''),
(14, 'Глеб', 'Гаращук', 'Снимок экрана 2017-05-12 в 17.56.51.png', 2, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(15, 'Василий', 'Пупкин', 'pup.jpg', 1, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(16, 'Екатерина', 'Короткова', ' ex.jpg', 3, 'https://vk.com/katakor', 'https://vk.com/katakor', 'https://vk.com/katakor', 'https://vk.com/katakor'),
(17, 'Анна', 'Евдокимова', ' ex.jpg', 1, 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171'),
(18, 'Гурген', 'Согоян', ' ex.jpg', 1, 'https://vk.com/gurasog', 'https://vk.com/gurasog', 'https://vk.com/gurasog', 'https://vk.com/gurasog'),
(19, 'Алена', 'Гуляева', 'gul.jpg', 2, 'https://vk.com/gulyashkina', 'https://vk.com/gulyashkina', 'https://vk.com/gulyashkina', 'https://vk.com/gulyashkina'),
(20, 'Георгий', 'Трофимов', 'tro.jpg', 3, 'https://vk.com/id44052311', 'https://vk.com/id44052311', 'https://vk.com/id44052311', 'https://vk.com/id44052311'),
(43, 'мвалоим', 'аиалимал', '', 3, 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan', 'https://vk.com/reginadan'),
(44, 'ломтвлоыта', 'виалвжта', '', 3, '', 'ватлыт', 'амлат', 'алты'),
(45, 'млмвыоиыовс', 'всиыорвоы', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'исыфвис', 'всвыис', 'всовбыисовы', 'всроывирьс'),
(46, 'мсмвлысырос', 'мсырвосорв', 'Снимок экрана 2017-05-10 в 18.57.18.png', 1, 'сиывдисыивс', 'всдорывисы', 'ысидорывислыв', 'ывидоыви'),
(47, 'еуеп', 'рыва', 'Снимок экрана 2017-05-10 в 18.57.18.png', 2, 'аиываи', 'авп', 'вапва', 'авп'),
(48, 'т', 'а', '', 1, 'в', 'вв', 'в', 'в'),
(49, 'вапро', 'апрол', 'Снимок экрана 2017-05-12 в 17.56.44.png', 1, 'апро', 'иро', 'ми', 'ро'),
(50, '123', '1234', 'Снимок экрана 2017-05-12 в 17.56.51.png', 1, '123', '123', '123', '123'),
(51, 'ыва', 'ыва', 'Снимок экрана 2017-05-12 в 13.46.40.png', 1, 'ыва', 'ыав', 'ыва', 'ыва'),
(52, 'иплиа', 'ваы', 'Снимок экрана 2017-05-12 в 17.56.51.png', 2, 'впавпыв', 'пыфвап', 'пвапав', 'апафвып'),
(53, 'Глеб', 'Гаращук', ' ex.jpg', 3, 'ввы', 'ав', 'па', 'пафм'),
(54, 'bdfb', 'fbdzfgd', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'fbdzhbf', 'fbfdb', 'fbfb', 'bfb'),
(55, 'bdfb', 'fbdzfgd', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'fbdzhbf', 'fbfdb', 'fbfb', 'bfb'),
(56, 'bdfb', 'fbdzfgd', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'fbdzhbf', 'fbfdb', 'fbfb', 'bfb'),
(57, 'bdfb', 'fbdzfgd', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'fbdzhbf', 'fbfdb', 'fbfb', 'bfb'),
(58, 'bdfb', 'fbdzfgd', 'Снимок экрана 2017-05-12 в 17.56.51.png', 3, 'fbdzhbf', 'fbfdb', 'fbfb', 'bfb'),
(59, 'fvfv', 'fvdfv', 'Снимок экрана 2017-05-12 в 17.56.51.png', 1, 'fvsfv', 'fvsfv', 'vfv', 'fvsfv'),
(60, 'v', 'fvdfv', 'Снимок экрана 2017-05-12 в 17.56.51.png', 1, 'f', 'f', 'f', 'f'),
(61, 'asd', 'asd', 'Снимок экрана 2017-05-12 в 17.56.44.png', 1, 'as', 'as', 'asd', 'asd'),
(62, '1236', '1234', 'Снимок экрана 2017-05-12 в 17.56.51.png', 1, '1234', '1234', '134', '1234'),
(63, '', '', 'Снимок экрана 2017-05-12 в 17.56.51.png', 1, '', '', '', ''),
(64, '123', '1324', 'Снимок экрана 2017-05-12 в 17.56.51.png', 2, '1324', '1234', '34', '2314'),
(65, '123234', '1324', 'Снимок экрана 2017-05-12 в 17.56.51.png', 2, '1324', '1234', '34', '2314'),
(76, '1', '2d', '', 2, '3', '5', '4', '634'),
(77, 'vdsv', 'fvfz', 'Снимок экрана 2017-05-13 в 12.31.50.png', 1, 'vsfv', 'v', 'vbs', 'fdsv'),
(78, 'хуй1', 'хуй', '', 1, 'хуй', 'хуй', 'хуй', 'хуй'),
(79, 'хуй12', 'хуй', '', 1, 'хуй', 'хуй', 'хуй', 'хуй'),
(80, 'хуй1', 'хуй', 'Снимок экрана 2017-05-13 в 13.38.32.png', 1, 'хуй', 'хуй', 'хуй', 'хуй'),
(81, 'Иван', 'Иванов', ' ex.jpg', 1, '', '', '', ''),
(82, 'Арсений', 'Попов', ' ex.jpg', 1, '', '', '', ''),
(83, 'fgdg', 'fdgdfg', 'Снимок экрана 2017-05-17 в 11.21.54.png', 2, 'fdvfg', 'ff', 'fgsf', 'gfdg'),
(84, 'dcsdc', 'dcsd', 'Снимок экрана 2017-05-16 в 23.07.18.png', 2, 'dcsd', 'csd', 'dv', 'dc'),
(85, 'Анна1', 'Евдокимова', '', 1, 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171'),
(86, 'dkjcd', 'dsbcsdk', 'Снимок экрана 2017-05-17 в 20.08.32.png', 3, 'dhcskd', 'dcdsk', 'dcbsd', 'dcbds'),
(87, 'dfd', 'ds', '2017-05-17 07.38.22.jpg', 3, 'sac', 'sdc', 'dvs', 'ds'),
(88, 'dsc', 'sc', 'Снимок экрана 2017-05-17 в 20.08.32.png', 1, 'sdc', 'scd', 'dsc', 'sc'),
(89, 'Анналрило', 'Евдокимова', '', 1, 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171', 'https://vk.com/id21012171'),
(90, 'пиа1', 'ав', '', 2, 'авп', 'аив', 'ам', 'амв'),
(91, 'амвам', 'вама', 'Снимок экрана 2017-05-17 в 20.52.43.png', 3, 'авмва', 'аив', 'аимваи', 'авивыи'),
(92, 'хуй', 'вммы', 'Снимок экрана 2017-05-17 в 21.02.28.png', 1, 'вымы', 'ывм', 'вым', 'вым'),
(93, 'вмыв', 'вымыв', 'Снимок экрана 2017-05-17 в 21.02.28.png', 1, 'ывмыфв', 'ывмыв', 'ывм', 'ывм'),
(94, 'выс', 'вымв', 'Снимок экрана 2017-05-17 в 20.52.43.png', 1, 'ывмы', 'мс', 'вмы', 'мс'),
(95, 'Максим1', 'хуй', 'Снимок экрана 2017-05-17 в 21.02.28.png', 1, 'ама', 'мв', 'м', 'вам'),
(96, 'Гурген', 'Согоян', ' ex.jpg', 1, 'https://vk.com/gurasog', 'https://vk.com/gurasog', 'https://vk.com/gurasog', 'https://vk.com/gurasog'),
(97, 'пмавмвым', 'вамвф', 'Снимок экрана 2017-05-17 в 21.02.28.png', 2, 'мавфам', 'фамвф', 'фмвва', 'ывм'),
(98, 'dvs', 'dv', ' ex.jpg', 1, 'sdv', 'sdv', 'sdv', 'sdv'),
(99, 'Глеб', 'Гаращук', ' ex.jpg', 1, 'мав', 'вап', 'апвф', 'вапвы'),
(100, 'Иван', 'Петров', ' ex.jpg', 1, '', '', '', ''),
(101, 'Николай', 'Смирнов', ' ex.jpg', 1, '', '', '', ''),
(102, 'Алина', 'Иванова', ' ex.jpg', 1, '', '', '', ''),
(103, 'Дмитрий', 'Николаев', ' ex.jpg', 1, '', '', '', ''),
(104, 'Екатерина', 'Сидорова', ' ex.jpg', 1, '', '', '', ''),
(105, 'Петр', 'Петров', ' ex.jpg', 1, '', '', '', ''),
(106, 'ввп', 'ывавы', ' ex.jpg', 3, 'пв', '', '', ''),
(107, 'амвы', 'амфв', ' ex.jpg', 1, 'ама', 'ма', 'фам', 'фавм'),
(108, 'Екатерина', 'Короткова', ' ex.jpg', 3, '', '', '', ''),
(109, 'Анна', 'Евдокимова', ' ex.jpg', 3, '', '', '', ''),
(110, 'Гурген', 'Согоян', ' ex.jpg', 1, '', '', '', ''),
(111, 'Алена', 'Гуляева', ' ex.jpg', 3, '', '', '', ''),
(112, 'Георгий ', 'Трофимов', ' ex.jpg', 2, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `people_posts`
--

CREATE TABLE IF NOT EXISTS `people_posts` (
  `id_people` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `people_posts`
--

INSERT INTO `people_posts` (`id_people`, `id_post`) VALUES
(2, 1),
(3, 2),
(7, 8),
(12, 8),
(13, 9),
(16, 5),
(18, 7),
(54, 10),
(54, 10),
(54, 10),
(54, 10),
(54, 10),
(59, 10),
(60, 10),
(61, 10),
(62, 10),
(63, 10),
(64, 10),
(65, 10),
(65, 10),
(65, 10),
(65, 10),
(77, 10),
(80, 10),
(81, 10),
(82, 10),
(99, 4),
(100, 4),
(101, 3),
(102, 3),
(103, 4),
(104, 3),
(105, 4),
(109, 6),
(111, 7),
(112, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`) VALUES
(1, 'Председатель студсовета'),
(2, 'Секретарь студсовета'),
(3, 'Член студсовета'),
(4, 'Руководитель комитета'),
(5, 'Председатель студсовета факультета'),
(6, 'Секретарь студсовета факультета'),
(7, 'Член студсовета факультета'),
(8, 'Член команды уполномоченного'),
(9, 'Уполномоченный по правам студентов'),
(10, 'Член комитета');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_commitee` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `id_commitee`, `date_created`, `description`, `picture`) VALUES
(1, 'fsfjskf', 10, '2017-05-15', 'v sf ssfkjsnf', 'Снимок экрана 2017-05-15 в 20.38.46.png'),
(9, 'Пожалуй лучший проект комитета', 1, '2017-05-19', '<p>Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..</p><p>Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..</p><p>Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..</p><p>Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..Мы все знаем, как ценна информация в наши дни..<br></p>', 'violet-man.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `schools`
--

INSERT INTO `schools` (`id`, `name`, `id_department`) VALUES
(1, 'Бизнес-информатика', 1),
(2, 'Логистика', 1),
(3, 'Менеджмент', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_commitee` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `token`
--

INSERT INTO `token` (`id`, `id_user`, `time_add`, `user_ip`, `token`) VALUES
(28, 6, '2017-05-25 10:53:11', '144.76.7.74', '2a6d7536289426234ca211e5b66ee8e1');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `login`, `pwd`, `role`) VALUES
(4, 'Rinat', 'Zubaidullin', 'ss_god', 'a733c8f1cf62c502f28f0b1627a07f05', 0),
(6, 'Регина', 'Дан', 'Regina', 'd7e674dcce48f1efc623e98352328b51', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(11) NOT NULL,
  `link` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user_registration`
--

INSERT INTO `user_registration` (`id`, `link`) VALUES
(7, 'Ne3kZtrs9Eaz'),
(8, 'KsG4kbazH64e'),
(9, 'iHKaaY42zRG2'),
(10, '3h424zbRRGFr');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appeals`
--
ALTER TABLE `appeals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`author_name`),
  ADD KEY `author_name` (`author_name`,`author_surname`);

--
-- Индексы таблицы `appeals_category`
--
ALTER TABLE `appeals_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`),
  ADD KEY `id_2` (`id`,`name`);

--
-- Индексы таблицы `blognews`
--
ALTER TABLE `blognews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`date_created`,`name`,`id_blog`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `picture` (`picture`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`);

--
-- Индексы таблицы `commitees`
--
ALTER TABLE `commitees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`),
  ADD KEY `id_head` (`id_head`);

--
-- Индексы таблицы `commitees_members`
--
ALTER TABLE `commitees_members`
  ADD PRIMARY KEY (`id_member`,`id_commitee`),
  ADD UNIQUE KEY `id_member_2` (`id_member`),
  ADD UNIQUE KEY `id_commitee` (`id_commitee`),
  ADD KEY `id_member` (`id_member`,`id_commitee`);

--
-- Индексы таблицы `commitee_blog`
--
ALTER TABLE `commitee_blog`
  ADD KEY `id_blog` (`id_blog`,`id_commitee`),
  ADD KEY `id_commitee` (`id_commitee`);

--
-- Индексы таблицы `council`
--
ALTER TABLE `council`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`),
  ADD KEY `id_2` (`id`,`name`),
  ADD KEY `id_3` (`id`,`name`,`id_local`),
  ADD KEY `id_local` (`id_local`);

--
-- Индексы таблицы `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`surname`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`id_category`,`link`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`);

--
-- Индексы таблицы `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `initiatives`
--
ALTER TABLE `initiatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`);

--
-- Индексы таблицы `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`),
  ADD KEY `id_2` (`id`,`name`),
  ADD KEY `link` (`link`),
  ADD KEY `id_3` (`id`,`name`,`link`);

--
-- Индексы таблицы `local_blogs`
--
ALTER TABLE `local_blogs`
  ADD KEY `id_blog` (`id_blog`,`id_local`),
  ADD KEY `id_local` (`id_local`);

--
-- Индексы таблицы `local_documents`
--
ALTER TABLE `local_documents`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `id_document` (`id_document`,`id_local`),
  ADD KEY `id_local` (`id_local`);

--
-- Индексы таблицы `local_members`
--
ALTER TABLE `local_members`
  ADD KEY `id_local` (`id_local`,`id_member`),
  ADD KEY `id_member` (`id_member`);

--
-- Индексы таблицы `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`picture`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`date_created`,`picture`);

--
-- Индексы таблицы `ombudsmen`
--
ALTER TABLE `ombudsmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`date_created`,`picture`,`id_director`),
  ADD KEY `id_director` (`id_director`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`photo`,`link`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`surname`,`id_school`,`vk`,`twitter`,`fb`,`email`),
  ADD KEY `id_school` (`id_school`);

--
-- Индексы таблицы `people_posts`
--
ALTER TABLE `people_posts`
  ADD KEY `id_people` (`id_people`,`id_post`),
  ADD KEY `id_people_2` (`id_people`,`id_post`),
  ADD KEY `id_post` (`id_post`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD KEY `id` (`id`,`name`,`id_commitee`,`date_created`,`picture`),
  ADD KEY `id_commitee` (`id_commitee`);

--
-- Индексы таблицы `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`id_department`),
  ADD KEY `id_department` (`id_department`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`name`,`id_commitee`),
  ADD KEY `id_commitee` (`id_commitee`);

--
-- Индексы таблицы `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surname` (`surname`);

--
-- Индексы таблицы `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `appeals`
--
ALTER TABLE `appeals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT для таблицы `appeals_category`
--
ALTER TABLE `appeals_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `blognews`
--
ALTER TABLE `blognews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `commitees`
--
ALTER TABLE `commitees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `council`
--
ALTER TABLE `council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `initiatives`
--
ALTER TABLE `initiatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `local_documents`
--
ALTER TABLE `local_documents`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT для таблицы `ombudsmen`
--
ALTER TABLE `ombudsmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `blognews`
--
ALTER TABLE `blognews`
  ADD CONSTRAINT `blognews_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `commitees_members`
--
ALTER TABLE `commitees_members`
  ADD CONSTRAINT `commitees_members_ibfk_1` FOREIGN KEY (`id_commitee`) REFERENCES `commitees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commitees_members_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `commitee_blog`
--
ALTER TABLE `commitee_blog`
  ADD CONSTRAINT `commitee_blog_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commitee_blog_ibfk_1` FOREIGN KEY (`id_commitee`) REFERENCES `commitees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `locals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `document_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `local_blogs`
--
ALTER TABLE `local_blogs`
  ADD CONSTRAINT `local_blogs_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `locals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `local_blogs_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `local_documents`
--
ALTER TABLE `local_documents`
  ADD CONSTRAINT `local_documents_ibfk_2` FOREIGN KEY (`id_local`) REFERENCES `locals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `local_documents_ibfk_1` FOREIGN KEY (`id_document`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `local_members`
--
ALTER TABLE `local_members`
  ADD CONSTRAINT `local_members_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `local_members_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `locals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_ibfk_2` FOREIGN KEY (`id_director`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`id_school`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `people_posts`
--
ALTER TABLE `people_posts`
  ADD CONSTRAINT `people_posts_ibfk_2` FOREIGN KEY (`id_people`) REFERENCES `people` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `people_posts_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`id_commitee`) REFERENCES `commitees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`id_commitee`) REFERENCES `commitees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
