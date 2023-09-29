-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 juin 2021 à 10:46
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ludo`
--
 /*CREATE DATABASE IF NOT EXISTS 'ludo';
 use'ludo';*/
-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `datera` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `datera`) VALUES
(1, '2021-06-16'),
(6, '2021-06-16'),
(7, '2021-06-17'),
(8, '2021-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `booking_user`
--

DROP TABLE IF EXISTS `booking_user`;
CREATE TABLE IF NOT EXISTS `booking_user` (
  `id` int NOT NULL DEFAULT '0',
  `dateru` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `booking_user`
--

INSERT INTO `booking_user` (`id`, `dateru`) VALUES
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(1, '2021-06-16'),
(6, '2021-06-16'),
(8, '2021-06-17'),
(7, '2021-06-17'),
(8, '2021-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `diponibilité` int NOT NULL DEFAULT '1',
  `p_key_word` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `prix` int NOT NULL DEFAULT '0',
  `age` int NOT NULL,
  `nbjoueur` int NOT NULL,
  `activité` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `type`, `diponibilité`, `p_key_word`, `titre`, `description`, `img`, `prix`, `age`, `nbjoueur`, `activité`, `nature`) VALUES
(7, 'AVENTURE', 1, 'GTA', 'GTA', 'jeu', 'GTA.webp', 67, 30, 1, 'DYNAMIQUE', 'indivuduel'),
(8, 'AVENTURE', 1, 'Madagascar', 'Madagascar', 'Madagascar est une qui suit la logique du film Madagascar', 'Madagascar.webp', 44, 12, 1, 'calme', 'Individuel');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `annee` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `loisirs` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf16 COLLATE utf16_swedish_ci NOT NULL,
  `adress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `annee`, `loisirs`, `motdepasse`, `img`, `adress`) VALUES
(4, 'Eben', 'Lassem', '1234', 'Voyage', '1234', 'logo.PNG', '16 BD CHARLES NICOLLE'),
(5, 'Eben', 'Lassem', '1234', 'Voyage', '1234', 'logo.PNG', '16 BD CHARLES NICOLLE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
