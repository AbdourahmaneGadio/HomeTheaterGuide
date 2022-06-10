-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 20 mai 2022 à 12:06
-- Version du serveur : 10.3.34-MariaDB-0+deb10u1
-- Version de PHP : 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `homeCinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `enceintes`
--

CREATE TABLE `enceintes` (
  `image` varchar(256) NOT NULL,
  `marque` varchar(256) NOT NULL,
  `modele` varchar(256) NOT NULL,
  `prix` float(11,0) NOT NULL,
  `couleur` varchar(127) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enceintes`
--

INSERT INTO `enceintes` (`image`, `marque`, `modele`, `prix`, `couleur`, `type`) VALUES
('aria-906.jpg', 'Focal', 'Aria-906', 900, 'Blanc', 'Bibliothèques'),
('s803-black.jpg', 'Jamo', 'S803', 180, 'Noir', 'Bibliothèques'),
('ma_bronze_50_pair_white.jpg', 'Monitor-Audio', 'Bronze-50', 400, 'Blanc', 'Bibliothèques'),
('s803-white.jpg', 'Jamo', 'S803', 180, 'Blanc', 'Bibliothèques'),
('s803-walnut.jpg', 'Jamo', 'S803', 180, 'Noyer', 'Bibliothèques');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
