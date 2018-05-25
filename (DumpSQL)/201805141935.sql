/*
MySQL Data Transfer
Source Host: localhost
Source Database: carre
Target Host: localhost
Target Database: carre
Date: 14/05/2018 19:35:44
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
  `date_inscription` datetime NOT NULL,
  `rang` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `usager` VALUES ('5', 'Gonçalves', 'Antho', '1998-12-16 00:00:00', 'anthogoncalves1998@gmail.com', '64240', 'BRISCOUS', '446bb1873db8422d105910b487c991275c5dac34', '16715169', '', '2018-05-14 19:20:00', '7');
INSERT INTO `usager` VALUES ('6', 'Rouchon', 'Alexis', '2000-03-30 00:00:00', 'alexisrouchon@hotmail.fr', '64100', 'BAYONNE', '18ecda4b38575b32824bb62ba69812f064ec6d86', '69196612', '', '2018-05-14 19:22:49', '6');
INSERT INTO `usager` VALUES ('7', 'Rouchon', 'Kev', '1998-10-16 00:00:00', 'kevin.641000@hotmail.fr', '64100', 'BAYONNE', '96305cda1e795c533640d2d61884e1d9e32a6e8e', '60550386', '', '2018-05-14 19:27:30', '5');
