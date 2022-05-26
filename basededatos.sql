-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 04:06:55
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi`
--
CREATE DATABASE IF NOT EXISTS `adsi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `adsi`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `spConsultarPrueba`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultarPrueba` (IN `_CODIGO` INT(3))  NO SQL
BEGIN

	SELECT NOMBRE, TELEFONO FROM PRUEBA WHERE CODIGO = _CODIGO;

END$$

DROP PROCEDURE IF EXISTS `spEliminarPrueba`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spEliminarPrueba` (IN `_CODIGO` INT(3))  NO SQL
BEGIN

	DELETE FROM PRUEBA WHERE CODIGO = _CODIGO;

END$$

DROP PROCEDURE IF EXISTS `spInsertarProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarProducto` (IN `_DESCRIPCION` VARCHAR(100), IN `_CANTIDAD` INT(10), IN `_REFERENCIA` VARCHAR(100), IN `_DISPONIBLE` INT(10))  NO SQL
BEGIN

	INSERT INTO PRODUCTO (DESCRIPCION, CANTIDAD, REFERENCIA, DISPONIBLE) VALUES (_DESCRIPCION, _CANTIDAD, _REFERENCIA, _DISPONIBLE);

END$$

DROP PROCEDURE IF EXISTS `spInsertarPrueba`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarPrueba` (IN `_NOMBRE` VARCHAR(20))  NO SQL
BEGIN

	INSERT INTO PRUEBA ( NOMBRE ) VALUES ( _NOMBRE );

END$$

DROP PROCEDURE IF EXISTS `spModificarPrueba`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spModificarPrueba` (IN `_CODIGO` INT(3), IN `_NOMBRE` VARCHAR(20), IN `_TELEFONO` VARCHAR(10))  NO SQL
BEGIN 

	UPDATE PRUEBA SET NOMBRE = _NOMBRE, TELEFONO = _TELEFONO
    WHERE CODIGO = _TELEFONO;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `CODIGO` int(5) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `DURACION` int(4) NOT NULL,
  `JORNADA` varchar(20) NOT NULL,
  `FOTO` varchar(200) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`CODIGO`, `NOMBRE`, `DURACION`, `JORNADA`, `FOTO`) VALUES
(1, 'HABILIDADES BLANDAS', 600, 'MAÑANA', ''),
(2, 'FISICA', 3, 'TARDE', ''),
(3, 'MATEMATICA', 5, 'MAÑANA', ''),
(4, 'ETICAS', 9, 'FIN DE SENAMA', 'EXPLICACION.drawio.png'),
(5, 'ESTETICA', 9, 'MADRUGADA', 'horas29032022.sql');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `CEDULA` int(10) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `EDAD` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`CEDULA`, `NOMBRE`, `EDAD`) VALUES
(123456, 'ALBERTO', 23),
(123456, 'ALBERTO', 23),
(123456, 'ALBERTO', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `CODIGO` int(10) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(100) NOT NULL,
  `CANTIDAD` int(10) NOT NULL,
  `REFERENCIA` varchar(100) NOT NULL,
  `DISPONIBLE` int(10) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CODIGO`, `DESCRIPCION`, `CANTIDAD`, `REFERENCIA`, `DISPONIBLE`) VALUES
(1, 'PERA GRIS', 10, 'PG05X987', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

DROP TABLE IF EXISTS `prueba`;
CREATE TABLE IF NOT EXISTS `prueba` (
  `CODIGO` int(3) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`CODIGO`, `NOMBRE`, `TELEFONO`) VALUES
(1, 'SENA', '123456789'),
(2, 'JARAMILLO', NULL),
(5, 'PAULINA RUBIO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `CODIGO` int(10) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(200) NOT NULL,
  `CLAVE` varchar(500) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CODIGO`, `USUARIO`, `CLAVE`) VALUES
(1, 'PAMELA', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `PLACA` varchar(6) NOT NULL,
  `COLOR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`PLACA`, `COLOR`) VALUES
('MOR150', 'ROSA'),
('LOL852', 'AMARILLO'),
('MOR150', 'ROSA'),
('MOR150', 'ROSA'),
('qui987', 'rojo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
