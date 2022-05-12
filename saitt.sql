-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 12 2022 г., 05:26
-- Версия сервера: 8.0.28
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `saitt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `page` int NOT NULL,
  `email` varchar(110) NOT NULL,
  `comment` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `doc`
--

CREATE TABLE `doc` (
  `id` int NOT NULL,
  `title` varchar(125) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `doc`
--

INSERT INTO `doc` (`id`, `title`, `content`, `created`) VALUES
(1, 'Диванный эксперт', '<p>фцв цв цв</p><h1>ЦВ ФЦв Ф Цв</h1><p>&nbsp;</p><p>Цв Цв ФЦв&nbsp;</p><ul><li>фцвфцв</li><li>фцвфцв</li><li>фцвфцв</li></ul><p>фцвфцвфцвфв</p><ol><li>фцвф</li><li>фцвфцв<ol><li>вцв</li><li>фвфыв</li></ol></li><li>фывфыв</li><li>&nbsp;</li></ol>', '2021-04-26 19:39:46'),
(2, 'фыйцйцвйвйв', '<p>фыыйыс</p>', '2021-04-26 19:40:42'),
(3, 'Третья документация', '<h2>Основы третеье йдокументации</h2><p>Это обычный параграфф</p><ul><li>Это просто список</li><li>второй пункт списка<ul><li>подсписок</li><li>подсписок-2</li></ul></li></ul>', '2021-04-26 20:07:19'),
(4, 'AndreiTest', '<p>аукп ука ука укп</p>', '2021-04-26 20:07:51');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint NOT NULL,
  `id_topic` int DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `title`, `img`, `content`, `status`, `id_topic`, `created_date`) VALUES
(3, 25, 'Ак Барс или ТЭНЬКААФ', '', '<p>выфвфывфывфывфывфывыфвфывыфвфывфыв</p>', 1, 1, '2022-05-10 20:35:00');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id` int NOT NULL,
  `name` varchar(121) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(1, 'Работа в офисе', 'Ищем разработчиков, дизайнеров, специалистов по QA, архитекторов, маркетологов, менеджеров по продукту, проектных руководителей и специалистов технической поддержки.'),
(2, 'Работа с клиентами', 'Приглашаем специалистов по обслуживанию клиентов, персональных менеджеров, менеджеров по продаже банковских продуктов, руководителей офисов продаж.'),
(3, 'Наши продукты', 'Ак Барс Онлайн — личный кабинет и мобильное приложение.\r\nFace2Pay — система видеовалидации на базе биометрии лиц.\r\nДиалоговый банкинг с искусственным интеллектом на платформе Aimee.\r\nАктивное участие в проектах ЦБ РФ и Ассоциации ФинТех.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `admin` tinyint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(1, 0, 'klukwwwwaa', 'klukwwwwaa@mail.ru', 'klukwwwwaa21390123901', '2022-05-01 16:17:00'),
(2, 1, 'klukwwaa', 'klu1221wwaa@mail.ru', 'klukw1390123901', '2022-05-01 16:17:22'),
(3, 0, 'klukwwdsadadaa', 'klu1221dsadasdwwaa@mail.ru', 'klukw139012', '2022-05-01 16:17:40'),
(4, 1, 'dashaaa', 'dashha@mail.ru', 'persik0021', '2022-05-05 17:08:27'),
(6, 0, 'dashaa', 'asdasddaw@gmail.com', '33333', '2022-05-06 16:53:59'),
(7, 0, '21', '121212@mil.ru', '12212121', '2022-05-06 16:59:21'),
(10, 0, 'Andr12eu', 'rasi21mka@mil.ru', '12212121', '2022-05-06 17:19:10'),
(11, 0, '12344213', 'kluwa@mail.ru', '$2y$10$Q/OZdf14CwXepaFCNYSJweO2eB.RZUB8WkNcnN4IYkPWvuJShFo7y', '2022-05-06 22:02:43'),
(12, 0, 'dadsada21', 'dasdasdA@mail.ru', '$2y$10$riJUGdhfXwXaSUC80Ant4uaOcKMJc4j9Ue5uLkzxgJEZV0kcJ0Z16', '2022-05-06 22:05:28'),
(15, 0, '8212121', 'thedzhezik@gmail.com', '$2y$10$THG3zuw/mLVM667aVtYs5OpbI6AVxAzjAzAA4iHrsO9YZeKxvlJMq', '2022-05-07 22:44:40'),
(19, 0, 'dsadasd', 'dsadsavascsacsa@mail.ru', '$2y$10$pjE6AfVD8IGcqUsys1/A/u70cLpm57GcCiSScLx3mkCe97lCGbuk.', '2022-05-07 22:54:24'),
(21, 0, '89393656772', 'thedzhe2121zik@gmail.com', '$2y$10$543HtDHOV4X.AK.JwnRyHekxx2GkhJx0d68H6h9JW2Fs/2/sxwFRy', '2022-05-07 22:57:00'),
(22, 0, '89393656772', 'thedzhe21212121zik@gmail.com', '$2y$10$g0ums1E0STegciFjic7NqeWliSdD9t7bRabpKdp77QDxX7mq5ERIe', '2022-05-07 23:05:51'),
(23, 0, 'rasim', 'rasimka@mail.ru', '$2y$10$iPy.sGSGD47Vmh43Aytm1.4RUJB3QxwclwPklXPO0Tq7K6128uBeu', '2022-05-07 23:14:10'),
(24, 0, 'klukw4', 'k@mail.ru', '$2y$10$4iXPgPnzKu0z33/9fZqNmeXosxHkzDhhxQR0wkegOXHiH7nLWvOXa', '2022-05-08 11:50:14'),
(25, 1, 'admin', 'admin@mail.ru', '$2y$10$ywmc3WRNftsl96qANEjtHusaF1D5UTKZwcV81VKaG3FTmc8nMsD6m', '2022-05-09 21:29:24'),
(26, 0, 'adm', 'adm@mail.ru', '$2y$10$WhSSvXBr7o1U6l8AvezvMur.e2r5ZM7.Save6h7jO8Rf/VzWBbfk6', '2022-05-11 07:48:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_topic` (`id_topic`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
