CREATE DATABASE IF NOT EXISTS `casamiento` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `casamiento`;
-- Dumping structure for table casamiento.casamiento
CREATE TABLE `invitados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT '0',
  `acompaniantes` VARCHAR(255) NOT NULL,
  `comida` VARCHAR(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) 

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)