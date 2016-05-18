-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Client: 127.4.194.2:3306
-- Généré le: Lun 16 Mai 2016 à 21:36
-- Version du serveur: 5.5.45
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `checkmymenu`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `idM` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idC`),
  KEY `idM` (`idM`,`idUser`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`idC`, `content`, `idM`, `idUser`) VALUES
(1, 'Tres bonne pizza !', 1, 27),
(2, 'Miam !', 1, 26),
(7, 'Good', 2, 27),
(9, 'Very Nice', 3, 26),
(10, 'Not bad !', 4, 26),
(12, 'Nice !', 2, 28),
(13, 'Pizza de ouf ', 1, 27);

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `idL` int(11) NOT NULL AUTO_INCREMENT,
  `counter` int(11) NOT NULL,
  `idM` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idL`),
  KEY `counter` (`counter`,`idM`),
  KEY `idM` (`idM`,`idUser`),
  KEY `idU` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `like`
--

INSERT INTO `like` (`idL`, `counter`, `idM`, `idUser`) VALUES
(1, 0, 2, 28),
(2, 0, 1, 27);

--
-- Déclencheurs `like`
--
DROP TRIGGER IF EXISTS `trig_like`;
DELIMITER //
CREATE TRIGGER `trig_like` AFTER INSERT ON `like`
 FOR EACH ROW BEGIN
	UPDATE meal SET likeCounter = likeCounter + 1 WHERE idM = NEW.idM;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `contentNoon` varchar(200) CHARACTER SET utf8 NOT NULL,
  `idR` int(11) NOT NULL,
  `likeCounter` bigint(20) NOT NULL,
  PRIMARY KEY (`idM`),
  KEY `idR` (`idR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `meal`
--

INSERT INTO `meal` (`idM`, `contentNoon`, `idR`, `likeCounter`) VALUES
(1, 'Pizza: chevre-miel', 1, 1),
(2, 'Entree: salade de riz\r\nPlat: Steak frites', 2, 1),
(3, 'Plat unique: Entrecote\r\nPotatoes', 3, 0),
(4, 'Entree: Croque-monsieur\r\nPlat: tagliatelles au saumon', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `statusNoon` varchar(50) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `room`
--

INSERT INTO `room` (`idR`, `name`, `statusNoon`) VALUES
(1, 'Pizzeria', 'Open'),
(2, 'Grill', 'Open'),
(3, 'America', 'Open'),
(4, 'Africa', 'Open');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `firstName`, `lastName`, `email`, `password`, `admin`) VALUES
(26, 'admin', 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(27, 'user', 'user', 'user@user', '12dea96fec20593566ab75692c9949596833adc9', 0),
(28, 'user2', 'user2', 'user2@user2', 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_commentToMeal` FOREIGN KEY (`idM`) REFERENCES `meal` (`idM`),
  ADD CONSTRAINT `fk_commentToUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `fk_likeToMeal` FOREIGN KEY (`idM`) REFERENCES `meal` (`idM`),
  ADD CONSTRAINT `fk_likeToUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `meal`
--
ALTER TABLE `meal`
  ADD CONSTRAINT `fk_mealToRoom` FOREIGN KEY (`idR`) REFERENCES `room` (`idR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
