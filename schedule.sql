-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2023 at 03:12 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idclasse` varchar(10) NOT NULL,
  `niveau` varchar(10) NOT NULL,
  PRIMARY KEY (`idclasse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`idclasse`, `niveau`) VALUES
('N-L1 IG G1', 'L1 IG G1'),
('N-L1 IG G2', 'L1 IG G2'),
('N-L1 IG G3', 'L1 IG G3');

-- --------------------------------------------------------

--
-- Table structure for table `emploi_du_temps`
--

DROP TABLE IF EXISTS `emploi_du_temps`;
CREATE TABLE IF NOT EXISTS `emploi_du_temps` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idsalle` int NOT NULL,
  `design_salle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idprof` varchar(20) NOT NULL,
  `idclasse` varchar(10) NOT NULL,
  `cours` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idsalle` (`idsalle`),
  KEY `fk_idprof` (`idprof`),
  KEY `fk_idclasse` (`idclasse`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emploi_du_temps`
--

INSERT INTO `emploi_du_temps` (`id`, `idsalle`, `design_salle`, `idprof`, `idclasse`, `cours`, `date`) VALUES
(19, 1, '', 'P-003', 'N-L1 IG G3', 'Python (Théorique)', '2023-04-11 19:53:00'),
(20, 1, '', 'P-001', 'N-L1 IG G3', 'Routage IP', '2023-04-12 19:54:00'),
(21, 2, '', 'P-002', 'N-L1 IG G3', 'D-XHTML', '2023-04-24 20:33:00'),
(22, 1, '', 'P-003', 'N-L1 IG G1', 'BAR', '2023-04-28 20:39:00'),
(23, 2, '', 'P-002', 'N-L1 IG G1', 'GTO', '2023-04-28 20:51:00'),
(30, 4, 'S-003', 'P-003', 'N-L1 IG G2', 'BDR', '2023-04-20 21:32:00'),
(32, 1, 'S-001', 'P-001', 'N-L1 IG G3', 'DBR', '2023-04-11 06:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `idprof` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `grade` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idprof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`idprof`, `nom`, `prenom`, `grade`) VALUES
('P-001', 'RAKOTO', 'Benjamima', 'Professeur Titulaire'),
('P-002', 'RAKOTONIRINA', 'Fifi', 'Doctorant en Informatique'),
('P-003', 'Benjamin', 'Franklin', 'Assistant d\'enseignement Supérieur et de Recherche');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `idsalle` int NOT NULL AUTO_INCREMENT,
  `design` varchar(20) NOT NULL,
  `occupation` varchar(10) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`idsalle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`idsalle`, `design`, `occupation`) VALUES
(1, 'S-001', 'non'),
(2, 'S-002', 'non'),
(4, 'S-003', 'non');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emploi_du_temps`
--
ALTER TABLE `emploi_du_temps`
  ADD CONSTRAINT `fk_idclasse` FOREIGN KEY (`idclasse`) REFERENCES `classe` (`idclasse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idprof` FOREIGN KEY (`idprof`) REFERENCES `professeur` (`idprof`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idsalle` FOREIGN KEY (`idsalle`) REFERENCES `salle` (`idsalle`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
