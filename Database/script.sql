
-- Volcando estructura de base de datos para tienda_prueba
DROP DATABASE IF EXISTS `tienda_prueba`;
CREATE DATABASE IF NOT EXISTS `tienda_prueba` /*!40100 DEFAULT CHARACTER SET armscii8 */;
USE `tienda_prueba`;

-- Volcando estructura para tabla tienda_prueba.Producto
DROP TABLE IF EXISTS `Producto`;
CREATE TABLE IF NOT EXISTS `Producto` (
  `Nombre` varchar(300) NOT NULL,
  `SKU` varchar(300) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Valor` decimal(18,2) NOT NULL DEFAULT 0.00,
  `Tienda` int(11) NOT NULL DEFAULT 0,
  `Imagen` varchar(300) NOT NULL DEFAULT '0',
  KEY `FK_tienda` (`Tienda`),
  CONSTRAINT `FK_tienda` FOREIGN KEY (`Tienda`) REFERENCES `Tienda` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla tienda_prueba.Tienda
DROP TABLE IF EXISTS `Tienda`;
CREATE TABLE IF NOT EXISTS `Tienda` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(300) NOT NULL,
  `FechaDeApertura` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
