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


-- Dump della struttura del database biblioteca
DROP DATABASE IF EXISTS `biblioteca`;
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `biblioteca`;

-- Dump della struttura di tabella biblioteca.autori
DROP TABLE IF EXISTS `autori`;
CREATE TABLE IF NOT EXISTS `autori` (
  `AutoreID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeAutore` varchar(50) NOT NULL,
  `DataNascita` date NOT NULL,
  `Nazionalita` int(11) DEFAULT NULL,
  PRIMARY KEY (`AutoreID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.autori: ~5 rows (circa)
DELETE FROM `autori`;
INSERT INTO `autori` (`AutoreID`, `NomeAutore`, `DataNascita`, `Nazionalita`) VALUES
	(1, 'Haruki Murakami', '0000-00-00', 1),
	(2, 'Dante Alighieri', '0000-00-00', 3),
	(3, 'Alessandro Manzoni', '0000-00-00', 3),
	(4, 'Umberto Eco', '0000-00-00', 3),
	(5, 'Hermann Hesse', '0000-00-00', 2);

-- Dump della struttura di tabella biblioteca.biblioteche
DROP TABLE IF EXISTS `biblioteche`;
CREATE TABLE IF NOT EXISTS `biblioteche` (
  `BibliotecaID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeBiblioteca` varchar(100) NOT NULL,
  `Indirizzo` varchar(255) NOT NULL,
  PRIMARY KEY (`BibliotecaID`),
  UNIQUE KEY `NomeBiblioteca` (`NomeBiblioteca`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.biblioteche: ~2 rows (circa)
DELETE FROM `biblioteche`;
INSERT INTO `biblioteche` (`BibliotecaID`, `NomeBiblioteca`, `Indirizzo`) VALUES
	(1, 'Biblioteca Centrale', 'Via Roma 123, Roma'),
	(2, 'Biblioteca Nazionale', 'Piazza Dante 456, Napoli');

-- Dump della struttura di tabella biblioteca.casaeditrice
DROP TABLE IF EXISTS `casaeditrice`;
CREATE TABLE IF NOT EXISTS `casaeditrice` (
  `CasaEditriceID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCasaEditrice` varchar(50) DEFAULT NULL,
  `Indirizzo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CasaEditriceID`),
  UNIQUE KEY `NomeCasaEditrice` (`NomeCasaEditrice`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.casaeditrice: ~10 rows (circa)
DELETE FROM `casaeditrice`;
INSERT INTO `casaeditrice` (`CasaEditriceID`, `NomeCasaEditrice`, `Indirizzo`) VALUES
	(1, 'Mondadori', 'Milano, Italia'),
	(2, 'Einaudi', 'Torino, Italia'),
	(3, 'Rizzoli', 'Milano, Italia'),
	(4, 'Bompiani', 'Milano, Italia'),
	(5, 'Feltrinelli', 'Milano, Italia'),
	(6, 'Adelphi', 'Milano, Italia'),
	(7, 'Laterza', 'Bari, Italia'),
	(8, 'Garzanti', 'Milano, Italia'),
	(9, 'Zanichelli', 'Bologna, Italia'),
	(10, 'Giunti', 'Firenze, Italia');

-- Dump della struttura di tabella biblioteca.genere
DROP TABLE IF EXISTS `genere`;
CREATE TABLE IF NOT EXISTS `genere` (
  `GenereID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeGenere` varchar(50) NOT NULL,
  PRIMARY KEY (`GenereID`),
  UNIQUE KEY `NomeGenere` (`NomeGenere`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.genere: ~11 rows (circa)
DELETE FROM `genere`;
INSERT INTO `genere` (`GenereID`, `NomeGenere`) VALUES
	(7, 'Biografia'),
	(3, 'Fantascienza'),
	(4, 'Fantasy'),
	(5, 'Giallo'),
	(10, 'Horror'),
	(2, 'Poesia'),
	(11, 'Poesia epica'),
	(1, 'Romanzo'),
	(8, 'Saggio'),
	(9, 'Storico'),
	(6, 'Thriller');

-- Dump della struttura di tabella biblioteca.libro
DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `ISBN` varchar(13) NOT NULL,
  `Titolo` varchar(100) NOT NULL,
  `AutoreID` int(11) NOT NULL,
  `AnnoPubblicazione` int(11) NOT NULL,
  `BibliotecaID` int(11) NOT NULL,
  `Disponibilita` bit(1) NOT NULL,
  `GenereID` int(11) NOT NULL,
  `CasaEditriceID` int(11) NOT NULL,
  `Copertina` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.libro: ~5 rows (circa)
DELETE FROM `libro`;
INSERT INTO `libro` (`ISBN`, `Titolo`, `AutoreID`, `AnnoPubblicazione`, `BibliotecaID`, `Disponibilita`, `GenereID`, `CasaEditriceID`, `Copertina`) VALUES
	('9788804486316', 'Norwegian Wood', 1, 1987, 1, b'0', 1, 1, 'Norwegian_Wood.jpg'),
	('9788804668233', 'La Divina Commedia', 2, 1320, 2, b'0', 11, 9, 'La_divina_commedia.jpg'),
	('9788806140036', 'I Promessi Sposi', 3, 1827, 1, b'1', 1, 3, 'I_Promessi_Sposi.jpg'),
	('9788806222091', 'Il Nome della Rosa', 4, 1980, 1, b'1', 5, 1, 'll_Nome_della_Rosa.jpg'),
	('9788806232779', 'Siddhartha', 5, 1922, 2, b'0', 1, 4, 'Siddhartha.jpg');

-- Dump della struttura di tabella biblioteca.nazionalità
DROP TABLE IF EXISTS `nazionalità`;
CREATE TABLE IF NOT EXISTS `nazionalità` (
  `NazioneID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeNazione` varchar(100) NOT NULL,
  PRIMARY KEY (`NazioneID`),
  UNIQUE KEY `NomeNazione` (`NomeNazione`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.nazionalità: ~3 rows (circa)
DELETE FROM `nazionalità`;
INSERT INTO `nazionalità` (`NazioneID`, `NomeNazione`) VALUES
	(1, 'Giapponese'),
	(2, 'Italiana'),
	(3, 'Tedesca');

-- Dump della struttura di tabella biblioteca.prenotazioni
DROP TABLE IF EXISTS `prenotazioni`;
CREATE TABLE IF NOT EXISTS `prenotazioni` (
  `PrenotazioneID` int(11) NOT NULL AUTO_INCREMENT,
  `UtenteID` int(11) NOT NULL,
  `ISBNLibro` varchar(13) NOT NULL,
  `DataPrenotazione` date NOT NULL,
  `Enabled` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`PrenotazioneID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.prenotazioni: ~24 rows (circa)
DELETE FROM `prenotazioni`;
INSERT INTO `prenotazioni` (`PrenotazioneID`, `UtenteID`, `ISBNLibro`, `DataPrenotazione`, `Enabled`) VALUES
	(1, 1, '9788804668233', '2023-12-07', b'0'),
	(2, 1, '9788806222091', '2023-12-07', b'0'),
	(3, 1, '9788804486316', '2023-12-07', b'0'),
	(4, 1, '9788804486316', '2023-12-07', b'0'),
	(5, 1, '9788804668233', '2023-12-07', b'0'),
	(6, 7, '9788804668233', '2023-12-07', b'0'),
	(7, 7, '9788806140036', '2023-12-07', b'0'),
	(8, 1, '9788804486316', '2023-12-11', b'0'),
	(9, 1, '9788804486316', '2023-12-12', b'0'),
	(10, 1, '9788804668233', '2023-12-12', b'0'),
	(11, 1, '9788806140036', '2023-12-12', b'0'),
	(12, 1, '9788806232779', '2023-12-12', b'0'),
	(13, 1, '9788806232779', '2023-12-12', b'0'),
	(14, 2, '9788806232779', '2023-12-12', b'0'),
	(15, 5, '9788804486316', '2023-12-12', b'0'),
	(16, 5, '9788804486316', '2023-12-12', b'0'),
	(17, 8, '9788804668233', '2023-12-12', b'0'),
	(18, 5, '9788804668233', '2023-12-12', b'0'),
	(19, 5, '9788804668233', '2023-12-12', b'0'),
	(20, 5, '9788804486316', '2023-12-12', b'0'),
	(21, 3, '9788804486316', '2023-12-12', b'1'),
	(22, 3, '9788804668233', '2023-12-12', b'0'),
	(23, 2, '9788804668233', '2023-12-12', b'1'),
	(24, 1, '9788806232779', '2023-12-12', b'1');

-- Dump della struttura di tabella biblioteca.utenti
DROP TABLE IF EXISTS `utenti`;
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `yob` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dump dei dati della tabella biblioteca.utenti: ~3 rows (circa)
DELETE FROM `utenti`;
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `password`, `yob`) VALUES
	(1, 'Gabriele', 'Sarnelli', 'info@info.it', 'c6f8cf68e5f68b0aa4680e089ee4742c', '2005'),
	(2, 'Gabriele', 'Sarnelli', 'info2@b.com', 'c6f8cf68e5f68b0aa4680e089ee4742c', '2003'),
	(3, 'Gabriele', 'Sarnelli', 'info3@b.com', 'c6f8cf68e5f68b0aa4680e089ee4742c', '2003');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
