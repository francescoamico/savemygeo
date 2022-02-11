-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:1234
-- Creato il: Gen 24, 2022 alle 17:59
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geodb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dati`
--

CREATE TABLE `dati` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) COLLATE latin1_bin NOT NULL,
  `Latitudine` varchar(30) COLLATE latin1_bin NOT NULL,
  `Longitudine` varchar(30) COLLATE latin1_bin NOT NULL,
  `Codice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dump dei dati per la tabella `dati`
--

INSERT INTO `dati` (`ID`, `Username`, `Latitudine`, `Longitudine`, `Codice`) VALUES
(159, 'ciccio0501', '38.02217687914588', '12.525618355789291', 15);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Codice` int(11) NOT NULL,
  `Nome` varchar(30) COLLATE latin1_bin NOT NULL,
  `Cognome` varchar(30) COLLATE latin1_bin NOT NULL,
  `Email` varchar(20) COLLATE latin1_bin NOT NULL,
  `Username` char(32) COLLATE latin1_bin NOT NULL,
  `Password` char(32) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Codice`, `Nome`, `Cognome`, `Email`, `Username`, `Password`) VALUES
(15, 'rl7H1xHyuCyKs', 'rl2lSfNpQa74A', 'rl7H1xHyuCyKs', 'ciccio0501', '76d80224611fc919a5d54f0ff9fba446'),
(19, 'rlfAq3.lSIRxQ', 'rlqsIUI2EHSAo', 'rluTyTXnnCnew', 'lele01', '24113791d2218cb84c9f0462e91596ef'),
(20, 'rlLkXLyKZNyS6', 'rlWmNxhUmpDi6', 'rlhBEjT4BE9mo', 'gigino', '4eff0335928a2d0e92f38ea9bb56d72b');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dati`
--
ALTER TABLE `dati`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dati`
--
ALTER TABLE `dati`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
