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


-- Dump della struttura del database inv_aziendale
CREATE DATABASE IF NOT EXISTS `inv_aziendale` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `inv_aziendale`;

-- Dump della struttura di tabella inv_aziendale.inventario
CREATE TABLE IF NOT EXISTS `inventario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Prodotto` varchar(255) NOT NULL,
  `Quantità` int(11) NOT NULL,
  `Prezzo_Unitario` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella inv_aziendale.inventario: ~10 rows (circa)
DELETE FROM `inventario`;
INSERT INTO `inventario` (`ID`, `Nome_Prodotto`, `Quantità`, `Prezzo_Unitario`) VALUES
	(1, 'Smartphone', 50, 500.00),
	(2, 'Laptop', 30, 1000.00),
	(3, 'Mouse wireless', 100, 20.00),
	(4, 'Tastiera meccanica RGB', 20, 80.00),
	(5, 'Cuffie Bluetooth', 80, 50.00),
	(6, 'Tablet', 40, 300.00),
	(7, 'Stampante multifunzione', 25, 150.00),
	(8, 'Monitor 27"', 15, 300.00),
	(9, 'Webcam HD', 60, 30.00),
	(10, 'Altoparlante Bluetooth', 70, 40.00),
	(11, 'Samsung S21+', 20, 600.00),
	(12, 'Monitor 32"', 30, 500.00);

-- Dump della struttura di tabella inv_aziendale.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella inv_aziendale.users: ~0 rows (circa)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `email`, `password`) VALUES
	(3, 'email@example.com', '482c811da5d5b4bc6d497ffa98491e38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
