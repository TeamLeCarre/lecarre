/*
MySQL Data Transfer
Source Host: localhost
Source Database: carre
Target Host: localhost
Target Database: carre
Date: 21/05/2018 12:42:06
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for soiree
-- ----------------------------
CREATE TABLE `soiree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `createur` int(8) NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(64) NOT NULL,
  `description_lieu` varchar(100) DEFAULT NULL,
  `confidentialite` int(1) NOT NULL,
  `personnes_max` int(3) DEFAULT NULL,
  `parking` int(1) DEFAULT NULL,
  `hebergement` int(2) DEFAULT NULL,
  `alcool` tinyint(4) DEFAULT NULL,
  `fumeurs` tinyint(4) DEFAULT NULL,
  `age_min` int(2) DEFAULT NULL,
  `age_max` int(2) DEFAULT NULL,
  `int_ext` int(1) DEFAULT NULL,
  `musique` varchar(100) DEFAULT NULL,
  `description` varchar(160) DEFAULT NULL,
  `valide` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for usager
-- ----------------------------
CREATE TABLE `usager` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `email` varchar(64) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `code` varchar(8) NOT NULL,
  `bio` varchar(160) DEFAULT NULL,
  `date_inscription` datetime NOT NULL,
  `rang` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `soiree` VALUES ('1', 'Soirée Coupe du Monde', null, '0', '1', '2018-06-15 18:30:00', null, '35 Lotissement Imistola', 'Briscous', null, '2', '10', '1', null, '1', null, null, null, null, null, 'FORCA PORTUGAL pour cette super coupe du monde !!! Venez tous boire l\'apéro devant chaque match phénoménal de ce mondial !', '0');
INSERT INTO `usager` VALUES ('5', 'Gonçalves', 'Antho', '1998-12-16 00:00:00', 'anthogoncalves1998@gmail.com', '64240', 'BRISCOUS', '446bb1873db8422d105910b487c991275c5dac34', '16715169', '', '2018-05-14 19:20:00', '7');
INSERT INTO `usager` VALUES ('6', 'Rouchon', 'Alexis', '2000-03-30 00:00:00', 'alexisrouchon@hotmail.fr', '64100', 'BAYONNE', '18ecda4b38575b32824bb62ba69812f064ec6d86', '69196612', '', '2018-05-14 19:22:49', '6');
INSERT INTO `usager` VALUES ('7', 'Rouchon', 'Kev', '1998-10-16 00:00:00', 'kevin.641000@hotmail.fr', '64100', 'BAYONNE', '96305cda1e795c533640d2d61884e1d9e32a6e8e', '60550386', '', '2018-05-14 19:27:30', '5');
