-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 03, 2026 alle 17:06
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
-- Database: `festivalshop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  `id_utente` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzo` decimal(10,2) DEFAULT NULL,
  `immagine` varchar(100) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `ordine` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `descrizione`, `prezzo`, `immagine`, `categoria`, `ordine`) VALUES
(44, 'Pinot Noir Bourgogne', 'Vino rosso elegante della Borgogna', 35.00, 'pinot_noir.jpg', 'Vini Francesi', 0),
(45, 'Chardonnay Bourgogne', 'Bianco minerale e raffinato', 32.00, 'chardonnay.jpg', 'Vini Francesi', 0),
(46, 'Meursault Blanc', 'Grande bianco della Côte de Beaune', 65.00, 'meursault.jpg', 'Vini Francesi', 0),
(47, 'Chablis Premier Cru', 'Bianco fresco e sapido della Borgogna', 42.00, 'chablis.jpg', 'Vini Francesi', 0),
(48, 'Chianti Classico DOCG', 'Rosso toscano tradizionale ed equilibrato', 30.00, 'chianti.jpg', 'Vini Italiani', 0),
(49, 'Brunello di Montalcino', 'Grande rosso strutturato e longevo', 75.00, 'brunello.jpg', 'Vini Italiani', 0),
(50, 'Vino Nobile di Montepulciano', 'Elegante rosso della Toscana', 45.00, 'montepulciano.jpg', 'Vini Italiani', 0),
(51, 'Bolgheri Rosso', 'Blend moderno della costa toscana', 55.00, 'bolgheri.jpg', 'Vini Italiani', 0),
(52, 'Calice Festival', 'Calice ufficiale Tchin-Cin inciso', 12.00, 'calice.jpg', 'Gadget', 0),
(53, 'T-shirt Festival', 'Maglietta edizione limitata 2026', 18.00, 'tshirt.jpg', 'Gadget', 0),
(54, 'Cappellino Tchin-Cin', 'Cappellino brandizzato festival', 15.00, 'cappellino.jpg', 'Gadget', 0),
(55, 'Shopper Bag Eco', 'Borsa ecologica riutilizzabile', 10.00, 'shopper.jpg', 'Gadget', 0),
(56, 'Kit Sommelier', 'Kit completo degustazione vino', 40.00, 'kit.jpg', 'Esperienze', 0),
(57, 'Ticket Masterclass', 'Lezione con sommelier esperti', 75.00, 'masterclass.jpg', 'Esperienze', 0),
(58, 'VIP Wine Lounge', 'Accesso area esclusiva VIP', 80.00, 'vip.jpg', 'Esperienze', 0),
(59, 'Tour Cantina Partner', 'Visita guidata in cantina', 65.00, 'tour.jpg', 'Esperienze', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prodotto` (`id_prodotto`),
  ADD KEY `id_utente` (`id_utente`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`id_prodotto`) REFERENCES `prodotti` (`id`),
  ADD CONSTRAINT `ordini_ibfk_2` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
