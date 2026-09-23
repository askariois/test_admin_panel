-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.4:3306
-- Время создания: Сен 23 2026 г., 23:39
-- Версия сервера: 8.4.8
-- Версия PHP: 8.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sibers_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `created_at`, `updated_at`) VALUES
(1, 'siber_admin', '$2y$12$WyXh/W8Z7itNIk7KIngs0OhUGNyJWhgWJbkO9kHHzBMLV1miI5VGS', '2026-09-19 10:09:08', '2026-09-23 06:51:45');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `birth_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_name`, `last_name`, `password`, `gender`, `birth_date`, `created_at`, `updated_at`) VALUES
(1, 'user_1', '333', '3333', '$2y$12$uDmLNYpsbKpnmVFWnbmFM.85EC/Ni.h50XDx1Q/5lVzrFKE7Ktyey', 'female', '2026-09-19', '2026-09-19 10:13:05', '2026-09-19 10:13:05'),
(3, '222', '222', '22', '$2y$12$PCdZaQ8oYndhYt8kIWgQS.P/36KREkMH5xP6qWYrQ.KiTlC0/50Pa', 'female', '2026-09-21', '2026-09-21 17:37:25', '2026-09-21 17:37:25'),
(12, '2', '2', '2', '$2y$12$3Ikq6HiL.uyx0aOo6DwnJe.1zq9VZ4/T5JiLOOAI.wnqP3O5qW.w2', 'female', '2026-09-18', '2026-09-23 16:46:23', '2026-09-23 16:46:23'),
(14, '22222222', '3', '3', '$2y$12$uiqKkezwIt6Iid6gN3ivgO/0/BZlCzF76r5fvPHdYi835UwmErvdO', 'female', '2026-09-03', '2026-09-23 17:36:19', '2026-09-23 17:36:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
