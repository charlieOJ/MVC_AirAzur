-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 03 Octobre 2015 à 11:49
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `airalliance`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(30) DEFAULT NULL,
  `prenomClient` varchar(30) DEFAULT NULL,
  `mailClient` varchar(30) DEFAULT NULL,
  `adresseClient` varchar(40) DEFAULT NULL,
  `cpClient` varchar(5) DEFAULT NULL,
  `villeClient` varchar(30) DEFAULT NULL,
  `telephoneClient` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `mailClient`, `adresseClient`, `cpClient`, `villeClient`, `telephoneClient`) VALUES
(1, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(2, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(3, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(4, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(5, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(6, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(7, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(8, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.0944161485.'),
(9, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.0944161485.'),
(10, '..', '..', '..', '..', '..', '..', '..'),
(11, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.'),
(12, '..', '..', '..', '..', '..', '..', '..'),
(13, '.JANSEN.', '.OphÃ©lie.', '.ophe.jansen@wagmail.fr.', '.20 rue des closeaux.', '.7712', '.VILLENOY.', '.+33644161485.');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) DEFAULT NULL,
  `numVol` varchar(7) DEFAULT NULL,
  `paiement` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `idClient` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE IF NOT EXISTS `vols` (
  `numVol` varchar(7) NOT NULL,
  `aeroportDepart` varchar(40) NOT NULL,
  `aeroportArrivee` varchar(40) NOT NULL,
  `dateDepart` datetime NOT NULL,
  `dateArrivee` datetime NOT NULL,
  `places` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vols`
--

INSERT INTO `vols` (`numVol`, `aeroportDepart`, `aeroportArrivee`, `dateDepart`, `dateArrivee`, `places`, `prix`) VALUES
('AIR5007', 'Paris CDG -FRANCE', 'Dakar -SENEGAL', '2011-04-22 12:00:00', '2011-04-22 17:00:00', 120, 560),
('AIR5108', 'Paris CDG - FRANCE', 'Dakar - SENEGAL', '2011-04-23 13:00:00', '2011-04-23 18:20:00', 120, 600);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
