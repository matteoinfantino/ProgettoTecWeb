-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Lug 08, 2019 alle 09:09
-- Versione del server: 5.6.34-log
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecweb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `anagrafica`
--

CREATE TABLE `anagrafica` (
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `indirizzo` varchar(30) NOT NULL,
  `nascita` date NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `anagrafica`
--

INSERT INTO `anagrafica` (`nome`, `cognome`, `citta`, `indirizzo`, `nascita`, `mail`) VALUES
('Admin', 'Admin', 'Padova', 'Via Paolotti', '1997-12-12', 'admin@admin.it'),
('User', 'User', 'Padova', 'Via Pinco Pallo', '1997-12-12', 'user@user.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `corsi_id` int(7) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `descrizione` varchar(800) NOT NULL,
  `immagine` varchar(200) NOT NULL,
  `descrizione_long` varchar(2000) NOT NULL,
  `alt` varchar(20) NOT NULL,
  `ora` time NOT NULL,
  `giorno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`corsi_id`, `titolo`, `descrizione`, `immagine`, `descrizione_long`, `alt`, `ora`, `giorno`) VALUES
(37, 'FitBoxe', 'Se sei stressato e hai voglia di sfogare la tensione della giornata &egrave; l\'allenamento perfetto. ', '../IMG/FitBoxe2.png', 'Se sei stressato e hai voglia di sfogare la tensione della giornata &egrave; l\'allenamento perfetto. Un esercizio che combina cardio e tono, assemblando pugni, calci e gomitate a ritmo di musica, perfetto per uomini, donne, grandi e piccini. Un allenamento straordinario che rafforza il corpo e svuota la mente!', 'Logo FitBoxe', '19:00:00', 'lunedi'),
(38, 'G.A.G.', 'Un allenamento su base musicale molto amato, semplice da seguire, adatto a tutte le et&agrave; e tutte le esigenze.', '../IMG/gag2.png', 'Il nostro <abbr title=\'Gambe Addominali Glutei\'> G.A.G.</abbr> , ovvero Gambe Addominali e Glutei (e non solo) &egrave; un allenamento su base musicale molto amato, semplice da seguire, adatto a tutte le et&agrave; e tutte le esigenze. Attraverso l\'utilizzo di piccoli attrezzi come <span xml:lang=\"en\">fitball</span>, elastici e <span xml:lang=\"en\">slowfit</span> permette di tonificare le zone critiche. Il nostro obiettivo? rassodare e tonificare con il sorriso!', 'Logo GAG', '19:30:00', 'martedi'),
(39, 'Pound', 'Bacchette da batterista alla mano e musica a tutto volume, il nuovo <span xml:lang=\"en\">workout</span> che permette di rassodare e bruciare calorie simulando il <span xml:lang=\"en\">drumming</span> dei batteristi.', '../IMG/pound2.png', 'Si tratta di una delle novit&agrave; del mondo del <span xml:lang=\"en\">fitness</span>, direttamente dagli Stati Uniti e approvato da Madonna! Lo abbiamo collaudato anche noi ed &egrave; irresistibile! bacchette da batterista alla mano e musica a tutto volume, il <span xml:lang=\"en\">pound</span> &egrave; il nuovo <span xml:lang=\"en\">workout</span> che permette di rassodare e bruciare calorie simulando il <span xml:lang=\"en\">drumming</span> dei batteristi. Quando comincia la musica non potrai pi&ugrave; fermarti, fare centinaia di <span xml:lang=\"en\">squat</span> e AFFONDI non ha mai avuto questo ritmo! Ti basta lo spirito da <span xml:lang=\"en\">rockstar</span> e il divertimento &egrave; assicurato!', 'Logo Pound', '20:00:00', 'mercoledi'),
(40, 'Funktional', 'Un <span xml:lang=\"en\">workout</span> unico, pensato per chi vuole trovare il giusto mixtra il lavoro cardio-coreografico (<span xml:lang=\"en\">Funk</span>) e l\'allenamento funzionale (<span xml:lang=\"en\">Funktional</span>)', '../IMG/FunkTional2.png', 'Il solo e l\'unico: <span xml:lang=\"en\">funktional</span> &egrave; un <span xml:lang=\"en\">workout</span> unico, pensato per chi vuole trovare il giusto mix tra il lavoro cardio-coreografico (<span xml:lang=\"en\">funk</span>) e l\'allenamento funzionale (<span xml:lang=\"en\">functional</span>): un accostamento super <span xml:lang=\"en\">fun</span>! Con le nostre divertentissime coreografie puoi tonificare e rassodare attraverso un intenso lavoro <span xml:lang=\"en\">total body</span> e goderti qualche passo di danza, ovviamente a ritmo di musica! ', 'Logo Funktional', '19:30:00', 'giovedi'),
(41, 'Step &amp; Total Body', 'Per le vere amanti dello <span xml:lang=\"en\">stop</span>, l\'immancabile corso di <span xml:lang=\"en\">step &amp; total body</span>.', '../IMG/step2.png', 'Per le vere amanti dello <span xml:lang=\"en\">step</span>, l\'immancabile corso di <span xml:lang=\"en\">step &amp; total body</span>. Un allenamento indicato per tutti coloro che amano il <span xml:lang=\"en\">fitness</span> e che desiderano praticare una combinazione tra allenamento di resistenza e forza, a tempo di musica!', 'Logo Step', '19:00:00', 'venerdi'),
(42, 'Smart Toning', 'Il corso di tonificazione per chi ama avere ottimi risultati con il minimo sforzo', '../IMG/smarttoning2.png', 'Il corso di tonificazione per chi ama avere ottimi risultati con il minimo sforzo, abbina un allenamento mirato e intelligente con affondi, <span xml:lang=\"en\">squat</span>, addominali e piegamenti alla dinamicit&agrave; dell\'attivit&agrave; con base musicale. Particolarmente indicato per persone sedentarie che sentono il bisogno di mettere in moto i propri muscoli.', 'Logo Smart Toning', '18:15:00', 'mercoledi'),
(43, 'Ginnastica Dolce', 'Questo corso &egrave; particolarmente indicato per chi vuole continuare a mantenersi in forma senza dover strafare.', '../IMG/ginnasticadolce2.png', 'Questo corso &egrave; dedicato alle persone della terza et&agrave;, dove si svolgono una serie di esercizi dedicati all\'allungamento muscolare e al rafforzamento posturale, particolarmente indicato per chi vuole continuare a mantenersi in forma senza dover strafare. La particolare cura dei circuiti di allenamento garantisce che i muscoli mantengano la loro integrit&agrave; e diano sostegno in tutti i momenti della giornata. Inoltre questo corso prevede delle sessioni apposite per persone che si sono sottoposte a interventi chirurgici e desiderano recuperare con calma dall\'infortunio', 'Logo Ginnastica', '10:00:00', 'venerdi');

-- --------------------------------------------------------

--
-- Struttura della tabella `galleria`
--

CREATE TABLE `galleria` (
  `immagine` varchar(200) NOT NULL,
  `id` int(7) NOT NULL,
  `alt` varchar(30) NOT NULL,
  `didascalia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `galleria`
--

INSERT INTO `galleria` (`immagine`, `id`, `alt`, `didascalia`) VALUES
('../IMG/7519.jpg', 14, 'Scorcio sala pesi', 'Vista dall\'alto sala pesi'),
('../IMG/7762.jpg', 15, 'Scorcio sala cardio', 'Vista dall\'alto sala cardio'),
('../IMG/7764.jpg', 16, 'Macchinari cardio', 'Dettaglio dei macchinari cardio'),
('../IMG/7766.jpg', 17, 'Sala pesi', 'Prospettiva della sala pesi'),
('../IMG/7787.jpg', 18, 'Soffitto con lampade', 'Dettaglio del soffitto in una sala corsi'),
('../IMG/7799.jpg', 19, 'sacchi fitboxe', 'Sacchi per il corso di FitBoxe'),
('../IMG/7814.jpg', 20, 'terrazza con sdraio', 'Terrazza estiva'),
('../IMG/7840.jpg', 21, 'step e bicicletta', 'Particolare di step e bicicletta');

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `immagine` varchar(200) NOT NULL,
  `id` int(8) NOT NULL,
  `titolo` varchar(50) NOT NULL,
  `testo` varchar(1000) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`immagine`, `id`, `titolo`, `testo`, `data`, `alt`) VALUES
('../IMG/autunno.jpg', 14, 'Post motivazionale', 'Le previsioni non promettono bene, la tua voglia di allenarti si.', '2019-07-06 16:12:58', 'Donna con scarpe'),
('../IMG/volantino smart toning.png', 15, 'Comincia un nuovo corso!', 'Confermato! Dal 10 ottobre comincia un nuovo corso di tonificazione! Ogni MERCOLED&igrave; e VENERD&igrave; dalle 18.15 <span xml:lang=\"en\">smart toning</span>: Vi aspettiamo!', '2019-07-08 08:52:53', 'volantino'),
('../IMG/inizio smart toning.jpg', 16, 'Vi aspettiamo al nuovo corso!', 'Mercoled&igrave; 10 comincia il nuovo corso <span xml:lang=\"en\">SMART TONING</span>, Ore 18:15! Vi aspettiamo!', '2019-07-08 08:53:27', 'Donna allenata'),
('../IMG/halloween.jpg', 17, 'Novit&agrave; per halloween', 'Aggiornamento orari della settimana: mercoled&igrave; 31 ottobre (prefestivo) chiusura ore 21:00; gioved&igrave; 1 novembre (festivo) la palestra rimarr&agrave; chiusa; Venerd&igrave; e sabato la palestra sar&agrave; aperta con gli orari regolari.', '2019-07-08 08:59:11', 'zucca halloween'),
('../IMG/natale.jpg', 18, 'Buon Natale!', 'Come anticipato, la palestra resta aperta anche durante il periodo natalizio. Piccole variazioni riguardanti solo i giorni pre-festivi e festivi.', '2019-07-03 13:53:31', 'Biglietto auguri'),
('../IMG/capodanno.jpg', 19, 'Pronti per capodanno', 'Buoni propositi per l\'anno nuovo: rimettersi in forma con Energya <span xml:lang=\"en\">club</span>! Ti aspettiamo.', '2019-07-03 13:55:53', 'fuochi artificio');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `corso` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `id` int(8) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`corso`, `data`, `ora`, `id`, `email`) VALUES
('Prova 2', '2019-06-10', '11:11:00', 8, 'lucagava1232@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `mail` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`mail`, `password`) VALUES
('admin@admin.it', '25d55ad283aa400af464c76d713c07ad'),
('user@user.it', '25d55ad283aa400af464c76d713c07ad');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `anagrafica`
--
ALTER TABLE `anagrafica`
  ADD PRIMARY KEY (`mail`);

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`corsi_id`);

--
-- Indici per le tabelle `galleria`
--
ALTER TABLE `galleria`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `corsi_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT per la tabella `galleria`
--
ALTER TABLE `galleria`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
