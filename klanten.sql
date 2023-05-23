-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 mei 2023 om 17:39
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inlog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `klantEmail` varchar(30) NOT NULL,
  `klantWachtwoord` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantEmail`, `klantWachtwoord`) VALUES
('a.j.eijeriks@tcrmbo.nl', '$2y$10$No.g5HOHdovzFUJMFTjr1eZPWdP0OcDyv/Cf7iD5fmj6j7u5Q7NpK'),
('Ali.Karaca@planet.nl', '$2y$10$zNPy8r4O0pTD5bmOPjmWAekkgwzVyyoYtpXF7R7DzwlX3ZgCnvi9a'),
('AnjoEijeriks@gmail.com', 'GeheimGmailW@chtw00rd!'),
('Barbara_1998', '$2y$10$zMYHegWwlrZckKSfoZ15jelISgEUrabfSAD/QGuEsc04e6CCja6K.'),
('Elon@tesla.com', 'toMarsAndBeyond'),
('KhalidS@live.com', 'Baklav@!'),
('Spiderman', '$2y$10$P8Cf1Nu098AQHzdu928.vuQWmJdf1fHztJQ3UyeqjjJIphPGmwLPa'),
('Tiffany_34', '$2y$10$mpgzQCLNgLExZ4nxYODwjuuCQrHvwb/W3Bix/gTvTYrK3dKujEiUS'),
('VantaBlack@gmail.com', 'darker&2005');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
