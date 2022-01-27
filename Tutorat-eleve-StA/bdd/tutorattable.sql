-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 19 déc. 2021 à 17:02
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tutorat`
--

-- --------------------------------------------------------

--
-- Structure de la table `tutorattable`
--

DROP TABLE IF EXISTS `tutorattable`;
CREATE TABLE IF NOT EXISTS `tutorattable` (
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` varchar(255) NOT NULL,
  `myselect` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dateform` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tutorattable`
--

INSERT INTO `tutorattable` (`lastname`, `firstname`, `class`, `contact`, `myselect`, `comment`, `dateform`, `id`) VALUES
('Fabre', 'Alban', 'TeA', 'r\'t', 'Maths', '<script > alert (Hack) </script >', '0000-00-00', 11),
('Fabre\';--', 'Alban', 'TeA', 'hty', 'Maths', '<script > alert (Hack) </script >', '0000-00-00', 10),
('', '', '', '', 'English', '<script > alert Hack </script >', '0000-00-00', 9),
('Fabre', 'Alban', 'tge', 'hty', 'Physics', 'gdgd', '2021-12-10', 12),
('Fabre', 'Alban', 'TeA', 'r\'t', 'HGGSP', 'tracteur', '2021-12-15', 13),
('jean', 'pierre', '1erA', '@jennine', 'svt', 'je sais pas', '2021-12-19', 14),
('jeannot', 'ht', 'jt', 'jtfr', 'mathematiques', 'j\'adore les frites c\'est vraiment super bon', '2021-12-19', 15),
('', '', '', '', 'anglais', 'jytyjrtjftyikuytkyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2021-12-19', 16),
('Fabre', 'Alban', 'TermA', '@alban.fb', 'physique-chimie', 'j\'aime les pommes de terre', '2021-12-19', 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
