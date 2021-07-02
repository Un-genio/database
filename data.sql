CREATE TABLE `administrador_titulacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `curp` varchar(18) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_p` varchar(45) DEFAULT NULL,
  `apellido_m` varchar(45) DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `estado_id` int DEFAULT NULL,
  `cargo_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `estado_fk_idx` (`status_id`),
  CONSTRAINT `estado_fk` FOREIGN KEY (`status_id`) REFERENCES `cat_estado` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1