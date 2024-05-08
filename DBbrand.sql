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


-- Dump della struttura del database brand
CREATE DATABASE IF NOT EXISTS `brand` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `brand`;

-- Dump della struttura di tabella brand.abbigliamento
CREATE TABLE IF NOT EXISTS `abbigliamento` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(100) DEFAULT NULL,
  `Colore` varchar(50) DEFAULT NULL,
  `Taglia` varchar(5) DEFAULT NULL,
  `Materiale` varchar(50) DEFAULT NULL,
  `Prezzo` decimal(10,2) DEFAULT NULL,
  `Disponibilita` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella brand.abbigliamento: ~0 rows (circa)

-- Dump della struttura di tabella brand.auto
CREATE TABLE IF NOT EXISTS `auto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(50) DEFAULT NULL,
  `Modello` varchar(50) DEFAULT NULL,
  `AnnoProduzione` int(11) DEFAULT NULL,
  `Colore` varchar(50) DEFAULT NULL,
  `TipoMotore` varchar(50) DEFAULT NULL,
  `Prezzo` decimal(10,2) DEFAULT NULL,
  `Consumo` decimal(5,2) DEFAULT NULL,
  `PotenzaCV` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella brand.auto: ~0 rows (circa)

-- Dump della struttura di tabella brand.sistemaoperativo
CREATE TABLE IF NOT EXISTS `sistemaoperativo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SistemaOperativo` varchar(50) DEFAULT NULL,
  `Versione` varchar(50) DEFAULT NULL,
  `AnnoRilascio` int(11) DEFAULT NULL,
  `Licenza` varchar(50) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Prezzo` decimal(10,2) DEFAULT NULL,
  `PiattaformaSupportata` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella brand.sistemaoperativo: ~0 rows (circa)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
