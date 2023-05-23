-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mei 2023 om 09:25
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
DROP DATABASE IF EXISTS `inlog`;
CREATE DATABASE IF NOT EXISTS `inlog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inlog`;

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
('Ben@jerries.nl', '$2y$10$qPxUJQ8fgqU1D7CdY3Enf.JPH7ZOpfda66mqn1FlOf9RbG6QQpAOu'),
('C.vanGessel@gmail.com', '$2y$10$yd5lUQvDJeQoKSs9OemTbOt1RrpJEQUoev0aM7Ej71Tsj2NpUyWUe'),
('DuaLipa@radio1.nl', '$2y$10$Nlcr90U3FnERmt8YMZ7g5.cyfRlo.hiKz6SWHt31AZxUldpcQKrzy'),
('Elon@tesla.com', 'toMarsAndBeyond'),
('HermanvdSchee@gmail.com', '$2y$10$P.6e6.amGW12Oms68jtWE.WJaqDtFhEGkMCCVxuIENNBxEEYX1d/e'),
('JimMorrisson@TheDoors.com', '$2y$10$PJzP/DB62ZNv2EYIOMBwoeC3Fd82z/GVEydMfinP4VIBkEM5C/lyO'),
('johnlennon@beatles.com', '$2y$10$LJDkj6UhufnJ9wmH/vU38OMvHriCllp.HNwA6WwEttuCDWWMyI8Z6'),
('K.vanderGaag@tcrmbo.nl', '$2y$10$4CTAI54.QSuD9ca7UREA4uKvh5S1KC4Am5c9W0UXLeuK/VZfWN/lu'),
('KhalidS@live.com', 'Baklav@!'),
('marieke@marie.nl', '$2y$10$81/8ogXF9hMcslfutKd1H.vx9mhQX1ic0BeHnWhVut275QtRqj4aS'),
('salkjflkdsjf', '$2y$10$74kqyufIBqxRw/A/bVcyi.dE6qNt9IN0CYprd/QFQ/T/p.Pa5jlS6'),
('scheurwater@live.nl', '$2y$10$u5xfO3PvDS7zEcCDnec3n.G.Utiu1iJdWrxdMYNYoi8z06H6YXK/W'),
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
