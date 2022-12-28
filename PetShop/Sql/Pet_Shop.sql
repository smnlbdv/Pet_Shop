-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 28 2022 г., 21:24
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Pet_Shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Akzii`
--

CREATE TABLE `Akzii` (
  `id` int NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `opisanie` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Akzii`
--

INSERT INTO `Akzii` (`id`, `image`, `opisanie`) VALUES
(1, 'http://petshop/disign/akzii/Сгруппировать%20210.png', 'В честь дня животных предоставляем скидку -15% на все виды кормов от Pedigree. Сухой корм Pedigree для взрослых собак всех пород  - это полезная и вкусная еда, приготовленная с учетом физиологических потребностей собак, еда, которой нужно кормить регулярно.Проведенные исследования показывают, что у собак, которых регулярно кормили PEDIGREE, улучшалось пищеварение и, как следствие, общее здоровье. '),
(2, 'http://petshop/disign/akzii/Сгруппировать%20211.png', 'Осеняя распродажа товаров, скидки -30% на все товары. Акция действует при покупке на сумму от 25 рублей. Акция действует в интернет-магазине и розничной сети Zoobazar. В интернет-магазине акция применяется в корзине. '),
(3, 'http://petshop/disign/akzii/Сгруппировать%20212.png', 'Сухой корм Pedigree для взрослых собак всех пород (Говядина) - это полезная и вкусная еда, приготовленная с учетом физиологических потребностей собак, еда, которой нужно кормить регулярно. Проведенные исследования показывают, что у собак, которых регулярно кормили PEDIGREE, улучшалось пищеварение и, как следствие, общее здоровье.'),
(4, 'http://petshop/disign/akzii/Сгруппировать%20213.png', 'УРА! УРА! УРА! Новое поступление от Pedigree, успей, количество товаров ограничено.\r\nНатуральное мясо свинины, витамин C, E, D, служащие для поддерживания тонуса вашего питомца. При покупке 3 кг. +5% к скидке.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Akzii`
--
ALTER TABLE `Akzii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Akzii`
--
ALTER TABLE `Akzii`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
