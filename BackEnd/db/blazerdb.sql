-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.7.0.6850
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
DROP DATABASE IF EXISTS `blazerdb`;
CREATE DATABASE IF NOT EXISTS `blazerdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blazerdb`;

-- Dump della struttura di tabella blazerdb.colore
DROP TABLE IF EXISTS `colore`;
CREATE TABLE IF NOT EXISTS `colore` (
  `ID_colore` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_colore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.configurazione

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.motore
DROP TABLE IF EXISTS `motore`;
CREATE TABLE IF NOT EXISTS `motore` (
  `ID_motore` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_motore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.optional
DROP TABLE IF EXISTS `optional`;
CREATE TABLE IF NOT EXISTS `optional` (
  `ID_opt` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_opt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.optional_conf

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.pack
DROP TABLE IF EXISTS `pack`;
CREATE TABLE IF NOT EXISTS `pack` (
  `ID_pack` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_pack`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.utente
DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `ID_utente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Cognome` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Data_Nascita` date DEFAULT NULL,
  PRIMARY KEY (`ID_utente`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.veicolo
DROP TABLE IF EXISTS `veicolo`;
CREATE TABLE IF NOT EXISTS `veicolo` (
  `ID_auto` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(50) DEFAULT NULL,
  `Modello` varchar(50) DEFAULT NULL,
  `Anno` int(11) DEFAULT NULL,
  `Prezzo` float DEFAULT NULL,
  `Chilometraggio` float DEFAULT NULL,
  `ID_pack` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_auto`),
  KEY `ID_pack` (`ID_pack`),
  CONSTRAINT `veicolo_ibfk_1` FOREIGN KEY (`ID_pack`) REFERENCES `pack` (`ID_pack`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
DROP TABLE IF EXISTS `optional_conf`;
CREATE TABLE IF NOT EXISTS `optional_conf` (
  `ID_opt_conf` int(11) NOT NULL AUTO_INCREMENT,
  `Opt1` int(11) DEFAULT NULL,
  `Opt2` int(11) DEFAULT NULL,
  `Opt3` int(11) DEFAULT NULL,
  `Opt4` int(11) DEFAULT NULL,
  `Opt5` int(11) DEFAULT NULL,
  `Opt6` int(11) DEFAULT NULL,
  `Opt7` int(11) DEFAULT NULL,
  `Opt8` int(11) DEFAULT NULL,
  `Opt9` int(11) DEFAULT NULL,
  `Opt10` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_opt_conf`),
  KEY `Opt1` (`Opt1`),
  KEY `Opt2` (`Opt2`),
  KEY `Opt3` (`Opt3`),
  KEY `Opt4` (`Opt4`),
  KEY `Opt5` (`Opt5`),
  KEY `Opt6` (`Opt6`),
  KEY `Opt7` (`Opt7`),
  KEY `Opt8` (`Opt8`),
  KEY `Opt9` (`Opt9`),
  KEY `Opt10` (`Opt10`),
  CONSTRAINT `optional_conf_ibfk_1` FOREIGN KEY (`Opt1`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_10` FOREIGN KEY (`Opt10`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_2` FOREIGN KEY (`Opt2`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_3` FOREIGN KEY (`Opt3`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_4` FOREIGN KEY (`Opt4`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_5` FOREIGN KEY (`Opt5`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_6` FOREIGN KEY (`Opt6`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_7` FOREIGN KEY (`Opt7`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_8` FOREIGN KEY (`Opt8`) REFERENCES `optional` (`ID_opt`),
  CONSTRAINT `optional_conf_ibfk_9` FOREIGN KEY (`Opt9`) REFERENCES `optional` (`ID_opt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.
DROP TABLE IF EXISTS `configurazione`;
CREATE TABLE IF NOT EXISTS `configurazione` (
  `ID_conf` int(11) NOT NULL AUTO_INCREMENT,
  `ID_pack` int(11) DEFAULT NULL,
  `ID_colore` int(11) DEFAULT NULL,
  `ID_optionalConf` int(11) DEFAULT NULL,
  `ID_motore` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_conf`),
  KEY `ID_pack` (`ID_pack`),
  KEY `ID_colore` (`ID_colore`),
  KEY `ID_optionalConf` (`ID_optionalConf`),
  KEY `ID_motore` (`ID_motore`),
  CONSTRAINT `configurazione_ibfk_1` FOREIGN KEY (`ID_pack`) REFERENCES `pack` (`ID_pack`),
  CONSTRAINT `configurazione_ibfk_2` FOREIGN KEY (`ID_colore`) REFERENCES `colore` (`ID_colore`),
  CONSTRAINT `configurazione_ibfk_3` FOREIGN KEY (`ID_optionalConf`) REFERENCES `optional_conf` (`ID_opt_conf`),
  CONSTRAINT `configurazione_ibfk_4` FOREIGN KEY (`ID_motore`) REFERENCES `motore` (`ID_motore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
