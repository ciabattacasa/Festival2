-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 04, 2026 alle 13:03
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
(6, 'ciabattacasa@gmail.com', 'Venerdì, Sabato', 2, 80.00, 'VINO-2026-BA55CA', '2026-05-04 12:40:16'),
(7, 'spazzabilly@gmail.com', 'Venerdì, Sabato, Domenica', 2, 120.00, 'VINO-2026-E81360', '2026-05-04 12:48:38'),
(8, 'spazzabilly@gmail.com', 'Venerdì, Sabato, Domenica', 2, 120.00, 'VINO-2026-04BC14', '2026-05-04 12:49:53'),
(9, 'spazzabilly@gmail.com', 'Venerdì, Sabato, Domenica', 2, 120.00, 'VINO-2026-587954', '2026-05-04 12:50:14'),
(10, 'abc@gmail.com', 'Venerdì', 1, 25.00, 'VINO-2026-220817', '2026-05-04 12:55:43');

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
(45, 'Chardonnay Bourgogne', 'Bianco minerale e raffinato', 32.00, 'chardonnay.jpg', 'Vini Francesi', 3),
(46, 'Meursault Blanc', 'Grande bianco della Côte de Beaune', 65.00, 'meursault.jpg', 'Vini Francesi', 0),
(47, 'Chablis Premier Cru', 'Bianco fresco e sapido della Borgogna', 42.00, 'chablis.jpg', 'Vini Francesi', 0),
(48, 'Chianti Classico DOCG', 'Rosso toscano tradizionale ed equilibrato', 30.00, 'chianti.jpg', 'Vini Italiani', 2),
(49, 'Brunello di Montalcino', 'Grande rosso strutturato e longevo', 75.00, 'brunello.jpg', 'Vini Italiani', 4),
(50, 'Vino Nobile di Montepulciano', 'Elegante rosso della Toscana', 45.00, 'montepulciano.jpg', 'Vini Italiani', 0),
(51, 'Bolgheri Rosso', 'Blend moderno della costa toscana', 55.00, 'bolgheri.jpg', 'Vini Italiani', 0),
(52, 'Calice Festival', 'Calice ufficiale Tchin-Cin inciso', 12.00, 'calice.jpg', 'Gadget', 0),
(53, 'T-shirt Festival', 'Maglietta edizione limitata 2026', 18.00, 'tshirt.jpg', 'Gadget', 0),
(54, 'Cappellino Tchin-Cin', 'Cappellino brandizzato festival', 15.00, 'cappellino.jpg', 'Gadget', 0),
(55, 'Shopper Bag Eco', 'Borsa ecologica riutilizzabile', 10.00, 'shopper.jpg', 'Gadget', 0),
(56, 'Kit Sommelier', 'Kit completo degustazione vino', 40.00, 'kit.jpg', 'Esperienze', 2),
(57, 'Ticket Masterclass', 'Lezione con sommelier esperti', 75.00, 'masterclass.jpg', 'Esperienze', 0),
(58, 'VIP Wine Lounge', 'Accesso area esclusiva VIP', 80.00, 'vip.jpg', 'Esperienze', 0),
(59, 'Tour Cantina Partner', 'Visita guidata in cantina', 65.00, 'tour.jpg', 'Esperienze', 0);

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
(9, 'abc@gmail.com', 56, 2, 'prenotato');

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
('ciabattacasa@gmail.com', 'pollo', 'ciabatta', 'casa'),
('ciaociao@gmail.com', 'zxcvb', 'Sim', 'Rac'),
('raciti.simona@gmail.com', 'asdfg', 'Simona', 'Raciti'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT per la tabella `shop_prenotazioni`
--
ALTER TABLE `shop_prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
