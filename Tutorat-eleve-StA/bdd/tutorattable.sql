-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 15 déc. 2021 à 16:51
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
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `myselect` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dateactuelle` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tutorattable`
--

INSERT INTO `tutorattable` (`nom`, `prenom`, `classe`, `contact`, `myselect`, `comment`, `dateactuelle`, `id`) VALUES
('Fabre', 'Alban', 'TeA', 'r\'t', 'Maths', '<script > alert (Hack) </script >', '0000-00-00', 11),
('Fabre\';--', 'Alban', 'TeA', 'hty', 'Maths', '<script > alert (Hack) </script >', '0000-00-00', 10),
('', '', '', '', 'English', '<script > alert Hack </script >', '0000-00-00', 9),
('Fabre', 'Alban', 'tge', 'hty', 'Physics', 'gdgd', '2021-12-10', 12),
('Fabre', 'Alban', 'TeA', 'r\'t', 'HGGSP', 'iooy', '2021-12-15', 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
