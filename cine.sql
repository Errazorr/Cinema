-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 mai 2020 à 08:19
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

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `film` varchar(50) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkfilm` (`film`),
  KEY `fknom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `film`, `com`) VALUES
(1, 'aa', 'Sonic le film', 'Un excellent film, une belle animation, un bon sens de l\'humour'),
(2, 'test', 'Sonic le film', 'Très bon film, adapté pour tous, hâte de voir si il sort en 3D'),
(3, 'aa', 'En Avant Disney', 'Film très mignon, adapté pour tout fan de Disney');

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
  KEY `nom` (`nom`) USING BTREE,
  KEY `tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `mail`, `tel`, `mdp`, `role`) VALUES
(1, 'test', 'test', 'test@test.fr', '0612345678', '098f6bcd4621d373cade4e832627b4f6', 'admin'),
(2, 'aa', 'aa', 'aa@gmail.com', '0700000000', '4124bc0a9335c27f086f24ba207a4912', 'client'),
(3, 'test2', 'test2', 'test2@test2.fr', '0987654321', 'ad0234829205b9033196ba818f7a872b', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `tel`, `num_salle`, `prix`, `nb_pers`, `date_prevue`) VALUES
(2, 'aa', '0700000000', 2, 40, 4, '2020-04-29'),
(3, 'aa', '0700000000', 6, 48, 5, '2020-05-11'),
(4, 'test', '0612345678', 2, 56, 6, '2020-04-28');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `film` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `3D` char(3) NOT NULL,
  `nb_places` int(11) UNSIGNED NOT NULL,
  `places_restantes` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `film` (`film`),
  KEY `num` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `num`, `film`, `description`, `3D`, `nb_places`, `places_restantes`) VALUES
(1, 1, 'L\'appel de la foret', 'Le chien Buck vivait depuis quatre ans dans la famille du juge Miller, au Sud des États-Unis, quand il s\'est vu impliqué, malgré lui, dans l\'aventure de la ruée vers l\'or du Nord.', 'non', 50, 50),
(2, 2, 'Sonic le film', 'Sonic et Tom unissent leurs forces pour tenter d\'empêcher le terrible Dr. Robotnik de capturer Sonic, ce dernier souhaitant utiliser son immense pouvoir pour dominer le monde.', 'non', 100, 90),
(3, 5, 'De Gaulle', 'La guerre s\'intensifie, l\'armée française s\'effondre, les Allemands seront bientôt à Paris. La panique gagne le gouvernement qui envisage d\'accepter la défaite. Un homme, Charles de Gaulle, fraîchement promu général, veut infléchir le cours de l\'Histoire.', 'non', 50, 50),
(4, 6, 'En Avant Disney', 'Dans la banlieue d\'un univers imaginaire, deux frères elfes se lancent dans une quête extraordinaire pour découvrir s\'il reste encore un peu de magie dans le monde.', 'oui', 70, 65);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fkfilm` FOREIGN KEY (`film`) REFERENCES `salle` (`film`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fknom` FOREIGN KEY (`nom`) REFERENCES `reservation` (`nom`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_nom` FOREIGN KEY (`nom`) REFERENCES `compte` (`nom`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_num_salle` FOREIGN KEY (`num_salle`) REFERENCES `salle` (`num`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tel` FOREIGN KEY (`tel`) REFERENCES `compte` (`tel`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
