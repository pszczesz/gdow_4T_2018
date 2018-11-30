-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lis 2018, 08:26
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bib_4t_2018`
--
CREATE DATABASE IF NOT EXISTS `bib_4t_2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `bib_4t_2018`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnicy`
--

DROP TABLE IF EXISTS `czytelnicy`;
CREATE TABLE `czytelnicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `ksiazkaId` int(11) NOT NULL,
  `dataZwrotu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

DROP TABLE IF EXISTS `ksiazki`;
CREATE TABLE `ksiazki` (
  `id` int(11) NOT NULL,
  `tytul` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `stan` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id`, `tytul`, `autor`, `stan`) VALUES
(1, 'ABC kuchni polskiej', 'Gryczan Michał', b'0'),
(2, 'Frontowe przygody', 'Rogulski Mateusz', b'0'),
(3, 'Urwisy i spółka', 'Nowacka Magdalena', b'0'),
(4, 'Trening samokontroli', 'Trudna Anna', b'0'),
(5, 'Wakacje w górach', 'Nowacka Magdalena', b'0'),
(6, 'Groty polskie', 'Tyrek Marek', b'0');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `czytelnicy`
--
ALTER TABLE `czytelnicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ksiazkaId` (`ksiazkaId`);

--
-- Indexes for table `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  ADD CONSTRAINT `czytelnicy_ibfk_1` FOREIGN KEY (`ksiazkaId`) REFERENCES `ksiazki` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
