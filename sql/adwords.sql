-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Nov 2017 um 11:28
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
-- Tabellenstruktur für Tabelle `t_adwords`
--

CREATE TABLE `t_adwords` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `adWord` varchar(50) NOT NULL,
  `price` decimal(11,0) NOT NULL DEFAULT '0',
  `click_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_adwords`
--

INSERT INTO `t_adwords` (`id`, `id_customer`, `adWord`, `price`, `click_count`) VALUES
(1, 1, 'Ferienwohnung', '10', 1000);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `text` varchar(1024) DEFAULT NULL,
  `pic_link` varchar(1024) DEFAULT NULL,
  `e_Mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_customer`
--

INSERT INTO `t_customer` (`id`, `name`, `text`, `pic_link`, `e_Mail`) VALUES
(1, 'bing', 'Bing ist eine Internet-Suchmaschine von Microsoft und der Nachfolger von Live Search.', 'https://www.underconsideration.com/brandnew/archives/bing_2016_logo.png', '0'),
(2, 'Twitter Inc.', 'Twitter Inc. mit Sitz in San Francisco ist der börsennotierte Betreiber des Mikroblogging-Dienstes Twitter.', 'https://upload.wikimedia.org/wikipedia/de/thumb/9/9f/Twitter_bird_logo_2012.svg/154px-Twitter_bird_logo_2012.svg.png', '0'),
(5, 'Marcel', 'Hallo DU', 'agfag', '0'),
(6, 'Marcel', 'Hallo Du Da', 'www.ttpg.sddgkjjs.', '0'),
(7, 'CBM', 'Hallo Text', 'www.pic.de', 'info@cbm.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer_social`
--

CREATE TABLE `t_customer_social` (
  `id_customer` int(11) NOT NULL,
  `id_social` int(11) NOT NULL,
  `extention` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `permission` varchar(10) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_user`
--

INSERT INTO `t_user` (`id`, `name`, `pwd`, `permission`, `id_customer`) VALUES
(1, 'Talal', 'Hardpw', 'editor', 7);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `t_adwords`
--
ALTER TABLE `t_adwords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indizes für die Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_customer_social`
--
ALTER TABLE `t_customer_social`
  ADD PRIMARY KEY (`id_customer`,`id_social`),
  ADD KEY `id_social` (`id_social`);

--
-- Indizes für die Tabelle `t_social`
--
ALTER TABLE `t_social`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `t_adwords`
--
ALTER TABLE `t_adwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `t_social`
--
ALTER TABLE `t_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `t_adwords`
--
ALTER TABLE `t_adwords`
  ADD CONSTRAINT `t_adwords_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_customer_social`
--
ALTER TABLE `t_customer_social`
  ADD CONSTRAINT `t_customer_social_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `t_customer_social_ibfk_2` FOREIGN KEY (`id_social`) REFERENCES `t_social` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
