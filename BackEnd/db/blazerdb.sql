-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 26, 2024 alle 14:17
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
-- Struttura della tabella `cerchi`
--

CREATE TABLE `cerchi` (
  `ID_cerchi` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  `Img_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `cerchi`
--

INSERT INTO `cerchi` (`ID_cerchi`, `Nome`, `Prezzo`, `Img_link`) VALUES
(1, 'Regular', 999.99, 'images/Wheels/wheel_1.png'),
(2, 'Premium', 1499.99, 'images/Wheels/wheel_1.png'),
(3, 'Sport', 1499.99, 'images/Wheels/wheel_3.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `colore`
--

CREATE TABLE `colore` (
  `ID_colore` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Hex_color` varchar(7) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `colore`
--

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

-- --------------------------------------------------------

--
-- Struttura della tabella `configurazione`
--

CREATE TABLE `configurazione` (
  `ID_conf` int(11) NOT NULL,
  `ID_pack` int(11) DEFAULT NULL,
  `ID_colore` int(11) DEFAULT NULL,
  `ID_motore` int(11) DEFAULT NULL,
  `ID_cerchi` int(11) DEFAULT NULL,
  `ID_interni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `interni`
--

CREATE TABLE `interni` (
  `ID_interni` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `interni`
--

INSERT INTO `interni` (`ID_interni`, `Nome`, `Prezzo`) VALUES
(1, 'Normal', 0.00),
(2, 'Sport', 1299.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `motore`
--

CREATE TABLE `motore` (
  `ID_motore` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `motore`
--

INSERT INTO `motore` (`ID_motore`, `Tipo`, `Potenza`) VALUES
(1, 'Diesel', NULL),
(2, 'Petrol', NULL),
(3, 'Mild-Hybrid', NULL),
(4, 'Full-Hybrid', NULL),
(5, 'Electric', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `optional`
--

CREATE TABLE `optional` (
  `ID_opt` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `img_link` varchar(500) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `optional`
--

INSERT INTO `optional` (`ID_opt`, `Nome`, `img_link`, `prezzo`) VALUES
(1, 'Phone charging dock', 'images\\phone_charge.jpg', 249.99),
(2, 'SONOS 3D Premium Sound System', 'images\\Audio.jpg', 799.99),
(3, 'Sports steering wheel', 'images\\sports_steering_wheel.jpeg', 299.99),
(4, 'Panoramic Roof', 'images\\panoramic_roof.jpg', 399.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `optional_conf`
--

CREATE TABLE `optional_conf` (
  `ID_opt_conf` int(11) NOT NULL,
  `ID_conf` int(11) NOT NULL,
  `ID_optional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `ID` int(11) NOT NULL,
  `ID_utente` int(11) NOT NULL,
  `ID_veicolo` int(11) NOT NULL,
  `ID_conf` int(11) NOT NULL,
  `Data_acquisto` date NOT NULL DEFAULT current_timestamp(),
  `Stato_ordine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `pack`
--

CREATE TABLE `pack` (
  `ID_pack` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL,
  `img_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `pack`
--

INSERT INTO `pack` (`ID_pack`, `Nome`, `Descrizione`, `prezzo`, `img_link`) VALUES
(1, 'Basic', '<li>Infotainment plus package</li>\r\n<li>Assistance package plus</li>', 0.00, 'images/Basic.png'),
(2, 'Business', '<li>16\" alloy wheels</li>\r\n<li>LED front headlights</li>\r\n<li>10.25\" virtual cockpit</li>\r\n<li>Speed limiter with provision for Adaptive Cruise Control via FoD</li>\r\n<li>Lane departure warning</li>', 10000.00, 'images/Buisness.png'),
(3, 'Sport', '<li>18\" alloy wheels</li>\r\n<li>S line aesthetics</li>\r\n<li>LED headlights with LED rear lights</li>\r\n<li>Sporty setup</li>\r\n<li>Plus Air Conditioning Package</li>', 25000.00, 'images/Sports.png');

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
(1, 'Blazer X6', 'Picture an affordable car designed for practicality and efficiency. With its compact size and fuel-efficient engine, it\'s perfect for navigating city streets and commuting with ease. Despite its affordability, it doesn\'t compromise on safety or comfort, making it an ideal choice for budget-conscious drivers.', 4, '2023', 22999.99, 'images/x6.png'),
(2, 'Blazer JETX', 'Imagine a sleek sports car with bold design and exceptional performance. With its sharp lines and powerful engine, it embodies the thrill of speed and the passion for driving. Every curve is an opportunity for pure adrenaline, while cutting-edge technology ensures uncompromising control.', 2, '2024', 274999.99, 'images/jetx.png'),
(3, 'Blazer FF18', 'Imagine an elegant cabriolet, designed to captivate wherever it roams. With sleek lines and a sense of freedom, it\'s more than just a car—it\'s an icon of style and liberation.', 4, '2024', 79999.99, 'images/FF18.png'),
(4, 'Blazer MOOD', 'Imagine a versatile SUV, combining rugged capability with refined elegance. With advanced technology and superior performance, it offers a seamless driving experience, whether you\'re navigating city streets or exploring off-road trails. Comfortable, capable, and stylish, it\'s the perfect companion for all your adventures.', 4, '2022', 33999.99, 'images/mood.png'),
(5, 'Blazer G-Wagon', 'Imagine a versatile 7-seater station wagon, perfect for modern families. With its spacious interior and flexible seating, it effortlessly accommodates both passengers and cargo. Whether it\'s daily commutes or weekend getaways, this vehicle ensures comfort and convenience for every adventure.', 7, '2023', 53999.99, 'images/G-Wagon.png');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cerchi`
--
ALTER TABLE `cerchi`
  ADD PRIMARY KEY (`ID_cerchi`);

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
  ADD KEY `ID_motore` (`ID_motore`),
  ADD KEY `ID_cerchi` (`ID_cerchi`) USING BTREE,
  ADD KEY `ID_interni` (`ID_interni`) USING BTREE;

--
-- Indici per le tabelle `interni`
--
ALTER TABLE `interni`
  ADD PRIMARY KEY (`ID_interni`);

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
  ADD KEY `id_conf_fk` (`ID_conf`),
  ADD KEY `id_optional_fk` (`ID_optional`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_veicolo_fk` (`ID_veicolo`);

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
-- AUTO_INCREMENT per la tabella `cerchi`
--
ALTER TABLE `cerchi`
  MODIFY `ID_cerchi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `colore`
--
ALTER TABLE `colore`
  MODIFY `ID_colore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `configurazione`
--
ALTER TABLE `configurazione`
  MODIFY `ID_conf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `interni`
--
ALTER TABLE `interni`
  MODIFY `ID_interni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `motore`
--
ALTER TABLE `motore`
  MODIFY `ID_motore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `optional`
--
ALTER TABLE `optional`
  MODIFY `ID_opt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `optional_conf`
--
ALTER TABLE `optional_conf`
  MODIFY `ID_opt_conf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `pack`
--
ALTER TABLE `pack`
  MODIFY `ID_pack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `configurazione_ibfk_3` FOREIGN KEY (`ID_cerchi`) REFERENCES `cerchi` (`ID_cerchi`),
  ADD CONSTRAINT `configurazione_ibfk_4` FOREIGN KEY (`ID_motore`) REFERENCES `motore` (`ID_motore`),
  ADD CONSTRAINT `configurazione_ibfk_5` FOREIGN KEY (`ID_interni`) REFERENCES `interni` (`ID_interni`);

--
-- Limiti per la tabella `optional_conf`
--
ALTER TABLE `optional_conf`
  ADD CONSTRAINT `id_conf_fk` FOREIGN KEY (`ID_conf`) REFERENCES `configurazione` (`ID_conf`),
  ADD CONSTRAINT `id_optional_fk` FOREIGN KEY (`ID_optional`) REFERENCES `optional` (`ID_opt`);

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `id_veicolo_fk` FOREIGN KEY (`ID_veicolo`) REFERENCES `veicolo` (`ID_auto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
