-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 avr. 2020 à 08:00
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `cine`
--
CREATE DATABASE IF NOT EXISTS `cine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cine`;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`),
  KEY `tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `mail`, `tel`, `mdp`, `role`) VALUES
(1, 'test', 'test', 'test@test.fr', '0612345678', '098f6bcd4621d373cade4e832627b4f6', 'admin'),
(2, 'aa', 'aa', 'aa@gmail.com', '0700000000', '4124bc0a9335c27f086f24ba207a4912', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `message`) VALUES
(1, 'test', 'test@test.fr', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `nb_pers` int(11) NOT NULL,
  `date_prevue` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nom` (`nom`),
  KEY `fk_tel` (`tel`),
  KEY `fk_num_salle` (`num_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `tel`, `num_salle`, `prix`, `nb_pers`, `date_prevue`) VALUES
(8, 'aa', '0700000000', 2, 40, 4, '2020-04-29'),
(9, 'aa', '0700000000', 4, 48, 5, '2020-05-11'),
(11, 'test', '0612345678', 2, 56, 6, '2020-04-28');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `film` text NOT NULL,
  `description` text NOT NULL,
  `3D` char(3) NOT NULL,
  `nb_places` int(11) UNSIGNED NOT NULL,
  `places_restantes` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `num`, `film`, `description`, `3D`, `nb_places`, `places_restantes`) VALUES
(1, 1, 'L\'appel de la foret', 'Le chien Buck vivait depuis quatre ans dans la famille du juge Miller, au Sud des États-Unis, quand il s\'est vu impliqué, malgré lui, dans l\'aventure de la ruée vers l\'or du Nord.', 'non', 50, 50),
(2, 3, 'Sonic le film', 'Sonic et Tom unissent leurs forces pour tenter d\'empêcher le terrible Dr. Robotnik de capturer Sonic, ce dernier souhaitant utiliser son immense pouvoir pour dominer le monde.', 'non', 100, 90),
(3, 4, 'De Gaulle', 'La guerre s\'intensifie, l\'armée française s\'effondre, les Allemands seront bientôt à Paris. La panique gagne le gouvernement qui envisage d\'accepter la défaite. Un homme, Charles de Gaulle, fraîchement promu général, veut infléchir le cours de l\'Histoire.', 'Non', 50, 50),
(4, 7, 'En Avant Disney', 'Dans la banlieue d\'un univers imaginaire, deux frères elfes se lancent dans une quête extraordinaire pour découvrir s\'il reste encore un peu de magie dans le monde.', 'Oui', 70, 65);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_nom` FOREIGN KEY (`nom`) REFERENCES `compte` (`nom`),
  ADD CONSTRAINT `fk_num_salle` FOREIGN KEY (`num_salle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `fk_tel` FOREIGN KEY (`tel`) REFERENCES `compte` (`tel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
