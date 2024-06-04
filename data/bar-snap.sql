-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database barsnap
CREATE DATABASE IF NOT EXISTS `barsnap` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `barsnap`;

-- Dump della struttura di tabella barsnap.cibi
CREATE TABLE IF NOT EXISTS `cibi` (
  `id_cibo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(50) DEFAULT NULL,
  `foto` char(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `descrizione_txt` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `prezzo` float DEFAULT NULL,
  `glutenfree` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_cibo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella barsnap.cibi: ~3 rows (circa)
INSERT INTO `cibi` (`id_cibo`, `nome`, `foto`, `descrizione_txt`, `prezzo`, `glutenfree`) VALUES
	(1, 'brioche', 'croissants.jpg', 'Gli ingredienti principali sono la farina, le uova, il burro, il lievito e lo strutto animale. Per la farcitura le creme più usate sono la confettura, la crema pasticcera e la crema di cioccolato.\r\n\r\nLa brioscia cû tuppu è una variante tipica siciliana, servita spesso in accompagnamento alla granita o riempite con gelato.\r\n\r\nIl termine brioche viene usato nelle regioni dell\'Italia settentrionale per indicare il cornetto', 1.5, 'si'),
	(2, 'cookie', 'croissants.jpg', '', 3, 'no'),
	(3, 'fetta di torta', 'croissants.jpg', '', 3, 'si');

-- Dump della struttura di tabella barsnap.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` char(50) NOT NULL,
  `password` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nome` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cognome` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `provincia` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `indirizzo` char(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `socio` int(11) DEFAULT NULL,
  `data_iscrizione` date DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='info utente';

-- Dump dei dati della tabella barsnap.utenti: ~3 rows (circa)
INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`, `email`, `telefono`, `provincia`, `indirizzo`, `socio`, `data_iscrizione`) VALUES
	('ale_pue', '1234', 'alessandra', 'puertas', 'alessandra.puertas@l', '3333333333', 'arcore', 'via adda', NULL, NULL),
	('pancho', '5555', 'pancho', 'oe', 'wjcn', '7777', 'ewkjbd', 'wkjdb', NULL, '2024-06-03'),
	('seremyele', '5678', 'serena', 'myele', 'serenea.miele@liceob', '1234567890', 'vimercate', 'via adda', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
