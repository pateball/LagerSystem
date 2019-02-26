-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Feb 2019 um 19:27
-- Server-Version: 10.1.36-MariaDB
-- PHP-Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lager`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Artikelnummer` int(11) NOT NULL,
  `beschreibung` varchar(30) NOT NULL,
  `internebezeichnung` varchar(60) NOT NULL,
  `bestand` int(11) NOT NULL,
  `lagerort` varchar(255) NOT NULL,
  `seit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`Id`, `Artikelnummer`, `beschreibung`, `internebezeichnung`, `bestand`, `lagerort`, `seit`) VALUES
(1, 1, 'Text auf der Packung', 'Schlagwoerter', 9, '1-1-1', '2019-02-24 19:37:28'),
(2, 2, 'Zweiter Artikel', 'Auch ein Test', 2, '1-10-20', '2019-02-25 11:56:37'),
(3, 5, 'fuenfter Artikel', 'Immernoch ein test', 6, '18-6-1', '2019-02-25 14:17:10'),
(4, 30, 'zwei an einem Ort', 'Doppel Test', 6, '1-1-1\r\n', '2019-02-25 15:29:13'),
(5, 20, 'neu', 'Test des artikel Anlegens', 2, '18-05-00', '2019-02-25 18:46:15');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
