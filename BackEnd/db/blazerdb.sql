-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2024 alle 12:39
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
-- Struttura della tabella `assistenza`
--

CREATE TABLE `assistenza` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `prezzo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `assistenza`
--

INSERT INTO `assistenza` (`id`, `nome`, `prezzo`) VALUES
(1, 'adaptiveSpeedAssist', 149.99),
(2, 'hillStartAssist', 149.99),
(3, 'descentAssist', 149.99),
(4, 'parkingAssistant', 149.99),
(5, 'parkingAssistantPlus', 149.99),
(6, 'laneChangeWarning', 149.99),
(7, 'laneDepartureWarning', 149.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `assistenza_conf`
--

CREATE TABLE `assistenza_conf` (
  `ID_conf` int(11) DEFAULT NULL,
  `ID_assistenza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `assistenza_conf`
--

INSERT INTO `assistenza_conf` (`ID_conf`, `ID_assistenza`) VALUES
(17, 1),
(17, 7),
(18, 1),
(18, 7),
(19, 1),
(19, 7),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 4),
(25, 5),
(26, 5),
(28, 1),
(28, 2),
(28, 3),
(28, 4),
(28, 5),
(28, 6),
(28, 7);

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
(2, 'Premium', 1499.99, 'images/Wheels/wheel_2.png'),
(3, 'Sport', 1499.99, 'images/Wheels/wheel_3.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `colore`
--

CREATE TABLE `colore` (
  `ID_colore` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Hex_color` varchar(7) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `colore`
--

INSERT INTO `colore` (`ID_colore`, `Nome`, `Hex_color`, `Prezzo`) VALUES
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

--
-- Dump dei dati per la tabella `configurazione`
--

INSERT INTO `configurazione` (`ID_conf`, `ID_pack`, `ID_colore`, `ID_motore`, `ID_cerchi`, `ID_interni`) VALUES
(17, 1, 1, 4, 3, 1),
(18, 1, 1, 4, 3, 1),
(19, 3, 9, 4, 3, 1),
(20, 2, 1, 2, 1, 1),
(21, 0, 10, 4, 2, 1),
(22, 2, 10, 4, 2, 1),
(23, 2, 10, 4, 2, 1),
(24, 2, 3, 4, 2, 1),
(25, 1, 2, 4, 2, 2),
(26, 2, 2, 4, 2, 2),
(27, 3, 1, 1, 1, 2),
(28, 3, 1, 5, 3, 2);

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
  `Nome` varchar(50) DEFAULT NULL,
  `Potenza` int(11) DEFAULT NULL,
  `prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `motore`
--

INSERT INTO `motore` (`ID_motore`, `Nome`, `Potenza`, `prezzo`) VALUES
(1, 'Diesel', NULL, 0.00),
(2, 'Petrol', NULL, 0.00),
(3, 'Mild-Hybrid', NULL, 2000.00),
(4, 'Full-Hybrid', NULL, 3400.00),
(5, 'Electric', NULL, 5000.00);

-- --------------------------------------------------------

--
-- Struttura della tabella `optional`
--

CREATE TABLE `optional` (
  `ID_opt` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `img_link` varchar(500) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `optional`
--

INSERT INTO `optional` (`ID_opt`, `Nome`, `img_link`, `Prezzo`) VALUES
(1, 'Charge phone box', 'images\\phone_charge.jpg', 249.99),
(2, 'SONOS 3D Premium Sound System', 'images\\Audio.jpg', 799.99),
(3, 'Sports steering wheel', 'images\\sports_steering_wheel.jpeg', 299.99),
(4, 'Panoramic Roof', 'images\\panoramic_roof.jpg', 399.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `optional_conf`
--

CREATE TABLE `optional_conf` (
  `ID_conf` int(11) NOT NULL,
  `ID_optional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `optional_conf`
--

INSERT INTO `optional_conf` (`ID_conf`, `ID_optional`) VALUES
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(20, 1),
(20, 2),
(21, 1),
(25, 2),
(26, 2),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(27, 4),
(28, 1),
(28, 2),
(28, 3),
(28, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE `ordine` (
  `ID` int(11) NOT NULL,
  `ID_utente` int(11) NOT NULL,
  `ID_veicolo` int(11) NOT NULL,
  `ID_conf` int(11) NOT NULL,
  `Data_acquisto` date NOT NULL,
  `Stato_ordine` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`ID`, `ID_utente`, `ID_veicolo`, `ID_conf`, `Data_acquisto`, `Stato_ordine`) VALUES
(3, 2, 2, 17, '0000-00-00', 'Bozza'),
(4, 2, 2, 18, '0000-00-00', 'Bozza'),
(5, 2, 2, 19, '0000-00-00', 'Bozza'),
(6, 2, 1, 20, '0000-00-00', 'Bozza'),
(7, 2, 1, 21, '0000-00-00', 'Bozza'),
(8, 2, 1, 22, '0000-00-00', 'Bozza'),
(9, 2, 1, 23, '0000-00-00', 'Bozza'),
(10, 2, 1, 24, '0000-00-00', 'Bozza'),
(11, 2, 2, 25, '0000-00-00', 'Bozza'),
(12, 2, 2, 26, '0000-00-00', 'Bozza'),
(13, 3, 2, 27, '0000-00-00', 'Bozza'),
(14, 3, 2, 28, '0000-00-00', 'Bozza');

-- --------------------------------------------------------

--
-- Struttura della tabella `pack`
--

CREATE TABLE `pack` (
  `ID_pack` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(200) DEFAULT NULL,
  `Prezzo` double(10,2) DEFAULT NULL,
  `img_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `pack`
--

INSERT INTO `pack` (`ID_pack`, `Nome`, `Descrizione`, `Prezzo`, `img_link`) VALUES
(1, 'Basic', '<li>Infotainment plus package</li>\r\n<li>Assistance package plus</li>', 0.00, 'images/Basic.png'),
(2, 'Business', '<li>16\" alloy wheels</li>\r\n<li>LED front headlights</li>\r\n<li>10.25\" virtual cockpit</li>\r\n<li>Speed limiter with provision for Adaptive Cruise Control via FoD</li>\r\n<li>Lane departure warning</li>', 10000.00, 'images/Buisness.png'),
(3, 'Sport', '<li>18\" alloy wheels</li>\r\n<li>S line aesthetics</li>\r\n<li>LED headlights with LED rear lights</li>\r\n<li>Sporty setup</li>\r\n<li>Plus Air Conditioning Package</li>', 25000.00, 'images/Sports.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `paese`
--

CREATE TABLE `paese` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dump dei dati per la tabella `paese`
--

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

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`ID_utente`, `Nome`, `Cognome`, `Email`, `Password`, `Data_Nascita`) VALUES
(2, 'Gabriele', 'Sarnelli', 'gabry@gmail.com', 'dd2ef34530de7e5bef22a05e7e5dd178', '2005-02-18'),
(3, 'Alessandro', 'Ricci', 'alessandro.ricci@gmail.com', '42ac3d8548e7c9e6c344f5863d790bc4', '2005-05-26');

-- --------------------------------------------------------

--
-- Struttura della tabella `veicolo`
--

CREATE TABLE `veicolo` (
  `ID_auto` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` varchar(1000) DEFAULT NULL,
  `Posti` int(11) DEFAULT NULL,
  `Anno` year(4) DEFAULT NULL,
  `Prezzo` decimal(15,2) DEFAULT NULL,
  `ImgLink` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `veicolo`
--

INSERT INTO `veicolo` (`ID_auto`, `Nome`, `Descrizione`, `Posti`, `Anno`, `Prezzo`, `ImgLink`) VALUES
(1, 'Blazer X6', 'Picture an affordable car designed for practicality and efficiency. With its compact size and fuel-efficient engine, it\'s perfect for navigating city streets and commuting with ease. Despite its affordability, it doesn\'t compromise on safety or comfort, making it an ideal choice for budget-conscious drivers.', 4, '2023', 22999.99, 'images/x6.png'),
(2, 'Blazer JETX', 'Imagine a sleek sports car with bold design and exceptional performance. With its sharp lines and powerful engine, it embodies the thrill of speed and the passion for driving. Every curve is an opportunity for pure adrenaline, while cutting-edge technology ensures uncompromising control.', 2, '2024', 274999.99, 'images/jetx.png'),
(3, 'Blazer FF18', 'Imagine an elegant cabriolet, designed to captivate wherever it roams. With sleek lines and a sense of freedom, it\'s more than just a car—it\'s an icon of style and liberation.', 4, '2024', 79999.99, 'images/FF18.png'),
(4, 'Blazer MOOD', 'Imagine a versatile SUV, combining rugged capability with refined elegance. With advanced technology and superior performance, it offers a seamless driving experience, whether you\'re navigating city streets or exploring off-road trails. Comfortable, capable, and stylish, it\'s the perfect companion for all your adventures.', 4, '2022', 33999.99, 'images/mood.png'),
(5, 'Blazer G-Wagon', 'Imagine a versatile 7-seater station wagon, perfect for modern families. With its spacious interior and flexible seating, it effortlessly accommodates both passengers and cargo. Whether it\'s daily commutes or weekend getaways, this vehicle ensures comfort and convenience for every adventure.', 7, '2023', 53999.99, 'images/G-Wagon.png');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `assistenza`
--
ALTER TABLE `assistenza`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `assistenza_conf`
--
ALTER TABLE `assistenza_conf`
  ADD KEY `ID_conf` (`ID_conf`),
  ADD KEY `ID_opt` (`ID_assistenza`) USING BTREE;

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
  ADD KEY `id_conf_fk` (`ID_conf`),
  ADD KEY `id_optional_fk` (`ID_optional`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_veicolo` (`ID_veicolo`),
  ADD KEY `ID_conf` (`ID_conf`),
  ADD KEY `ID_utente` (`ID_utente`);

--
-- Indici per le tabelle `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`ID_pack`);

--
-- Indici per le tabelle `paese`
--
ALTER TABLE `paese`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT per la tabella `assistenza`
--
ALTER TABLE `assistenza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `ID_conf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `pack`
--
ALTER TABLE `pack`
  MODIFY `ID_pack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `paese`
--
ALTER TABLE `paese`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `ID_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `veicolo`
--
ALTER TABLE `veicolo`
  MODIFY `ID_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
