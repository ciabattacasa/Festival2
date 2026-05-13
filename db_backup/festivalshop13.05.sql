-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2026 alle 12:58
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
-- Struttura della tabella `biglietti_prenotazioni`
--

CREATE TABLE `biglietti_prenotazioni` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `giorni` text DEFAULT NULL,
  `quantita` int(11) DEFAULT NULL,
  `totale` decimal(10,2) DEFAULT NULL,
  `codice` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `biglietti_prenotazioni`
--

INSERT INTO `biglietti_prenotazioni` (`id`, `email`, `giorni`, `quantita`, `totale`, `codice`, `data`) VALUES
(4, 'abc@gmail.com', 'Venerdì, Sabato', 2, 80.00, 'VINO-2026-C52FB9', '2026-05-04 12:31:40'),
(5, 'abc@gmail.com', 'Venerdì, Sabato', 2, 80.00, 'VINO-2026-ACC931', '2026-05-04 12:35:32'),
(7, 'spazzabilly@gmail.com', 'Venerdì, Sabato, Domenica', 2, 120.00, 'VINO-2026-E81360', '2026-05-04 12:48:38'),
(10, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-220817', '2026-05-04 12:55:43'),
(13, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-BC47F9', '2026-05-12 12:29:10'),
(14, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-255626', '2026-05-12 12:30:47'),
(15, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-9B6340', '2026-05-12 12:32:03'),
(16, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-00E86F', '2026-05-12 12:38:08'),
(17, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-6E1B83', '2026-05-12 12:39:11'),
(18, 'abc@gmail.com', 'Sabato, Domenica', 1, 40.00, 'VINO-2026-344A60', '2026-05-12 12:39:59'),
(19, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-5A010C', '2026-05-12 16:59:56'),
(20, 'abc@gmail.com', 'Venerdì, Sabato', 1, 40.00, 'VINO-2026-FC8982', '2026-05-13 10:19:05'),
(21, 'abc@gmail.com', 'Venerdì, Sabato', 1, 40.00, 'VINO-2026-0ABAF2', '2026-05-13 10:24:29'),
(22, 'abc@gmail.com', 'Venerdì, Sabato', 1, 40.00, 'VINO-2026-C24809', '2026-05-13 10:28:57'),
(23, 'abc@gmail.com', 'Venerdì, Sabato', 1, 40.00, 'VINO-2026-1DB3A9', '2026-05-13 10:29:06'),
(24, 'abc@gmail.com', 'Sabato', 1, 25.00, 'VINO-2026-290363', '2026-05-13 10:29:19'),
(25, 'abc@gmail.com', 'Venerdì, Sabato', 2, 80.00, 'VINO-2026-E3228C', '2026-05-13 10:56:51'),
(26, 'abc@gmail.com', 'Domenica', 1, 25.00, 'VINO-2026-90E9F2', '2026-05-13 11:44:02'),
(27, 'abc@gmail.com', 'Sabato, Domenica', 3, 120.00, 'VINO-2026-817F8F', '2026-05-13 11:48:21'),
(28, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-3D29F0', '2026-05-13 12:30:36'),
(29, 'abc@gmail.com', 'Domenica', 2, 50.00, 'VINO-2026-8D9303', '2026-05-13 12:41:48'),
(30, 'abc@gmail.com', 'Domenica', 1, 25.00, 'VINO-2026-301437', '2026-05-13 12:42:05'),
(31, 'abc@gmail.com', 'Domenica', 2, 50.00, 'VINO-2026-7071F4', '2026-05-13 12:47:18'),
(32, 'abc@gmail.com', 'Domenica', 2, 50.00, 'VINO-2026-B721B8', '2026-05-13 12:48:28'),
(33, 'abc@gmail.com', 'Domenica', 2, 50.00, 'VINO-2026-7CB614', '2026-05-13 12:49:34'),
(34, 'abc@gmail.com', 'Sabato', 2, 50.00, 'VINO-2026-6E90EE', '2026-05-13 12:50:19'),
(35, 'abc@gmail.com', 'Sabato', 2, 50.00, 'VINO-2026-BBE9F2', '2026-05-13 12:51:33'),
(36, 'abc@gmail.com', 'Domenica', 3, 75.00, 'VINO-2026-E80422', '2026-05-13 12:51:47');

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
(44, 'Pinot Noir Bourgogne', 'Vino rosso elegante della Borgogna', 35.00, 'pinot_noir.jpg', 'Vini Francesi', 7),
(45, 'Chardonnay Bourgogne', 'Bianco minerale e raffinato', 32.00, 'chardonnay.jpg', 'Vini Francesi', 5),
(46, 'Meursault Blanc', 'Grande bianco della Côte de Beaune', 65.00, 'meursault.jpg', 'Vini Francesi', 0),
(47, 'Chablis Premier Cru', 'Bianco fresco e sapido della Borgogna', 42.00, 'chablis.jpg', 'Vini Francesi', 0),
(48, 'Chianti Classico DOCG', 'Rosso toscano tradizionale ed equilibrato', 30.00, 'chianti.jpg', 'Vini Italiani', 2),
(49, 'Brunello di Montalcino', 'Grande rosso strutturato e longevo', 75.00, 'brunello.jpg', 'Vini Italiani', 4),
(50, 'Rosso Montepulciano', 'Vino rosso Nobile della Toscana', 45.00, 'montepulciano.jpg', 'Vini Italiani', 0),
(51, 'Bolgheri Rosso', 'Blend moderno della costa toscana', 55.00, 'bolgheri.jpg', 'Vini Italiani', 0),
(52, 'Calice Festival', 'Calice ufficiale Tchin-Cin inciso', 12.00, 'calice.jpg', 'Gadget', 0),
(53, 'T-shirt Festival', 'Maglietta edizione limitata 2026', 18.00, 'tshirt.jpg', 'Gadget', 0),
(54, 'Cappellino Tchin-Cin', 'Cappellino brandizzato festival', 15.00, 'Cappellino bianco.png', 'Gadget', 0),
(55, 'Shopper Bag Eco', 'Borsa ecologica riutilizzabile', 10.00, 'Shop bag.png', 'Gadget', 1),
(56, 'Kit Sommelier', 'Kit completo degustazione vino', 40.00, 'kit.jpg', 'Esperienze', 2),
(57, 'Ticket Masterclass', 'Lezione con sommelier esperti', 75.00, 'Masterclass.jpg', 'Esperienze', 0),
(58, 'VIP Wine Lounge', 'Accesso all\'area esclusiva VIP', 80.00, 'vip.jpg', 'Esperienze', 7),
(59, 'Tour Cantina Partner', 'Visita guidata in una cantina storica', 65.00, 'tour.jpg', 'Esperienze', 9);

-- --------------------------------------------------------

--
-- Struttura della tabella `shop_prenotazioni`
--

CREATE TABLE `shop_prenotazioni` (
  `id` int(11) NOT NULL,
  `id_utente` varchar(255) DEFAULT NULL,
  `id_prodotto` int(11) DEFAULT NULL,
  `quantita` int(11) DEFAULT 1,
  `stato` varchar(50) DEFAULT 'prenotato'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `shop_prenotazioni`
--

INSERT INTO `shop_prenotazioni` (`id`, `id_utente`, `id_prodotto`, `quantita`, `stato`) VALUES
(1, 'ciaociao@gmail.com', 44, 1, 'prenotato'),
(2, 'ciabattacasa@gmail.com', 44, 1, 'prenotato'),
(3, 'ciabattacasa@gmail.com', 45, 1, 'prenotato'),
(4, 'ciaociao@gmail.com', 45, 1, 'prenotato'),
(5, 'ciaociao@gmail.com', 48, 2, 'prenotato'),
(6, 'ciaociao@gmail.com', 49, 1, 'prenotato'),
(7, 'ciaociao@gmail.com', 49, 3, 'prenotato'),
(8, 'ciabattacasa@gmail.com', 45, 1, 'prenotato'),
(9, 'abc@gmail.com', 56, 2, 'prenotato'),
(10, 'prova@gmail.com', 56, 2, 'in attesa'),
(11, 'prova@gmail.com', 53, 2, 'prenotato'),
(12, 'prova@gmail.com', 53, 2, 'prenotato'),
(13, 'prova@gmail.com', 53, 2, 'prenotato'),
(14, 'prova@gmail.com', 53, 2, 'prenotato'),
(15, 'prova@gmail.com', 58, 1, 'prenotato'),
(16, 'prova@gmail.com', 58, 1, 'prenotato'),
(17, 'prova@gmail.com', 47, 1, 'prenotato'),
(18, 'abc@gmail.com', 44, 1, 'prenotato'),
(19, 'abc@gmail.com', 44, 1, 'in attesa'),
(20, 'abc@gmail.com', 45, 2, 'prenotato'),
(21, 'abc@gmail.com', 45, 1, 'in attesa'),
(22, 'abc@gmail.com', 45, 1, 'in attesa'),
(23, 'abc@gmail.com', 45, 3, 'in attesa'),
(24, 'abc@gmail.com', 44, 4, 'prenotato'),
(25, 'abc@gmail.com', 50, 2, 'in attesa'),
(26, 'abc@gmail.com', 45, 1, 'in attesa'),
(27, 'abc@gmail.com', 45, 1, 'in attesa'),
(28, 'abc@gmail.com', 45, 3, 'in attesa'),
(29, 'abc@gmail.com', 48, 1, 'in attesa'),
(30, 'abc@gmail.com', 48, 1, 'in attesa'),
(31, 'abc@gmail.com', 56, 3, 'in attesa'),
(32, 'abc@gmail.com', 44, 2, 'in attesa'),
(33, 'abc@gmail.com', 55, 6, 'in attesa'),
(34, 'abc@gmail.com', 52, 3, 'in attesa'),
(35, 'abc@gmail.com', 48, 1, 'in attesa'),
(36, 'abc@gmail.com', 50, 1, 'in attesa'),
(37, 'abc@gmail.com', 58, 7, 'in attesa'),
(38, 'abc@gmail.com', 58, 7, 'in attesa'),
(39, 'abc@gmail.com', 55, 1, 'in attesa'),
(40, 'abc@gmail.com', 53, 1, 'in attesa'),
(41, 'abc@gmail.com', 55, 1, 'in attesa'),
(42, 'abc@gmail.com', 55, 1, 'in attesa'),
(43, 'abc@gmail.com', 59, 9, 'in attesa'),
(44, 'abc@gmail.com', 44, 1, 'in attesa'),
(45, 'abc@gmail.com', 44, 1, 'in attesa');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`email`, `password`, `name`, `surname`) VALUES
('abc@gmail.com', 'abc', 'Alfa', 'Beto'),
('ciaociao@gmail.com', 'zxcvb', 'Sim', 'Rac'),
('prova@gmail.com', 'prova', 'prova', 'prova'),
('simoraci@gmail.com', 'simoraci', 'Simo', 'Raci'),
('spazzabilly@gmail.com', 'cane', 'Spazza', 'Billy');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `biglietti_prenotazioni`
--
ALTER TABLE `biglietti_prenotazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `shop_prenotazioni`
--
ALTER TABLE `shop_prenotazioni`
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
-- AUTO_INCREMENT per la tabella `biglietti_prenotazioni`
--
ALTER TABLE `biglietti_prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT per la tabella `shop_prenotazioni`
--
ALTER TABLE `shop_prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
