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
CREATE DATABASE IF NOT EXISTS `blazerdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blazerdb`;

-- Dump della struttura di tabella blazerdb.cerchi
CREATE TABLE IF NOT EXISTS `cerchi` (
  `ID_cerchi` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  `Img_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_cerchi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.colore
CREATE TABLE IF NOT EXISTS `colore` (
  `ID_colore` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Hex_color` varchar(7) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_colore`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

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

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.interni
CREATE TABLE IF NOT EXISTS `interni` (
  `ID_interni` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_interni`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.motore
CREATE TABLE IF NOT EXISTS `motore` (
  `ID_motore` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_motore`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.optional
CREATE TABLE IF NOT EXISTS `optional` (
  `ID_opt` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `img_link` varchar(500) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID_opt`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

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

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.ordini
CREATE TABLE IF NOT EXISTS `ordini` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_utente` int(11) NOT NULL,
  `ID_veicolo` int(11) NOT NULL,
  `ID_conf` int(11) NOT NULL,
  `Data_acquisto` date NOT NULL DEFAULT current_timestamp(),
  `Stato_ordine` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_veicolo_fk` (`ID_veicolo`),
  CONSTRAINT `id_veicolo_fk` FOREIGN KEY (`ID_veicolo`) REFERENCES `veicolo` (`ID_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

-- Dump della struttura di tabella blazerdb.pack
CREATE TABLE IF NOT EXISTS `pack` (
  `ID_pack` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  `img_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_pack`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- L’esportazione dei dati non era selezionata.

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

-- L’esportazione dei dati non era selezionata.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
