/*
MySQL Data Transfer
Source Host: localhost
Source Database: carre
Target Host: localhost
Target Database: carre
Date: 13/05/2018 12:58:51
*/

SET FOREIGN_KEY_CHECKS=0;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records 
-- ----------------------------
