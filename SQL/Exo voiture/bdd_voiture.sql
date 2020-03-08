-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour vroum
CREATE DATABASE IF NOT EXISTS `vroum` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vroum`;

-- Listage de la structure de la table vroum. colorer
CREATE TABLE IF NOT EXISTS `colorer` (
  `ID_VOITURE` int(11) NOT NULL,
  `ID_COULEUR` int(11) NOT NULL,
  PRIMARY KEY (`ID_VOITURE`,`ID_COULEUR`),
  KEY `colorer_COULEURS0_FK` (`ID_COULEUR`),
  CONSTRAINT `colorer_COULEURS0_FK` FOREIGN KEY (`ID_COULEUR`) REFERENCES `couleurs` (`ID_COULEUR`),
  CONSTRAINT `colorer_VEHICULE_FK` FOREIGN KEY (`ID_VOITURE`) REFERENCES `vehicule` (`ID_VOITURE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.colorer : ~0 rows (environ)
/*!40000 ALTER TABLE `colorer` DISABLE KEYS */;
INSERT INTO `colorer` (`ID_VOITURE`, `ID_COULEUR`) VALUES
	(4, 1),
	(6, 1),
	(8, 1),
	(13, 1),
	(9, 2),
	(12, 2),
	(13, 2),
	(3, 3),
	(7, 3),
	(8, 3),
	(11, 3),
	(16, 3),
	(7, 4),
	(10, 4),
	(15, 4),
	(17, 4),
	(5, 5),
	(14, 5),
	(18, 5),
	(20, 5),
	(1, 6),
	(2, 6),
	(5, 6),
	(6, 6),
	(19, 6);
/*!40000 ALTER TABLE `colorer` ENABLE KEYS */;

-- Listage de la structure de la table vroum. couleurs
CREATE TABLE IF NOT EXISTS `couleurs` (
  `ID_COULEUR` int(11) NOT NULL AUTO_INCREMENT,
  `COULEUR` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_COULEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.couleurs : ~6 rows (environ)
/*!40000 ALTER TABLE `couleurs` DISABLE KEYS */;
INSERT INTO `couleurs` (`ID_COULEUR`, `COULEUR`) VALUES
	(1, 'blanc'),
	(2, 'noir'),
	(3, 'bleu'),
	(4, 'rouge'),
	(5, 'vert'),
	(6, 'jaune');
/*!40000 ALTER TABLE `couleurs` ENABLE KEYS */;

-- Listage de la structure de la table vroum. marque
CREATE TABLE IF NOT EXISTS `marque` (
  `ID_MARQUE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_MARQUE` varchar(20) NOT NULL,
  `ID_ORIGINE` int(11) NOT NULL,
  PRIMARY KEY (`ID_MARQUE`),
  KEY `MARQUE_ORIGINE_FK` (`ID_ORIGINE`),
  CONSTRAINT `MARQUE_ORIGINE_FK` FOREIGN KEY (`ID_ORIGINE`) REFERENCES `origine` (`ID_ORIGINE`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.marque : ~8 rows (environ)
/*!40000 ALTER TABLE `marque` DISABLE KEYS */;
INSERT INTO `marque` (`ID_MARQUE`, `NOM_MARQUE`, `ID_ORIGINE`) VALUES
	(1, 'Peugeot', 1),
	(2, 'Renault', 1),
	(3, 'Mercedes', 2),
	(4, 'Audi', 2),
	(5, 'Wolfswagen', 2),
	(6, 'Chevrolet', 3),
	(7, 'Ford', 3),
	(8, 'Citroen', 4);
/*!40000 ALTER TABLE `marque` ENABLE KEYS */;

-- Listage de la structure de la table vroum. modele
CREATE TABLE IF NOT EXISTS `modele` (
  `ID_MODELE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_MODELE` varchar(20) NOT NULL,
  `ID_MARQUE` int(11) NOT NULL,
  PRIMARY KEY (`ID_MODELE`),
  KEY `MODELE_MARQUE_FK` (`ID_MARQUE`),
  CONSTRAINT `MODELE_MARQUE_FK` FOREIGN KEY (`ID_MARQUE`) REFERENCES `marque` (`ID_MARQUE`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.modele : ~17 rows (environ)
/*!40000 ALTER TABLE `modele` DISABLE KEYS */;
INSERT INTO `modele` (`ID_MODELE`, `NOM_MODELE`, `ID_MARQUE`) VALUES
	(1, '206', 1),
	(2, '307', 1),
	(3, '406', 1),
	(4, 'Clio', 2),
	(5, 'Twingo', 2),
	(6, 'C1', 8),
	(7, 'C2', 8),
	(8, 'C3', 8),
	(9, 'C4', 8),
	(10, 'A1', 4),
	(11, 'A2', 4),
	(12, 'A3', 4),
	(13, 'A4', 4),
	(14, 'A7', 4),
	(15, 'Golf', 5),
	(16, 'Polo', 5),
	(17, 'Mustang', 6),
	(18, '4x4', 7);
/*!40000 ALTER TABLE `modele` ENABLE KEYS */;

-- Listage de la structure de la table vroum. motorisation
CREATE TABLE IF NOT EXISTS `motorisation` (
  `ID_MOTEUR` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_MOTEUR` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_MOTEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.motorisation : ~6 rows (environ)
/*!40000 ALTER TABLE `motorisation` DISABLE KEYS */;
INSERT INTO `motorisation` (`ID_MOTEUR`, `TYPE_MOTEUR`) VALUES
	(1, 'Hybride'),
	(2, 'Electrique'),
	(3, 'Diesel'),
	(4, 'Ethanol'),
	(5, 'SP-95'),
	(6, 'SP-98');
/*!40000 ALTER TABLE `motorisation` ENABLE KEYS */;

-- Listage de la structure de la table vroum. origine
CREATE TABLE IF NOT EXISTS `origine` (
  `ID_ORIGINE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PAYS` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_ORIGINE`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.origine : ~4 rows (environ)
/*!40000 ALTER TABLE `origine` DISABLE KEYS */;
INSERT INTO `origine` (`ID_ORIGINE`, `NOM_PAYS`) VALUES
	(1, 'France'),
	(2, 'Allemagne'),
	(3, 'USA'),
	(4, 'Finlande');
/*!40000 ALTER TABLE `origine` ENABLE KEYS */;

-- Listage de la structure de la table vroum. vehicule
CREATE TABLE IF NOT EXISTS `vehicule` (
  `ID_VOITURE` int(11) NOT NULL AUTO_INCREMENT,
  `IMMAT` varchar(20) NOT NULL,
  `NB_PORTES` int(11) NOT NULL,
  `ID_MODELE` int(11) NOT NULL,
  `ID_MOTEUR` int(11) NOT NULL,
  PRIMARY KEY (`ID_VOITURE`),
  KEY `VEHICULE_MODELE_FK` (`ID_MODELE`),
  KEY `VEHICULE_MOTORISATION0_FK` (`ID_MOTEUR`),
  CONSTRAINT `VEHICULE_MODELE_FK` FOREIGN KEY (`ID_MODELE`) REFERENCES `modele` (`ID_MODELE`),
  CONSTRAINT `VEHICULE_MOTORISATION0_FK` FOREIGN KEY (`ID_MOTEUR`) REFERENCES `motorisation` (`ID_MOTEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Listage des données de la table vroum.vehicule : ~0 rows (environ)
/*!40000 ALTER TABLE `vehicule` DISABLE KEYS */;
INSERT INTO `vehicule` (`ID_VOITURE`, `IMMAT`, `NB_PORTES`, `ID_MODELE`, `ID_MOTEUR`) VALUES
	(1, 'kbluvlu', 5, 6, 1),
	(2, 'JXCK567', 3, 6, 2),
	(3, 'XCVB907', 1, 6, 3),
	(4, 'Z4TOH', 5, 1, 5),
	(5, 'AZ355V', 5, 2, 1),
	(6, 'AZ34FG', 3, 3, 3),
	(7, '132RF', 4, 4, 4),
	(8, '123ERF', 5, 5, 6),
	(9, 'ERTBH5', 5, 7, 1),
	(10, 'POI098', 3, 8, 2),
	(11, 'RT652', 5, 9, 4),
	(12, 'ÖJPPU', 5, 10, 2),
	(13, '234GNB', 5, 11, 2),
	(14, 'PLK789', 5, 12, 3),
	(15, 'BVC4', 5, 13, 4),
	(16, 'CSD456', 3, 14, 6),
	(17, 'AZE7654', 7, 15, 5),
	(18, 'AZDVB8', 5, 16, 1),
	(19, 'IHO96', 5, 17, 3),
	(20, '6436KHG', 5, 18, 3);
/*!40000 ALTER TABLE `vehicule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
