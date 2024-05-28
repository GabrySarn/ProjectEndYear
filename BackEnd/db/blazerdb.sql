-- --------------------------------------------------------
-- Host:                         localhost
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database blazerdb
CREATE DATABASE IF NOT EXISTS `blazerdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blazerdb`;

-- Dump della struttura di tabella blazerdb.assistenza
CREATE TABLE IF NOT EXISTS `assistenza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `prezzo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.assistenza: ~7 rows (circa)
INSERT INTO `assistenza` (`id`, `nome`, `prezzo`) VALUES
	(1, 'adaptiveSpeedAssist', NULL),
	(2, 'hillStartAssist', NULL),
	(3, 'descentAssist', NULL),
	(4, 'parkingAssistant', NULL),
	(5, 'parkingAssistantPlus', NULL),
	(6, 'laneChangeWarning', NULL),
	(7, 'laneDepartureWarning', NULL);

-- Dump della struttura di tabella blazerdb.assistenza_opt
CREATE TABLE IF NOT EXISTS `assistenza_opt` (
  `Id` int(11) NOT NULL,
  `ID_conf` int(11) DEFAULT NULL,
  `ID_assistenza` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `ID_conf` (`ID_conf`),
  KEY `ID_opt` (`ID_assistenza`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.assistenza_opt: ~0 rows (circa)

-- Dump della struttura di tabella blazerdb.cerchi
CREATE TABLE IF NOT EXISTS `cerchi` (
  `ID_cerchi` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  `Img_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_cerchi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.cerchi: ~3 rows (circa)
INSERT INTO `cerchi` (`ID_cerchi`, `Nome`, `Prezzo`, `Img_link`) VALUES
	(1, 'Regular', 999.99, 'images/Wheels/wheel_1.png'),
	(2, 'Premium', 1499.99, 'images/Wheels/wheel_2.png'),
	(3, 'Sport', 1499.99, 'images/Wheels/wheel_3.png');

-- Dump della struttura di tabella blazerdb.colore
CREATE TABLE IF NOT EXISTS `colore` (
  `ID_colore` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Hex_color` varchar(7) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_colore`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.colore: ~10 rows (circa)
INSERT INTO `colore` (`ID_colore`, `Nome`, `Hex_color`, `prezzo`) VALUES
	(1, 'Red', '#ff0000', 499.99),
	(2, 'White', '#e6e6e6', 499.99),
	(3, 'Black', '#000000', 499.99),
	(4, 'Silver', '#c0c0c0', 499.99),
	(5, 'Grey', '#808080', 499.99),
	(6, 'Blue', '#000080', 499.99),
	(7, 'Sky', '#0099ff', 499.99),
	(8, 'Purple', '#5400b4', 499.99),
	(9, 'Brown', '#a52a2a', 499.99),
	(10, 'Yellow', '#ffd700', 499.99);

-- Dump della struttura di tabella blazerdb.configurazione
CREATE TABLE IF NOT EXISTS `configurazione` (
  `ID_conf` int(11) NOT NULL AUTO_INCREMENT,
  `ID_pack` int(11) DEFAULT NULL,
  `ID_colore` int(11) DEFAULT NULL,
  `ID_motore` int(11) DEFAULT NULL,
  `ID_cerchi` int(11) DEFAULT NULL,
  `ID_interni` int(11) NOT NULL,
  PRIMARY KEY (`ID_conf`),
  KEY `ID_pack` (`ID_pack`),
  KEY `ID_colore` (`ID_colore`),
  KEY `ID_motore` (`ID_motore`),
  KEY `ID_cerchi` (`ID_cerchi`) USING BTREE,
  KEY `ID_interni` (`ID_interni`) USING BTREE,
  CONSTRAINT `configurazione_ibfk_1` FOREIGN KEY (`ID_pack`) REFERENCES `pack` (`ID_pack`),
  CONSTRAINT `configurazione_ibfk_2` FOREIGN KEY (`ID_colore`) REFERENCES `colore` (`ID_colore`),
  CONSTRAINT `configurazione_ibfk_3` FOREIGN KEY (`ID_cerchi`) REFERENCES `cerchi` (`ID_cerchi`),
  CONSTRAINT `configurazione_ibfk_4` FOREIGN KEY (`ID_motore`) REFERENCES `motore` (`ID_motore`),
  CONSTRAINT `configurazione_ibfk_5` FOREIGN KEY (`ID_interni`) REFERENCES `interni` (`ID_interni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.configurazione: ~0 rows (circa)

-- Dump della struttura di tabella blazerdb.interni
CREATE TABLE IF NOT EXISTS `interni` (
  `ID_interni` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_interni`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.interni: ~2 rows (circa)
INSERT INTO `interni` (`ID_interni`, `Nome`, `Prezzo`) VALUES
	(1, 'Normal', 0.00),
	(2, 'Sport', 1299.99);

-- Dump della struttura di tabella blazerdb.motore
CREATE TABLE IF NOT EXISTS `motore` (
  `ID_motore` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_motore`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.motore: ~5 rows (circa)
INSERT INTO `motore` (`ID_motore`, `Tipo`, `Potenza`) VALUES
	(1, 'Diesel', NULL),
	(2, 'Petrol', NULL),
	(3, 'Mild-Hybrid', NULL),
	(4, 'Full-Hybrid', NULL),
	(5, 'Electric', NULL);

-- Dump della struttura di tabella blazerdb.optional
CREATE TABLE IF NOT EXISTS `optional` (
  `ID_opt` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `img_link` varchar(500) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_opt`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.optional: ~4 rows (circa)
INSERT INTO `optional` (`ID_opt`, `Nome`, `img_link`, `prezzo`) VALUES
	(1, 'Charge phone box', 'images\\phone_charge.jpg', 249.99),
	(2, 'SONOS 3D Premium Sound System', 'images\\Audio.jpg', 799.99),
	(3, 'Sports steering wheel', 'images\\sports_steering_wheel.jpeg', 299.99),
	(4, 'Panoramic Roof', 'images\\panoramic_roof.jpg', 399.99);

-- Dump della struttura di tabella blazerdb.optional_conf
CREATE TABLE IF NOT EXISTS `optional_conf` (
  `ID_opt_conf` int(11) NOT NULL AUTO_INCREMENT,
  `ID_conf` int(11) NOT NULL,
  `ID_optional` int(11) NOT NULL,
  PRIMARY KEY (`ID_opt_conf`),
  KEY `id_conf_fk` (`ID_conf`),
  KEY `id_optional_fk` (`ID_optional`),
  CONSTRAINT `id_conf_fk` FOREIGN KEY (`ID_conf`) REFERENCES `configurazione` (`ID_conf`),
  CONSTRAINT `id_optional_fk` FOREIGN KEY (`ID_optional`) REFERENCES `optional` (`ID_opt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.optional_conf: ~0 rows (circa)

-- Dump della struttura di tabella blazerdb.ordine
CREATE TABLE IF NOT EXISTS `ordine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_utente` int(11) NOT NULL,
  `ID_veicolo` int(11) NOT NULL,
  `ID_conf` int(11) NOT NULL,
  `Data_acquisto` date NOT NULL,
  `Stato_ordine` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_veicolo` (`ID_veicolo`),
  KEY `ID_conf` (`ID_conf`),
  KEY `ID_utente` (`ID_utente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.ordine: ~7 rows (circa)
INSERT INTO `ordine` (`ID`, `ID_utente`, `ID_veicolo`, `ID_conf`, `Data_acquisto`, `Stato_ordine`) VALUES
	(3, 2, 3, 0, '0000-00-00', 'bozza'),
	(4, 3, 1, 0, '0000-00-00', '0'),
	(5, 3, 1, 0, '0000-00-00', '0'),
	(6, 3, 1, 0, '0000-00-00', '0'),
	(7, 3, 1, 0, '0000-00-00', '0'),
	(8, 3, 1, 0, '0000-00-00', '0'),
	(9, 3, 1, 0, '0000-00-00', '0');

-- Dump della struttura di tabella blazerdb.pack
CREATE TABLE IF NOT EXISTS `pack` (
  `ID_pack` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  `img_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_pack`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.pack: ~3 rows (circa)
INSERT INTO `pack` (`ID_pack`, `Nome`, `Descrizione`, `prezzo`, `img_link`) VALUES
	(1, 'Basic', '<li>Infotainment plus package</li>\r\n<li>Assistance package plus</li>', 0.00, 'images/Basic.png'),
	(2, 'Business', '<li>16" alloy wheels</li>\r\n<li>LED front headlights</li>\r\n<li>10.25" virtual cockpit</li>\r\n<li>Speed limiter with provision for Adaptive Cruise Control via FoD</li>\r\n<li>Lane departure warning</li>', 10000.00, 'images/Buisness.png'),
	(3, 'Sport', '<li>18" alloy wheels</li>\r\n<li>S line aesthetics</li>\r\n<li>LED headlights with LED rear lights</li>\r\n<li>Sporty setup</li>\r\n<li>Plus Air Conditioning Package</li>', 25000.00, 'images/Sports.png');

-- Dump della struttura di tabella blazerdb.paese
CREATE TABLE IF NOT EXISTS `paese` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella blazerdb.paese: ~21 rows (circa)
INSERT INTO `paese` (`ID`, `Nome`) VALUES
	(1, 'Albania'),
	(2, 'Argentina'),
	(3, 'Australia'),
	(4, 'Austria'),
	(5, 'Belgium'),
	(6, 'Brazil'),
	(7, 'Canada'),
	(8, 'China'),
	(9, 'Colombia'),
	(10, 'France'),
	(11, 'Germany'),
	(12, 'India'),
	(13, 'Indonesia'),
	(14, 'Italy'),
	(15, 'Japan'),
	(16, 'Netherlands'),
	(17, 'Russia'),
	(18, 'Spain'),
	(19, 'Switzerland'),
	(20, 'United Kingdom'),
	(21, 'United States of America');

-- Dump della struttura di tabella blazerdb.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `ID_utente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Cognome` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Data_Nascita` date DEFAULT NULL,
  PRIMARY KEY (`ID_utente`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.utente: ~2 rows (circa)
INSERT INTO `utente` (`ID_utente`, `Nome`, `Cognome`, `Email`, `Password`, `Data_Nascita`) VALUES
	(2, 'Gabriele', 'Sarnelli', 'gabry@gmail.com', 'dd2ef34530de7e5bef22a05e7e5dd178', '2005-02-18'),
	(3, 'Alessandro', 'Ricci', 'alessandro.ricci@gmail.com', '42ac3d8548e7c9e6c344f5863d790bc4', '2005-05-26');

-- Dump della struttura di tabella blazerdb.veicolo
CREATE TABLE IF NOT EXISTS `veicolo` (
  `ID_auto` int(11) NOT NULL AUTO_INCREMENT,
  `Modello` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(1000) DEFAULT NULL,
  `Posti` int(11) DEFAULT NULL,
  `Anno` year(4) DEFAULT NULL,
  `Prezzo` decimal(15,2) DEFAULT NULL,
  `ImgLink` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_auto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella blazerdb.veicolo: ~5 rows (circa)
INSERT INTO `veicolo` (`ID_auto`, `Modello`, `Descrizione`, `Posti`, `Anno`, `Prezzo`, `ImgLink`) VALUES
	(1, 'Blazer X6', 'Picture an affordable car designed for practicality and efficiency. With its compact size and fuel-efficient engine, it\'s perfect for navigating city streets and commuting with ease. Despite its affordability, it doesn\'t compromise on safety or comfort, making it an ideal choice for budget-conscious drivers.', 4, '2023', 22999.99, 'images/x6.png'),
	(2, 'Blazer JETX', 'Imagine a sleek sports car with bold design and exceptional performance. With its sharp lines and powerful engine, it embodies the thrill of speed and the passion for driving. Every curve is an opportunity for pure adrenaline, while cutting-edge technology ensures uncompromising control.', 2, '2024', 274999.99, 'images/jetx.png'),
	(3, 'Blazer FF18', 'Imagine an elegant cabriolet, designed to captivate wherever it roams. With sleek lines and a sense of freedom, it\'s more than just a car—it\'s an icon of style and liberation.', 4, '2024', 79999.99, 'images/FF18.png'),
	(4, 'Blazer MOOD', 'Imagine a versatile SUV, combining rugged capability with refined elegance. With advanced technology and superior performance, it offers a seamless driving experience, whether you\'re navigating city streets or exploring off-road trails. Comfortable, capable, and stylish, it\'s the perfect companion for all your adventures.', 4, '2022', 33999.99, 'images/mood.png'),
	(5, 'Blazer G-Wagon', 'Imagine a versatile 7-seater station wagon, perfect for modern families. With its spacious interior and flexible seating, it effortlessly accommodates both passengers and cargo. Whether it\'s daily commutes or weekend getaways, this vehicle ensures comfort and convenience for every adventure.', 7, '2023', 53999.99, 'images/G-Wagon.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
