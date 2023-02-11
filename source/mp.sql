-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 12 2022 г., 12:08
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `mampieniadze`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hotele`
--

CREATE TABLE `hotele` (
  `hotel_id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `lokalizacja` varchar(50) NOT NULL,
  `gwiazdy` int(1) NOT NULL,
  `ocena` float NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `hotele`
--

INSERT INTO `hotele` (`hotel_id`, `nazwa`, `lokalizacja`, `gwiazdy`, `ocena`) VALUES
(1, 'Any Hotel Gdzies Tam Resort', 'Miasto', 5, 5),
(2, 'Second One In Dubai', 'Zjednoczone Arabskie Emiraty', 4, 4.9);

-- --------------------------------------------------------

--
-- Структура таблицы `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `data_rejestracji` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `hash` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `data_rejestracji`, `email`, `hash`) VALUES
(1, 'Jan', 'Kowalski', '2022-04-01', 'jkowalski@mail.com', '12345'),
(2, 'Jan', 'Niekowalski', '2022-04-02', 'jniekowalski@skrzynka.pl', '67890'),
(3, 'Jan', 'Jeszczejakis', '2022-04-03', 'jjeszczejakis@gmail.com', '13579');

-- --------------------------------------------------------

--
-- Структура таблицы `lotniska`
--

CREATE TABLE `lotniska` (
  `id` int(11) NOT NULL,
  `lokalizacja` varchar(30) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `lotniska`
--

INSERT INTO `lotniska` (`id`, `lokalizacja`, `nazwa`) VALUES
(1, 'Warszawa', 'Lotnisko Chopina'),
(2, 'Katowice', 'Lotnisko w Katowicach');

-- --------------------------------------------------------

--
-- Структура таблицы `pracownicy`
--

CREATE TABLE `pracownicy` (
  `staff_id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `stanowisko` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hash` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pracownicy`
--

INSERT INTO `pracownicy` (`staff_id`, `imie`, `nazwisko`, `stanowisko`, `email`, `hash`) VALUES
(1, 'Uladzislau', 'Danik', 'Admin', 'dvoetochiedank@gmail.com', '11111'),
(2, 'Jan', 'Kowalczyk', 'Pracownik Biura', 'jkowalczyk@mail.com', '22222'),
(3, 'Jan', 'Janczyk', 'Pracownik Centrum Ko', 'jjanczyk@skrzyunka.pl', '33333');

-- --------------------------------------------------------

--
-- Структура таблицы `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `id` int(11) NOT NULL,
  `klient_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `lotnisko_id` int(11) NOT NULL,
  `data_wylotu` date NOT NULL,
  `dlugosc_pobytu` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `rezerwacje`
--

INSERT INTO `rezerwacje` (`id`, `klient_id`, `hotel_id`, `lotnisko_id`, `data_wylotu`, `dlugosc_pobytu`) VALUES
(1, 1, 1, 1, '2022-04-21', 7),
(2, 3, 2, 2, '2022-04-30', 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hotele`
--
ALTER TABLE `hotele`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Индексы таблицы `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `lotniska`
--
ALTER TABLE `lotniska`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nazwa` (`nazwa`);

--
-- Индексы таблицы `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `lotnisko_id` (`lotnisko_id`),
  ADD KEY `klient_id` (`klient_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hotele`
--
ALTER TABLE `hotele`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `lotniska`
--
ALTER TABLE `lotniska`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotele` (`hotel_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`lotnisko_id`) REFERENCES `lotniska` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezerwacje_ibfk_3` FOREIGN KEY (`klient_id`) REFERENCES `klienci` (`id`) ON DELETE CASCADE;
COMMIT;