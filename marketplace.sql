-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 28, 2021 alle 12:14
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `annunci`
--

CREATE TABLE `annunci` (
  `idAnnuncio` int(11) NOT NULL,
  `NomeKite` varchar(50) NOT NULL,
  `AnnoAquisto` date NOT NULL,
  `Descrizione` varchar(255) NOT NULL,
  `Costo` int(11) NOT NULL,
  `KsUtenti` int(11) NOT NULL,
  `KsMarca` int(11) NOT NULL,
  `KsCategoria` int(11) DEFAULT NULL,
  `misura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `annunci`
--

INSERT INTO `annunci` (`idAnnuncio`, `NomeKite`, `AnnoAquisto`, `Descrizione`, `Costo`, `KsUtenti`, `KsMarca`, `KsCategoria`, `misura`) VALUES
(2, 'rpx', '2021-03-23', 'Come', 1010, 1, 1, 1, 12),
(3, 'asylum', '2021-03-18', 'un po graffiata', 350, 1, 1, 2, 141),
(4, 'vegas', '2021-06-09', 'vecchio', 500, 1, 1, 1, 13),
(5, 'muta ride engine lunga', '2021-06-15', 'come nuova', 300, 4, 2, 3, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `idCarrello` int(11) NOT NULL,
  `Datas` date NOT NULL,
  `KsUtenti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`idCarrello`, `Datas`, `KsUtenti`) VALUES
(1, '2021-06-26', 3),
(2, '2021-06-26', 4),
(3, '2021-06-27', 9),
(4, '2021-06-28', 10),
(5, '2021-06-28', 11),
(6, '2021-06-28', 12),
(7, '2021-06-28', 13);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello_annunci`
--

CREATE TABLE `carrello_annunci` (
  `idCarrelloAnnunci` int(11) NOT NULL,
  `KsCarrello` int(11) DEFAULT NULL,
  `KsAnnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `Tipo`) VALUES
(1, 'KITES'),
(2, 'SURFBOARDS'),
(3, 'MUTE'),
(4, 'TRAPEZI');

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE `citta` (
  `idCitta` int(11) NOT NULL,
  `nomeCitta` varchar(100) NOT NULL,
  `cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `citta`
--

INSERT INTO `citta` (`idCitta`, `nomeCitta`, `cap`) VALUES
(1, 'ROCCAGORGA', 4010),
(3, 'LATINA', 4100);

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `idImmagine` int(11) NOT NULL,
  `Percorso` varchar(255) NOT NULL,
  `KsAnnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagini`
--

INSERT INTO `immagini` (`idImmagine`, `Percorso`, `KsAnnuncio`) VALUES
(2, '1.png', 2),
(3, '2.jpg', 2),
(4, 'asylum.jpg', 3),
(5, '0.jpg', 4),
(6, '00.jpg', 4),
(7, '000.jpg', 4),
(8, 'muta.jpg', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `indirizzi`
--

CREATE TABLE `indirizzi` (
  `idindirizzi` int(11) NOT NULL,
  `Via` varchar(40) NOT NULL,
  `numeroCivico` int(11) NOT NULL,
  `KsCitta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `indirizzi`
--

INSERT INTO `indirizzi` (`idindirizzi`, `Via`, `numeroCivico`, `KsCitta`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 1),
(3, 'genova', 13, 3),
(4, 'yyyyyyyyyyyyyyyyyyyyyy', 56, 1),
(5, 'kkkkkkkkkkkkkkkkkkk', 56, 3),
(6, 'genova', 11, 3),
(7, 'genova', 11, 3),
(8, 'genova', 12, 3),
(9, 'genova', 12, 3),
(10, 'genova', 12, 3),
(11, 'kkkkkkkkkkkkkkkkkkk', 78, 1),
(12, 'genova', 13, 3),
(13, 'genova', 12, 3),
(14, 'genova', 12, 3),
(15, 'genova', 12, 3),
(16, 'genova', 12, 3),
(17, 'genova', 13, 3),
(18, 'genova', 13, 3),
(19, 'genova', 13, 3),
(20, 'kkkkkkkkkkkkkkkkk', 23, 3),
(21, 'kkkkkkkkkkkkkkkkkkkk', 23, 1),
(22, 'kkkkkkkkkkkkkkk', 45, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `Marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `marca`
--

INSERT INTO `marca` (`idMarca`, `Marca`) VALUES
(1, 'SLINGSHOT'),
(2, 'DUOTONE'),
(3, 'NORTH'),
(4, 'ELEVEIGHT'),
(5, 'CABRINHA');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `idUtente` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Cognome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `PasswordUtente` varchar(100) NOT NULL,
  `ConfermaPassword` varchar(100) NOT NULL,
  `KsIndirizzi` int(11) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idUtente`, `Nome`, `Cognome`, `Email`, `Telefono`, `PasswordUtente`, `ConfermaPassword`, `KsIndirizzi`, `Token`, `Status`) VALUES
(1, 'Luca', 'Cupellaro', 'luca@gmail.com', '2134658795', '$2y$10$pQihEEDizUL/9qZ60AZF5uzUgobBkFZ.CriCi30XtY0SMr.XlM8Li', '$2y$10$Oug7lKN2RnVryN6.kpbCfuPVsOyc/QGWp/ExQq4yU2ealDAyqyWmi', 1, '', 'Inactive'),
(3, 'manmeet', 'moudgill', 'manmeetmoudgill76@gmail.com', '3214578412', '$2y$10$jR.k53Yxon0A.HKQ/wjel.BE6Rc5Q.ua5nTj63Z8C1zoeZgA7pOJ.', '$2y$10$YLu/ryX3bWGktnRuvWGREO9/DScoqkDpbod.ySGklC17UahdqyA5.', 3, '', 'Inactive'),
(4, 'Marco', 'Cupellaro', 'lucacupellaro7@gmail.com', '8795462317', '$2y$10$VV50kxg.sSRmJwNJwdxL/.mSabDdKad/d0rN6pXesyByrZGOfAIbC', '$2y$10$y.Y0t4GVoz0B61OtfWveAOTfa7tSyKujsrW5plgDImu/vsIqgedoO', 1, '', 'Inactive'),
(9, 'manmeet', 'moudgill', 'manmeetmoudgill123456789@gmail.com', '7896541231', '$2y$10$wVHJrmcT04Jvk9Y.LzhV9unFTxGWsky0ZekS7MsG6ckHbn6vQ/v/e', '$2y$10$Cx9jgtN76wAL3sMgMf7XJ.b9yvN2XqvsF/i7e07Y3SpcVGkU4GHX6', 3, '172754afbf215be210fa1e0b72fc4f', 'Inactive'),
(10, 'manmeet', 'moudgill', 'manmeetmoudgill77@gmail.com', '32458741522', '$2y$10$wKGdOczKwjuMwlmDO0GTn.OYZDzxFDbIT8pV9nZapks6cujvbJ6fG', '$2y$10$xvlOPEIT6KH8uH/V6gzmSO5uoYZ1KvuzCmNUEKzRg5tBk4AMQdtrW', 3, '3d0d9dccc9d9d0aaf3d44d0b53268b', 'Inactive'),
(11, 'nikita', 'Cupellaro', 'lucacupellarour@gmail.com', '1235468970', '$2y$10$GSp1zyrOAaQaOOi8xVo.D.LPugPxixKULYs4xtmllydH5qix4sSS.', '$2y$10$a4TI3omyqyPA4xBylnb5Rex5xFSGi/MzBlqiPLzw.c/3KiLPRXSnm', 3, 'c4e384489c254d85ee8b82a45647cd', 'Active'),
(12, 'dan', 'cotesta', 'lericettedicarolina@gmail.com', '1234568970', '$2y$10$xxIDhNTZnG6rmtxLanDA9O1FHyrtSxTNsjDAkT2XS0KDAcIQtRPxO', '$2y$10$2Dg1WecZZwwsxU/qZQCLyOA6qzJklH3ltNt9qrjkpm0YoqiQijcqO', 1, '47dc07f7c8f8f0ea52297514c1e425', 'Inactive'),
(13, 'marc', 'maggaga', 'luca.cupellaro02@gmail.com', '1234567890', '$2y$10$086k8UDKdHybUmL9ZWoDlufpy/DDKk.3yHf3VwXbKKESQS8JjbbFq', '$2y$10$Q01l4EnZG3LqxXOgFdndW.o77dJ5GrgGxctuvgLTNoBPByCCcVQ/i', 1, '2c6c73b230bd671594c533cab55191', 'Active');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `annunci`
--
ALTER TABLE `annunci`
  ADD PRIMARY KEY (`idAnnuncio`),
  ADD KEY `KsUtenti` (`KsUtenti`),
  ADD KEY `KsMarca` (`KsMarca`),
  ADD KEY `KsCategoria` (`KsCategoria`);
ALTER TABLE `annunci` ADD FULLTEXT KEY `NomeKite` (`NomeKite`,`Descrizione`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCarrello`),
  ADD KEY `KsUtenti` (`KsUtenti`);

--
-- Indici per le tabelle `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  ADD PRIMARY KEY (`idCarrelloAnnunci`),
  ADD KEY `KsCarrello` (`KsCarrello`),
  ADD KEY `KsAnnuncio` (`KsAnnuncio`);

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);
ALTER TABLE `categorie` ADD FULLTEXT KEY `Tipo` (`Tipo`);

--
-- Indici per le tabelle `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`idCitta`);

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`idImmagine`),
  ADD KEY `KsAnnuncio` (`KsAnnuncio`);

--
-- Indici per le tabelle `indirizzi`
--
ALTER TABLE `indirizzi`
  ADD PRIMARY KEY (`idindirizzi`),
  ADD KEY `KsCitta` (`KsCitta`);

--
-- Indici per le tabelle `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);
ALTER TABLE `marca` ADD FULLTEXT KEY `Marca` (`Marca`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`idUtente`),
  ADD KEY `KsIndirizzi` (`KsIndirizzi`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `annunci`
--
ALTER TABLE `annunci`
  MODIFY `idAnnuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCarrello` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  MODIFY `idCarrelloAnnunci` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `citta`
--
ALTER TABLE `citta`
  MODIFY `idCitta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `idImmagine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `indirizzi`
--
ALTER TABLE `indirizzi`
  MODIFY `idindirizzi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT per la tabella `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `idUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `annunci`
--
ALTER TABLE `annunci`
  ADD CONSTRAINT `annunci_ibfk_1` FOREIGN KEY (`KsUtenti`) REFERENCES `utenti` (`idUtente`),
  ADD CONSTRAINT `annunci_ibfk_2` FOREIGN KEY (`KsMarca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `annunci_ibfk_3` FOREIGN KEY (`KsCategoria`) REFERENCES `categorie` (`idCategorie`);

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`KsUtenti`) REFERENCES `utenti` (`idUtente`);

--
-- Limiti per la tabella `carrello_annunci`
--
ALTER TABLE `carrello_annunci`
  ADD CONSTRAINT `carrello_annunci_ibfk_1` FOREIGN KEY (`KsCarrello`) REFERENCES `carrello` (`idCarrello`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `carrello_annunci_ibfk_2` FOREIGN KEY (`KsAnnuncio`) REFERENCES `annunci` (`idAnnuncio`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `immagini`
--
ALTER TABLE `immagini`
  ADD CONSTRAINT `immagini_ibfk_1` FOREIGN KEY (`KsAnnuncio`) REFERENCES `annunci` (`idAnnuncio`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `indirizzi`
--
ALTER TABLE `indirizzi`
  ADD CONSTRAINT `indirizzi_ibfk_1` FOREIGN KEY (`KsCitta`) REFERENCES `citta` (`idCitta`);

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `utenti_ibfk_1` FOREIGN KEY (`KsIndirizzi`) REFERENCES `indirizzi` (`idindirizzi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
