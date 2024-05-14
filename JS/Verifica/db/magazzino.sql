-- --------------------------------------------------------
-- Host:                         localhost
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database magazzino
DROP DATABASE IF EXISTS `magazzino`;
CREATE DATABASE IF NOT EXISTS `magazzino` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `magazzino`;

-- Dump della struttura di tabella magazzino.prodotti
DROP TABLE IF EXISTS `prodotti`;
CREATE TABLE IF NOT EXISTS `prodotti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Prodotto` varchar(255) NOT NULL,
  `Quantità` int(11) NOT NULL,
  `Prezzo` decimal(10,2) NOT NULL,
  `Descriz` tinytext DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella magazzino.prodotti: ~2 rows (circa)
DELETE FROM `prodotti`;
INSERT INTO `prodotti` (`ID`, `Nome_Prodotto`, `Quantità`, `Prezzo`, `Descriz`) VALUES
	(2, 'Samsung Odyssey 32"', 30, 500.00, 'Monitor'),
	(3, 'Iphone 11', 35, 700.00, '');

-- Dump della struttura di tabella magazzino.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella magazzino.users: ~1 rows (circa)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `email`, `password`) VALUES
	(1, 'email@example.com', '482c811da5d5b4bc6d497ffa98491e38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
