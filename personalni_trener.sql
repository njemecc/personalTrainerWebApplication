-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.5-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for personalni_trener
CREATE DATABASE IF NOT EXISTS `personalni_trener` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `personalni_trener`;

-- Dumping structure for table personalni_trener.anketa
CREATE TABLE IF NOT EXISTS `anketa` (
  `email_korisnika` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_telefona` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tezina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `datum_rodjenja` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `da_li_je_zaposlen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `radno_vreme` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cilj_treniranja` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cilj_smatrate_bitnim` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ranije_trenirali` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `imali_trenera` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `prestali_zbog` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `spavate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `zdravstveni_problem` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ocekivanja_programa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `broj_obroka_dnevno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `kakav_tip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nesto_dodatno` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anketa_id` int(10) NOT NULL AUTO_INCREMENT,
  `da_li_je_platio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kada_je_popunio_anketu` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`anketa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table personalni_trener.registrovani
CREATE TABLE IF NOT EXISTS `registrovani` (
  `registrovani_id` int(10) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`registrovani_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
