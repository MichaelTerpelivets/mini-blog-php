-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 03 2018 г., 10:55
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mini_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `user_name`, `title`, `article`, `date`) VALUES
(1, 'Michael Terpelyvets', 'New 2019 BMW Z4 roadster revealed at Pebble Beach', 'The new BMW Z4 – which was developed in tandem with the new Toyota Supra – is set to go on sale next spring Following leaks, teasers and even an early prototype drive, the all-new BMW Z4 has been officially revealed. It debuts at the Pebble Beach Concours event in the United States ahead of sales starting in spring 2019.  Codenamed G29, the new roadster has been developed in a joint project with Toyota, although the two models to emerge from the shared process - the Z4 and the Japanese firm’s Supra - will be substantially different. BMW’s offering will be a convertible only; the Toyota will be sold as a coupe.  • New BMW Z4 prototype review  The car’s looks and proportions stick pretty closely to those previewed on a concept that was revealed at the same American event last year. There’s a particularly short overhang at the front end, and a visible decrease in wheelbase compared with the outgoing Z4.', '2018-09-03 10:29:42'),
(2, 'Michael Terpelyvets', 'New 2019 BMW 3 Series set to make Paris debut', 'BMW is gearing up to launch its most important car of the decade. The seventh-generation BMW 3 Series will be the brand’s star at September’s Paris Motor Show and will usher in a new platform and more electrification when it arrives in UK showrooms early next year. Our exclusive image previous how the all-new car could look.', '2018-09-03 10:35:51'),
(3, 'Michael Terpelyvets', 'New 2019 BMW 3 Series set to make Paris debut', 'New 2019 BMW 3 Series Touring spied', '2018-09-03 10:42:04'),
(4, 'Michael Terpelyvets', 'New 2019 BMW 3 Series Touring spied', '. At the front, the slim kidney grill and headlight arrangement goes against the brand’s recent SUV trend towards oversized openings. The new car’s profile looks very similar to the model it replaces, while at the back expect a familiar look despite the car being all new under the skin.', '2018-09-03 10:52:02'),
(5, 'Michael Terpelyvets', 'New article', '. At the front, the slim kidney grill and headlight arrangement goes against the brand’s recent SUV trend towards oversized openings. The new car’s profile looks very similar to the model it replaces, while at the back expect a familiar look despite the car being all new under the skin.. At the front, the slim kidney grill and headlight arrangement goes against the brand’s recent SUV trend towards oversized openings. The new car’s profile looks very similar to the model it replaces, while at the back expect a familiar look despite the car being all new under the skin.', '2018-09-03 10:52:13');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `article_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
