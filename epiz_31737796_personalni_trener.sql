-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.byetcluster.com
-- Generation Time: Sep 01, 2022 at 03:02 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31737796_personalni_trener`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `email_korisnika` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_telefona` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tezina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `datum_rodjenja` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `da_li_je_zaposlen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `radno_vreme` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cilj_treniranja` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `cilj_smatrate_bitnim` text COLLATE utf8mb4_unicode_ci DEFAULT '\'0\'',
  `ranije_trenirali` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `imali_trenera` text COLLATE utf8mb4_unicode_ci DEFAULT '\'0\'',
  `prestali_zbog` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `spavate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `zdravstveni_problem` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ocekivanja_programa` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `broj_obroka_dnevno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `kakav_tip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nesto_dodatno` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anketa_id` int(10) NOT NULL,
  `kada_je_popunio_anketu` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`email_korisnika`, `broj_telefona`, `visina`, `tezina`, `datum_rodjenja`, `da_li_je_zaposlen`, `radno_vreme`, `cilj_treniranja`, `cilj_smatrate_bitnim`, `ranije_trenirali`, `imali_trenera`, `prestali_zbog`, `spavate`, `zdravstveni_problem`, `ocekivanja_programa`, `broj_obroka_dnevno`, `kakav_tip`, `nesto_dodatno`, `anketa_id`, `kada_je_popunio_anketu`) VALUES
('adasd@gmail.com', '321321', '22', '22', '2022-08-11', 'Student', '123', '213', '22', 'ne', '22', '22', '22', '22', '22', '22', '22', '22', 25, NULL),
('novimail@gmail.com', '22', '22', '22', '2022-08-11', 'Student', '22', '22', '22', 'ne', '22', '22', '22', '22', '22', '22', '22', '22', 26, NULL),
('registrujem@gmail.com', '22', '22', '22', '2022-09-02', 'Nesto Drugo', '22', '22', '22', 'ne', '22', '22', '22', '22', '22', '22', '22', '22', 27, NULL),
('geni@gmail.com', '22', '22', '22', '2022-08-23', 'Nesto Drugo', '22', '22', '22', 'ne', '22', '22', '22', '22', '22', '22', '22', '22', 28, NULL),
('pada@gmail.com', '22', 'Uu', 'Jsj', '2022-08-20', 'Zaposlen', '21', '22', 'zbog riba', 'ne', 'Uu', 'Yy', '22', 'Dd', 'Aa', 'Uu', 'Uu', 'Ss', 29, NULL),
('mgligorijevic013@gmail.com', '06554358', '183', '83', '1999-03-10', 'Student', '', 'zelim da smrsam 10 kila', 'debeo sam', 'da', '3 meseca', 'povredio sam nogu na treningu', '6', 'nemam nista', 'zeleo bih da smrsam 10 kila za 2 meseca', '3', 'sedentaran', 'studiram i radim part time posao nemam puno vremena preko dana za trening mogao bih jedino uvece da treniram izmedju 8 i 10\r\n', 30, NULL),
('ddd@gmail.com', '065326184', '186', '90', '1999-03-28', 'Zaposlen', '8-16', 'Da dodam miÅ¡iÄ‡e', 'Zelim da izgledam privlacno i da se osetim jace na', 'ne', '3 godine nisam imao trenera', 'Nedostatak motivacije', '9 sati', 'Problem sa jetrom', 'Ocekujem da cu postici rezultate u najkracem roku', '4', 'Aktivan', 'Smrde mi noge', 31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrovani`
--

CREATE TABLE `registrovani` (
  `registrovani_id` int(10) NOT NULL,
  `ime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `da_li_je_platio` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`registrovani_id`, `ime`, `prezime`, `email`, `password`, `text`, `da_li_je_platio`) VALUES
(64, 'jasam', 'ja', 'novimail@gmail.com', '123', '222', '1'),
(65, 'registrujeem', 'see', 'registration@gmail.com', '123', '22', ''),
(66, 'geni', 'geni', 'geni@gmail.com', '123', '222', ''),
(67, 'Registee', 'Rrra', 'pada@gmail.com', '123', '123', ''),
(68, 'marko', 'gligorijevic', 'mgligorijevic013@gmail.com', 'marko123', '', ''),
(69, 'Trlababalan', 'Gligorijevic', 'gligorijevicm013@gmail.com', 'marko123', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`anketa_id`) USING BTREE;

--
-- Indexes for table `registrovani`
--
ALTER TABLE `registrovani`
  ADD PRIMARY KEY (`registrovani_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `anketa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `registrovani`
--
ALTER TABLE `registrovani`
  MODIFY `registrovani_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
