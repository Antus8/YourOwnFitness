-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 02, 2021 alle 09:29
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourownfitnessdb`
--
-- --------------------------------------------------------
INSERT INTO `allenamento` (`nome`, `durata`, `tipo`) VALUES
('dimagrimento 1', 3, 'cardio'),
('dimagrimento 2', 3, 'cardio'),
('forma 1', 3, 'pesi'),
('forma 2', 3, 'pesi'),
('legpocalypse', 3, 'corpo libero'),
('potenziamento 1', 3, 'pesi'),
('potenziamento 2', 3, 'pesi'),
('scheda 1', 3, 'pesi'),
('scheda 10', 3, 'corpo libero'),
('scheda 2', 3, 'pesi'),
('scheda 3', 3, 'cardio'),
('scheda 4', 3, 'cardio'),
('scheda 5', 3, 'pesi'),
('scheda 6', 3, 'pesi'),
('scheda 7', 3, 'pesi'),
('scheda 8', 3, 'corpo libero'),
('scheda 9', 3, 'corpo libero');

-- --------------------------------------------------------
INSERT INTO `attrezzo` (`id`, `nome`, `peso`, `descrizione`) VALUES
(1, 'bench press', 10, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(2, 'bench press', 20, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(3, 'bench press', 30, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(4, 'bench press', 40, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(5, 'bench press', 50, 'Panca piana, controllare la discesa del bilanciere fino a toccare il petto e poi spingere fino alla massima estensione delle braccia'),
(6, 'push press', 10, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(7, 'push press', 20, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(8, 'push press', 30, 'In piedi, controllare la discesa del bilanciere fino a toccare le spalle poi spingere fino alla massima estensione delle braccia'),
(9, 'bent row', 10, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(10, 'bent row', 20, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(11, 'bent row', 30, 'Partire dal basso, Sollevare il bilanciere fino a portarlo all altezza del petto'),
(12, 'Curl bilanciere', 10, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(13, 'Curl bilanciere', 20, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(14, 'Curl bilanciere', 30, 'In piedi, Sollevare il bilanciere con la spinta dei bicipiti'),
(15, 'Alzate laterali', 10, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(16, 'Alzate laterali', 20, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(17, 'Alzate laterali', 30, 'Partire con i pesi in posizione laterali e sollevarli fino all altezza delle spalle'),
(18, 'Leg press', 10, 'Contrarre i muscoli della gamba per la spinta'),
(19, 'Alzate posterio', 10, 'Alzate posteriori'),
(20, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 45 gradi'),
(21, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 35 gradi'),
(22, 'Croci manubri', 10, 'Panca piana, aprire le braccia a formare una croce e poi chiudere le braccia in posizione verticale'),
(23, 'Rematore manubr', 10, 'Un braccio alla volta, Posizione orizzontale, sollevare il manubrio lateralmente fino a formare un angolo di 90 gradi con il corpo'),
(24, 'Pull down corda', 10, 'Spingere energicamente la corda'),
(25, 'Alzate laterali', 10, 'Un braccio alla volta, partendo dalla posizione distesa contrarre il bicipite fino alla completa contrazione'),
(26, 'Panca inclinata', 10, 'Spinta petto con panca inclinata 45 gradi'),
(27, 'Leg press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(28, 'Military press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(29, 'Chest press', 10, 'Spinta petto con panca inclinata 45 gradi'),
(30, 'Dragon flag', 10, 'Spinta petto'),
(31, 'Spinte panca 90', 10, 'Spinta petto con panca inclinata 90 gradi'),
(32, 'Spinte 45', 10, 'Spinta petto con panca inclinata 45 gradi'),
(33, 'Leg extension', 10, 'Piegare la gamba fino a completa contrazione'),
(34, 'French press', 10, 'Spinta french');
-- --------------------------------------------------------

INSERT INTO `esercizio` (`nome`, `descrizione`, `peso`) VALUES
('Affondi', 'Passo lungo, scendere mantenendo la schiena dritta', 'Body'),
('Aperture laterali', 'Aperture laterali braccio', 'Body'),
('Bear crawl', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Estensioni busto', 'Estensioni busto in posizione prona', 'Body'),
('Estensioni mani', 'Estensioni mani e polsi da in ginocchio', 'Body'),
('Flessioni busto', 'Flessioni busto in avanti', 'Body'),
('Good morning', 'Piegare le braccia fino a raggiungere la posizione', 'Body'),
('Jumping jack', 'Salti alternati con gambe aperte e chiuse', 'Body'),
('Piegamenti', 'Piegamenti classici con presa larghezza spalle', 'Body'),
('Piegamenti plus', 'Piegamenti con presa larghezza spalle', 'Body'),
('Piegamenti stretti', 'Piegamenti classici con presa stretta', 'Body'),
('Piegate in avanti', 'Spingere il corpo in avanti tenendo la gamba di di', 'Body'),
('Push up', 'Piegamenti classici con piedi su sedia', 'Body'),
('Skip alto', 'Skip alto sul posto', 'Body'),
('Skip basso', 'Skip basso sul posto', 'Body'),
('Squat', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Squat bulgaro', 'Piegare le gambe fino a raggiungere la posizione s', 'Body'),
('Stretching braccia', 'Stendere e ripiegare le braccia', 'Body'),
('Stretching polpacci', 'Stendere e ripiegare le gambe', 'Body'),
('Stretching quadricip', 'Stendere e ripiegare le gambe', 'Body'),
('Trazioni presa dritt', 'Piegare le braccia per sollevare il proprio corpo ', 'Body'),
('Trazioni presa inver', 'Piegare le braccia per sollevare il proprio corpo ', 'Body');

-- --------------------------------------------------------
INSERT INTO `allenamenti_attrezzi` (`nome_allenamento`, `id_attrezzo`, `serie`, `ripetizioni`, `week`) VALUES
('dimagrimento 1', 1, 3, 12, 1),
('dimagrimento 1', 3, 3, 12, 1),
('dimagrimento 1', 4, 3, 12, 1),
('dimagrimento 1', 5, 3, 15, 2),
('dimagrimento 1', 7, 3, 15, 2),
('dimagrimento 1', 8, 3, 12, 1),
('dimagrimento 1', 9, 3, 15, 2),
('dimagrimento 2', 1, 3, 12, 1),
('dimagrimento 2', 2, 3, 15, 2),
('dimagrimento 2', 7, 3, 12, 1),
('dimagrimento 2', 10, 3, 15, 2),
('dimagrimento 2', 17, 3, 15, 2),
('dimagrimento 2', 20, 3, 12, 1),
('forma 1', 6, 3, 12, 1),
('forma 1', 13, 3, 12, 1),
('forma 1', 14, 3, 12, 1),
('forma 1', 17, 3, 15, 2),
('forma 1', 21, 3, 15, 2),
('forma 1', 25, 3, 15, 2),
('forma 2', 6, 3, 8, 1),
('forma 2', 13, 3, 8, 1),
('forma 2', 14, 3, 8, 1),
('forma 2', 17, 3, 10, 2),
('forma 2', 21, 3, 10, 2),
('forma 2', 25, 3, 10, 2),
('potenziamento 1', 3, 3, 15, 2),
('potenziamento 1', 5, 3, 12, 1),
('potenziamento 1', 7, 3, 15, 2),
('potenziamento 1', 10, 3, 15, 2),
('potenziamento 1', 13, 3, 15, 2),
('potenziamento 1', 17, 3, 12, 1),
('potenziamento 1', 18, 3, 12, 1),
('potenziamento 1', 20, 3, 12, 1),
('potenziamento 1', 22, 3, 12, 1),
('potenziamento 1', 23, 3, 15, 2),
('potenziamento 1', 25, 3, 15, 2),
('potenziamento 2', 3, 3, 15, 2),
('potenziamento 2', 5, 3, 12, 1),
('potenziamento 2', 7, 3, 15, 2),
('potenziamento 2', 18, 3, 12, 1),
('potenziamento 2', 22, 3, 12, 1),
('potenziamento 2', 23, 3, 15, 2),
('scheda 1', 6, 3, 8, 1),
('scheda 1', 13, 3, 8, 1),
('scheda 1', 14, 3, 8, 1),
('scheda 1', 17, 3, 10, 2),
('scheda 1', 21, 3, 10, 2),
('scheda 1', 25, 3, 10, 2),
('scheda 2', 9, 3, 8, 1),
('scheda 2', 11, 3, 8, 1),
('scheda 2', 15, 3, 8, 1),
('scheda 2', 16, 3, 10, 2),
('scheda 2', 23, 3, 10, 2),
('scheda 2', 24, 3, 10, 2),
('scheda 3', 3, 3, 15, 2),
('scheda 3', 5, 3, 12, 1),
('scheda 3', 7, 3, 15, 2),
('scheda 3', 18, 3, 12, 1),
('scheda 3', 22, 3, 12, 1),
('scheda 3', 23, 3, 15, 2),
('scheda 4', 3, 3, 15, 2),
('scheda 4', 7, 3, 15, 2),
('scheda 4', 9, 3, 12, 1),
('scheda 4', 12, 3, 12, 1),
('scheda 4', 14, 3, 12, 1),
('scheda 4', 23, 3, 15, 2),
('scheda 5', 9, 3, 8, 1),
('scheda 5', 11, 3, 8, 1),
('scheda 5', 15, 3, 8, 1),
('scheda 5', 16, 3, 10, 2),
('scheda 5', 23, 3, 10, 2),
('scheda 5', 24, 3, 10, 2),
('scheda 6', 3, 3, 15, 2),
('scheda 6', 7, 3, 15, 2),
('scheda 6', 9, 3, 12, 1),
('scheda 6', 12, 3, 12, 1),
('scheda 6', 14, 3, 12, 1),
('scheda 6', 23, 3, 15, 2),
('scheda 7', 2, 3, 12, 1),
('scheda 7', 3, 3, 15, 2),
('scheda 7', 4, 3, 12, 1),
('scheda 7', 13, 3, 15, 2),
('scheda 7', 17, 3, 15, 2),
('scheda 7', 19, 3, 12, 1);

-- --------------------------------------------------------
INSERT INTO `allenamenti_esercizi` (`nome_allenamento`, `nome_esercizio`, `serie`, `ripetizioni`, `week`) VALUES
('dimagrimento 1', 'Affondi', 3, 12, 1),
('dimagrimento 1', 'Aperture laterali', 3, 15, 2),
('dimagrimento 1', 'Piegamenti', 3, 15, 2),
('dimagrimento 1', 'Squat bulgaro', 3, 12, 1),
('dimagrimento 1', 'Stretching braccia', 3, 15, 2),
('dimagrimento 1', 'Trazioni presa dritt', 3, 12, 1),
('dimagrimento 2', 'Aperture laterali', 3, 12, 1),
('dimagrimento 2', 'Bear crawl', 3, 15, 2),
('dimagrimento 2', 'Piegamenti', 3, 12, 1),
('dimagrimento 2', 'Squat bulgaro', 3, 15, 2),
('dimagrimento 2', 'Stretching braccia', 3, 15, 2),
('dimagrimento 2', 'Trazioni presa inver', 3, 12, 1),
('forma 1', 'Affondi', 3, 15, 2),
('forma 1', 'Estensioni mani', 3, 12, 1),
('forma 1', 'Push up', 3, 15, 2),
('forma 1', 'Squat', 3, 15, 2),
('forma 1', 'Stretching braccia', 3, 12, 1),
('forma 1', 'Trazioni presa inver', 3, 12, 1),
('forma 2', 'Aperture laterali', 3, 8, 1),
('forma 2', 'Bear crawl', 3, 10, 2),
('forma 2', 'Squat', 3, 10, 2),
('forma 2', 'Squat bulgaro', 3, 8, 1),
('forma 2', 'Trazioni presa dritt', 3, 8, 1),
('forma 2', 'Trazioni presa inver', 3, 10, 2),
('legpocalypse', 'Affondi', 3, 12, 1),
('legpocalypse', 'Aperture laterali', 3, 15, 2),
('legpocalypse', 'Piegamenti', 3, 15, 2),
('legpocalypse', 'Skip alto', 3, 12, 1),
('legpocalypse', 'Squat', 3, 12, 1),
('legpocalypse', 'Squat bulgaro', 3, 15, 2),
('potenziamento 1', 'Affondi', 3, 15, 2),
('potenziamento 1', 'Aperture laterali', 3, 12, 1),
('potenziamento 1', 'Piegamenti plus', 3, 12, 1),
('potenziamento 1', 'Squat bulgaro', 3, 12, 1),
('potenziamento 1', 'Stretching braccia', 3, 15, 2),
('scheda 1', 'Affondi', 3, 10, 2),
('scheda 1', 'Aperture laterali', 3, 8, 1),
('scheda 1', 'Bear crawl', 3, 8, 1),
('scheda 1', 'Jumping jack', 3, 10, 2),
('scheda 1', 'Push up', 3, 10, 2),
('scheda 1', 'Trazioni presa inver', 3, 8, 1),
('scheda 10', 'Aperture laterali', 3, 12, 1),
('scheda 10', 'Bear crawl', 3, 12, 1),
('scheda 10', 'Piegamenti', 3, 12, 1),
('scheda 10', 'Piegamenti plus', 3, 15, 2),
('scheda 10', 'Stretching braccia', 3, 15, 2),
('scheda 10', 'Trazioni presa inver', 3, 15, 2),
('scheda 2', 'Aperture laterali', 3, 8, 1),
('scheda 2', 'Estensioni busto', 3, 10, 2),
('scheda 2', 'Flessioni busto', 3, 8, 1),
('scheda 2', 'Squat bulgaro', 3, 8, 1),
('scheda 2', 'Trazioni presa dritt', 3, 10, 2),
('scheda 2', 'Trazioni presa inver', 3, 10, 2),
('scheda 3', 'Aperture laterali', 3, 15, 2),
('scheda 3', 'Estensioni busto', 3, 12, 1),
('scheda 3', 'Jumping jack', 3, 15, 2),
('scheda 3', 'Squat bulgaro', 3, 12, 1),
('scheda 3', 'Stretching polpacci', 3, 15, 2),
('scheda 3', 'Trazioni presa dritt', 3, 12, 1),
('scheda 4', 'Affondi', 3, 15, 2),
('scheda 4', 'Estensioni busto', 3, 15, 2),
('scheda 4', 'Estensioni mani', 3, 12, 1),
('scheda 4', 'Piegamenti', 3, 12, 1),
('scheda 4', 'Stretching polpacci', 3, 15, 2),
('scheda 4', 'Trazioni presa dritt', 3, 12, 1),
('scheda 5', 'Affondi', 3, 10, 2),
('scheda 5', 'Estensioni busto', 3, 8, 1),
('scheda 5', 'Estensioni mani', 3, 8, 1),
('scheda 5', 'Squat bulgaro', 3, 8, 1),
('scheda 5', 'Trazioni presa dritt', 3, 10, 2),
('scheda 5', 'Trazioni presa inver', 3, 10, 2),
('scheda 6', 'Aperture laterali', 3, 12, 1),
('scheda 6', 'Bear crawl', 3, 15, 2),
('scheda 6', 'Flessioni busto', 3, 12, 1),
('scheda 6', 'Jumping jack', 3, 12, 1),
('scheda 6', 'Squat bulgaro', 3, 15, 2),
('scheda 6', 'Stretching polpacci', 3, 15, 2),
('scheda 7', 'Affondi', 3, 12, 1),
('scheda 7', 'Bear crawl', 3, 15, 2),
('scheda 7', 'Estensioni busto', 3, 15, 2),
('scheda 7', 'Flessioni busto', 3, 12, 1),
('scheda 7', 'Squat bulgaro', 3, 12, 1),
('scheda 7', 'Stretching polpacci', 3, 15, 2),
('scheda 8', 'Affondi', 3, 12, 1),
('scheda 8', 'Aperture laterali', 3, 12, 1),
('scheda 8', 'Bear crawl', 3, 12, 1),
('scheda 8', 'Piegamenti', 3, 15, 2),
('scheda 8', 'Stretching braccia', 3, 15, 2),
('scheda 8', 'Trazioni presa dritt', 3, 15, 2),
('scheda 9', 'Affondi', 3, 12, 1),
('scheda 9', 'Bear crawl', 3, 12, 1),
('scheda 9', 'Push up', 3, 15, 2),
('scheda 9', 'Stretching braccia', 3, 15, 2),
('scheda 9', 'Trazioni presa dritt', 3, 15, 2),
('scheda 9', 'Trazioni presa inver', 3, 12, 1);

-- --------------------------------------------------------
INSERT INTO `utente` (`email`, `password`, `nome`, `cognome`, `sesso`, `telefono`, `obiettivo`, `imc`, `freq_all`) VALUES
('antus.longo@gmail.com', 'antonello', 'Antonello', 'Longo', 'M', '3884460133', 'Potenziare', 18.5185, 5),
('io.antonello@live.it', 'ciao', 'Antonello', 'Longo', 'M', '3288235282', 'Potenziare', 18.5185, 5);