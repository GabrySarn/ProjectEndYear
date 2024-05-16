-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 16, 2024 alle 22:40
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blazerdb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `colore`
--

CREATE TABLE `colore` (
  `ID_colore` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `configurazione`
--

CREATE TABLE `configurazione` (
  `ID_conf` int(11) NOT NULL,
  `ID_pack` int(11) DEFAULT NULL,
  `ID_colore` int(11) DEFAULT NULL,
  `ID_optionalConf` int(11) DEFAULT NULL,
  `ID_motore` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `motore`
--

CREATE TABLE `motore` (
  `ID_motore` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `optional`
--

CREATE TABLE `optional` (
  `ID_opt` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `optional_conf`
--

CREATE TABLE `optional_conf` (
  `ID_opt_conf` int(11) NOT NULL,
  `Opt1` int(11) DEFAULT NULL,
  `Opt2` int(11) DEFAULT NULL,
  `Opt3` int(11) DEFAULT NULL,
  `Opt4` int(11) DEFAULT NULL,
  `Opt5` int(11) DEFAULT NULL,
  `Opt6` int(11) DEFAULT NULL,
  `Opt7` int(11) DEFAULT NULL,
  `Opt8` int(11) DEFAULT NULL,
  `Opt9` int(11) DEFAULT NULL,
  `Opt10` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `pack`
--

CREATE TABLE `pack` (
  `ID_pack` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `ID_utente` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Cognome` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Data_Nascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `veicolo`
--

CREATE TABLE `veicolo` (
  `ID_auto` int(11) NOT NULL,
  `Modello` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(1000) DEFAULT NULL,
  `Posti` int(11) DEFAULT NULL,
  `Anno` year(4) DEFAULT NULL,
  `Prezzo` decimal(15,2) DEFAULT NULL,
  `ImgLink` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `veicolo`
--

INSERT INTO `veicolo` (`ID_auto`, `Modello`, `Descrizione`, `Posti`, `Anno`, `Prezzo`, `ImgLink`) VALUES
(1, 'Blazer X6', 'Picture an affordable car designed for practicality and efficiency. With its compact size and fuel-efficient engine, it\'s perfect for navigating city streets and commuting with ease. Despite its affordability, it doesn\'t compromise on safety or comfort, making it an ideal choice for budget-conscious drivers.', 4, '2023', 23000.00, 'images/x6.png'),
(2, 'Blazer JETX', 'Imagine a sleek sports car with bold design and exceptional performance. With its sharp lines and powerful engine, it embodies the thrill of speed and the passion for driving. Every curve is an opportunity for pure adrenaline, while cutting-edge technology ensures uncompromising control.', 2, '2024', 275000.00, 'images/jetx.png'),
(3, 'Blazer FF18', 'Imagine an elegant cabriolet, designed to captivate wherever it roams. With sleek lines and a sense of freedom, it\'s more than just a car—it\'s an icon of style and liberation.', 4, '2024', 80000.00, 'images/FF18.png'),
(4, 'Blazer MOOD', 'Imagine a versatile SUV, combining rugged capability with refined elegance. With advanced technology and superior performance, it offers a seamless driving experience, whether you\'re navigating city streets or exploring off-road trails. Comfortable, capable, and stylish, it\'s the perfect companion for all your adventures.', 4, '2022', 34000.00, 'images/mood.png'),
(5, 'Blazer G-Wagon', 'Imagine a versatile 7-seater station wagon, perfect for modern families. With its spacious interior and flexible seating, it effortlessly accommodates both passengers and cargo. Whether it\'s daily commutes or weekend getaways, this vehicle ensures comfort and convenience for every adventure.', 7, '2023', 54000.00, 'images/G-Wagon.png');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `colore`
--
ALTER TABLE `colore`
  ADD PRIMARY KEY (`ID_colore`);

--
-- Indici per le tabelle `configurazione`
--
ALTER TABLE `configurazione`
  ADD PRIMARY KEY (`ID_conf`),
  ADD KEY `ID_pack` (`ID_pack`),
  ADD KEY `ID_colore` (`ID_colore`),
  ADD KEY `ID_optionalConf` (`ID_optionalConf`),
  ADD KEY `ID_motore` (`ID_motore`);

--
-- Indici per le tabelle `motore`
--
ALTER TABLE `motore`
  ADD PRIMARY KEY (`ID_motore`);

--
-- Indici per le tabelle `optional`
--
ALTER TABLE `optional`
  ADD PRIMARY KEY (`ID_opt`);

--
-- Indici per le tabelle `optional_conf`
--
ALTER TABLE `optional_conf`
  ADD PRIMARY KEY (`ID_opt_conf`),
  ADD KEY `Opt1` (`Opt1`),
  ADD KEY `Opt2` (`Opt2`),
  ADD KEY `Opt3` (`Opt3`),
  ADD KEY `Opt4` (`Opt4`),
  ADD KEY `Opt5` (`Opt5`),
  ADD KEY `Opt6` (`Opt6`),
  ADD KEY `Opt7` (`Opt7`),
  ADD KEY `Opt8` (`Opt8`),
  ADD KEY `Opt9` (`Opt9`),
  ADD KEY `Opt10` (`Opt10`);

--
-- Indici per le tabelle `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`ID_pack`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`ID_utente`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indici per le tabelle `veicolo`
--
ALTER TABLE `veicolo`
  ADD PRIMARY KEY (`ID_auto`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `colore`
--
ALTER TABLE `colore`
  MODIFY `ID_colore` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `configurazione`
--
ALTER TABLE `configurazione`
  MODIFY `ID_conf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `motore`
--
ALTER TABLE `motore`
  MODIFY `ID_motore` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `optional`
--
ALTER TABLE `optional`
  MODIFY `ID_opt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `optional_conf`
--
ALTER TABLE `optional_conf`
  MODIFY `ID_opt_conf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `pack`
--
ALTER TABLE `pack`
  MODIFY `ID_pack` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `ID_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `veicolo`
--
ALTER TABLE `veicolo`
  MODIFY `ID_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `configurazione`
--
ALTER TABLE `configurazione`
  ADD CONSTRAINT `configurazione_ibfk_1` FOREIGN KEY (`ID_pack`) REFERENCES `pack` (`ID_pack`),
  ADD CONSTRAINT `configurazione_ibfk_2` FOREIGN KEY (`ID_colore`) REFERENCES `colore` (`ID_colore`),
  ADD CONSTRAINT `configurazione_ibfk_3` FOREIGN KEY (`ID_optionalConf`) REFERENCES `optional_conf` (`ID_opt_conf`),
  ADD CONSTRAINT `configurazione_ibfk_4` FOREIGN KEY (`ID_motore`) REFERENCES `motore` (`ID_motore`);

--
-- Limiti per la tabella `optional_conf`
--
ALTER TABLE `optional_conf`
  ADD CONSTRAINT `optional_conf_ibfk_1` FOREIGN KEY (`Opt1`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_10` FOREIGN KEY (`Opt10`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_2` FOREIGN KEY (`Opt2`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_3` FOREIGN KEY (`Opt3`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_4` FOREIGN KEY (`Opt4`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_5` FOREIGN KEY (`Opt5`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_6` FOREIGN KEY (`Opt6`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_7` FOREIGN KEY (`Opt7`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_8` FOREIGN KEY (`Opt8`) REFERENCES `optional` (`ID_opt`),
  ADD CONSTRAINT `optional_conf_ibfk_9` FOREIGN KEY (`Opt9`) REFERENCES `optional` (`ID_opt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
