-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 sep 2022 om 09:26
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijzen`
--

CREATE TABLE `prijzen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(30) NOT NULL,
  `prijs` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `prijzen`
--

INSERT INTO `prijzen` (`id`, `item`, `prijs`) VALUES
(28, 'bal', 8),
(27, 'trainingspak', 50),
(26, 'bal', 8),
(25, 'trainingspak', 50),
(24, 'wedstijdkledij', 60);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `voetbal`
--

CREATE TABLE `voetbal` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `naam` varchar(30) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `ploeg` varchar(30) NOT NULL,
  `wedstrijdkledij` bigint(20) DEFAULT NULL,
  `trainingspak` bigint(20) DEFAULT NULL,
  `bal` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `voetbal`
--

INSERT INTO `voetbal` (`id`, `naam`, `voornaam`, `ploeg`, `wedstrijdkledij`, `trainingspak`, `bal`) VALUES
(10, 'Sabawoon', 'Enayat', 'U17', 24, 25, 26),
(11, 'Achraf', 'ElHassani', 'U13', NULL, 27, 28);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `prijzen`
--
ALTER TABLE `prijzen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `voetbal`
--
ALTER TABLE `voetbal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `prijzen`
--
ALTER TABLE `prijzen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT voor een tabel `voetbal`
--
ALTER TABLE `voetbal`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
