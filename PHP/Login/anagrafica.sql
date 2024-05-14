-- --------------------------------------------------------
-- Host:                         localhost
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database anagrafica
CREATE DATABASE IF NOT EXISTS `anagrafica` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `anagrafica`;

-- Dump della struttura di tabella anagrafica.hobby
CREATE TABLE IF NOT EXISTS `hobby` (
  `id` int(11) NOT NULL,
  `descriz` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella anagrafica.hobby: ~3 rows (circa)
DELETE FROM `hobby`;
INSERT INTO `hobby` (`id`, `descriz`) VALUES
	(1, 'Calcio'),
	(2, 'Basket'),
	(3, 'Tennis');

-- Dump della struttura di tabella anagrafica.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `yob` int(11) DEFAULT NULL,
  `hobby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella anagrafica.utenti: ~1 rows (circa)
DELETE FROM `utenti`;
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `password`, `yob`, `hobby`) VALUES
	(5, 'Gabriele', 'Sarnelli', 'ciao@ciao.it', '5a4d5215fa1fb5435e5322dbeb60dd3c', 2005, 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
