DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

LOCK TABLES `user` WRITE;
INSERT INTO `user` VALUES
(1,'usuario1','contrasena1'),
(2,'usuario2','contrasena2'),
(3,'usuario3','contrasena3');
UNLOCK TABLES;
