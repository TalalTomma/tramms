-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Nov 2017 um 16:19
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `adwords`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `text` varchar(1024) DEFAULT NULL,
  `bilderLink` varchar(1024) DEFAULT NULL,
  `rangePay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_customer`
--

INSERT INTO `t_customer` (`id`, `name`, `text`, `bilderLink`, `rangePay`) VALUES
(1, 'bing', 'Bing ist eine Internet-Suchmaschine von Microsoft und der Nachfolger von Live Search.', 'https://www.underconsideration.com/brandnew/archives/bing_2016_logo.png', 0),
(2, 'Twitter Inc.', 'Twitter Inc. mit Sitz in San Francisco ist der börsennotierte Betreiber des Mikroblogging-Dienstes Twitter.', 'https://upload.wikimedia.org/wikipedia/de/thumb/9/9f/Twitter_bird_logo_2012.svg/154px-Twitter_bird_logo_2012.svg.png', 0),
(5, 'Marcel', 'Hallo DU', 'agfag', 1000),
(6, 'Marcel', 'Hallo Du Da', 'www.ttpg.sddgkjjs.', 1000);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_kunden_sozial_detail`
--

CREATE TABLE `t_kunden_sozial_detail` (
  `id_kunden` int(11) NOT NULL,
  `id_sozial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_kunden_sozial_detail`
--

INSERT INTO `t_kunden_sozial_detail` (`id_kunden`, `id_sozial`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_social`
--

CREATE TABLE `t_social` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `preLink` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_social`
--

INSERT INTO `t_social` (`id`, `name`, `preLink`) VALUES
(1, 'Facebook', 'https://de-de.facebo'),
(3, 'Wikipedia', 'https://de.wikipedia'),
(4, 'Webseite', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nutzer` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_social`
--
ALTER TABLE `t_social`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `t_social`
--
ALTER TABLE `t_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
