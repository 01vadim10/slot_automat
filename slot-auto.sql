-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 25 2011 г., 23:56
-- Версия сервера: 5.1.40
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `slot-auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `slt_bets`
--

CREATE TABLE IF NOT EXISTS `slt_bets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `denomination` decimal(12,4) NOT NULL,
  `bet` int(10) unsigned DEFAULT NULL,
  `lines_count` tinyint(3) unsigned NOT NULL,
  `won` decimal(12,4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `slt_bets`
--


-- --------------------------------------------------------

--
-- Структура таблицы `slt_games`
--

CREATE TABLE IF NOT EXISTS `slt_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `slt_games`
--

INSERT INTO `slt_games` (`id`, `name`, `description`) VALUES
(1, 'Book of Ra Deluxe', '1.	');

-- --------------------------------------------------------

--
-- Структура таблицы `slt_game_count`
--

CREATE TABLE IF NOT EXISTS `slt_game_count` (
  `game_id` varchar(32) CHARACTER SET utf8 NOT NULL,
  `count` int(11) NOT NULL,
  UNIQUE KEY `game_id` (`game_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `slt_game_count`
--


-- --------------------------------------------------------

--
-- Структура таблицы `slt_lobby_users`
--

CREATE TABLE IF NOT EXISTS `slt_lobby_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(12) COLLATE utf8_bin NOT NULL,
  `pass` varchar(12) COLLATE utf8_bin NOT NULL,
  `cash` decimal(12,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`,`pass`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slt_lobby_users`
--

INSERT INTO `slt_lobby_users` (`id`, `login`, `pass`, `cash`) VALUES
(1, 'varl', '12345', '3000.00'),
(2, 'dima', '12345', '0.00'),
(3, 'test', '12345', '85.00');

-- --------------------------------------------------------

--
-- Структура таблицы `slt_param_names`
--

CREATE TABLE IF NOT EXISTS `slt_param_names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 NOT NULL,
  `denomination` enum('0','1') COLLATE utf8_bin DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `game_id` (`game_id`,`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `slt_param_names`
--

INSERT INTO `slt_param_names` (`id`, `game_id`, `name`, `value`, `denomination`) VALUES
(14, 1, 'denomination_1', '0.01', '1'),
(25, 1, 'denomination_2', '0.03', '1'),
(26, 1, 'denomination_3', '0.05', '1'),
(27, 1, 'denomination_4', '0.1', '1'),
(28, 1, 'denomination_5', '0.25', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `slt_roles`
--

CREATE TABLE IF NOT EXISTS `slt_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `slt_roles`
--

INSERT INTO `slt_roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `slt_roles_users`
--

CREATE TABLE IF NOT EXISTS `slt_roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slt_roles_users`
--

INSERT INTO `slt_roles_users` (`user_id`, `role_id`) VALUES
(3, 1),
(4, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `slt_success_count`
--

CREATE TABLE IF NOT EXISTS `slt_success_count` (
  `game_id` varchar(32) CHARACTER SET utf8 NOT NULL,
  `symbol_id` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `combination` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `count` int(11) unsigned NOT NULL,
  PRIMARY KEY (`game_id`,`symbol_id`,`combination`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `slt_success_count`
--


-- --------------------------------------------------------

--
-- Структура таблицы `slt_users`
--

CREATE TABLE IF NOT EXISTS `slt_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`),
  UNIQUE KEY `email` (`email`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `slt_users`
--

INSERT INTO `slt_users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(2, 'admin@admin.com', 'admin', 'f3d05fb6548837f3aa9bdabf8a1f246962e89cd7ea45f80f09e6d35ff1bdf164', 74, 1324825255),
(3, 'test@test.com', 'test', 'd27b39b3d3625ea345570bd69c3e780d8842c71ae2fc7592c8d8c11eba365596', 7, 1322391537),
(4, 'testdf@test.com', 'dt', '2a1b7b2d9ff47fb4f5a18d286a95510bfe729c3dfacf84224d35bfb1b5c9aec8', 0, NULL);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `slt_roles_users`
--
ALTER TABLE `slt_roles_users`
  ADD CONSTRAINT `slt_roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `slt_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `slt_roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `slt_roles` (`id`) ON DELETE CASCADE;
