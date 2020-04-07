-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 déc. 2019 à 15:47
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(11) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `nom`) VALUES
(1, 'single'),
(2, 'double'),
(3, 'triple'),
(4, 'qaudtruple');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `ville` int(11) NOT NULL,
  `pays` int(11) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `etoile` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `ville`, `pays`, `adresse`, `codepostal`, `etoile`, `type`, `description`) VALUES
(72, 'laico', 1, 1, 'Hammamet Sud', 8050, 5, 1, 'Situe en face d\'une plage de la mer Mediterranee, ce complexe à l\'atmosphere décontractee se trouve à 2 km du parc d\'attractions Carthage Land, à 10 km de la kasbah, un fort datant du XIIIe siecle, ainsi qu\'a 43 km de l\'aeroport international d\'Enfidha-Hammamet.\r\nOffrant une vue sur la mer, la piscine ou le jardin, les chambres de style décontracté sont équipées du Wi-Fi gratuit, de la télévision par satellite et d\'un minibar.\r\n'),
(71, 'EL MOURADI ', 1, 1, 'Hammamet Sud', 8050, 5, 1, 'Surplombant la Méditerranée, cet hôtel raffiné se trouve à 3 minutes à pied du parc d\'attraction Carthageland d\'Hammamet et à 5 km des ruines antiques de Pupput.\r\n\r\nDécorées dans des couleurs vives, les chambres élégantes et climatisées sont équipées d\'un accès Wi-Fi gratuit, d\'une télévision à écran plat, d\'un bureau, d\'un coffre-fort, et d\'un balcon ou d\'un patio. Les suites incluent en outre un coin salon séparé. Un service de chambre est disponible 24h/24.'),
(3, 'Sultan', 1, 1, 'Lieux près de Hammamet', 8050, 4, 1, 'Le Sultan est situé en front de mer, au bord de l\'une des plus belles plages de Tunisie. A seulement 3 km du centre de Hammamet et de sa médina fortifiée datant du 9éme siècle.');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'tunise');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `adresse`, `tel`, `email`, `debut`, `fin`) VALUES
(29, 'a rserver', 'rserver', 'reserver', 121222, 'reserver@gmail.com', '2019-12-25', '2020-01-02'),
(26, 'egs', 'fgd', 'dfg', 1516, 'alisalah@gmail.com', '2020-01-01', '2020-01-03'),
(27, 'zd', 'dsv', 'fv', 1515, 'fsvq@gmail.com', '2019-12-25', '2019-12-31'),
(28, 'a rserver', 'rserver', 'reserver', 121222, 'reserver@gmail.com', '2019-12-25', '2020-01-02'),
(10, 'ghassen', 'attia', 'fjvjd', 566416, 'ghghg@fdgdf.com', NULL, NULL),
(11, 'mohamed yasiine ', 'attia', 'hammamet', 58461614, 'hsdqjh@gazisjaikcom', NULL, NULL),
(12, 'selim', 'bobo', 'sfqqsqssqds', 9595, 'qdfq@fqsf.com', NULL, NULL),
(13, 'wissem', 'sqdfc', 'hammamet', 652841987, 'sdkh@hsh.com', NULL, NULL),
(14, 'oo', 'oo', 'oo', 41211, 'o@u.cm', NULL, NULL),
(15, 'brahim', 'bessrour', 'hammamet', 8454, 'qdsfji@slhfq.com', NULL, NULL),
(16, 'cyrine', 'akacha', 'sqhbjw', 514584, 'sdfqjk@gmaim.com', NULL, NULL),
(17, 'Hayet', 'Dar', 'Corniche', 123, 'hilelattia11@gmail.com', '2019-12-12', '2019-12-13'),
(18, 'Hayet', 'Dar', 'Corniche', 123, 'hilelattia11@gmail.com', '2019-12-12', '2019-12-13'),
(19, 'Hayet', 'Dar', 'Corniche', 123, 'hilelattia11@gmail.com', '2019-12-12', '2019-12-13'),
(20, 'Hayet', 'Dar', 'Corniche', 123, 'hilelattia11@gmail.com', '2019-12-12', '2019-12-13'),
(21, 'Hayet', 'Dar', 'Corniche', 123, 'hilelattia11@gmail.com', '2019-12-12', '2019-12-13'),
(22, 'hilel', 'attia', 'hammaamet', 28028837, 'hilelattia11@gmail.com', '2019-12-24', '2019-12-31'),
(23, 'f', 'f', '', 65815, 'hilelattia11@gmail.com', NULL, NULL),
(24, 'hilel', 'attia', 'hammaamet', 28028837, 'hilelattia11@gmail.com', '2019-12-24', '2019-12-31'),
(25, 'hilel', 'attia', 'hammaamet', 28028837, 'hilelattia11@gmail.com', '2019-12-24', '2019-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `tarifstock`
--

DROP TABLE IF EXISTS `tarifstock`;
CREATE TABLE IF NOT EXISTS `tarifstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idhotel` int(11) NOT NULL,
  `idchambre` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `vendu` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarifstock`
--

INSERT INTO `tarifstock` (`id`, `idhotel`, `idchambre`, `prix`, `stock`, `vendu`, `date`) VALUES
(1, 1, 1, '100', 50, 0, '2019-01-22'),
(2, 1, 1, '100', 5, 0, '2019-01-23');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'hotel'),
(2, 'residence');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `idpays` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `idpays`) VALUES
(1, 'hammamet', 1),
(2, 'sousse', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
