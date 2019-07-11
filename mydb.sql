-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-06-2018 a las 19:52:33
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisismuestras`
--

DROP TABLE IF EXISTS `analisismuestras`;
CREATE TABLE IF NOT EXISTS `analisismuestras` (
  `idAnalisisMuestras` int(11) NOT NULL AUTO_INCREMENT,
  `fechaRecepcion` date NOT NULL,
  `temperaturaMuestra` decimal(3,1) NOT NULL,
  `cantidadMuestra` int(11) NOT NULL,
  `Empresa_codigoEmpresa` int(11) DEFAULT NULL,
  `Particular_idParticular` int(11) DEFAULT NULL,
  `rutEmpleadoRecibe` varchar(10) NOT NULL,
  PRIMARY KEY (`idAnalisisMuestras`),
  UNIQUE KEY `idAnalisisMuestras_UNIQUE` (`idAnalisisMuestras`),
  KEY `fk_AnalisisMuestras_Empresa1_idx` (`Empresa_codigoEmpresa`),
  KEY `fk_AnalisisMuestras_Particular1_idx` (`Particular_idParticular`),
  KEY `fk_AnalisisMuestras_Empleado1_idx` (`rutEmpleadoRecibe`)
) ENGINE=InnoDB AUTO_INCREMENT=1235 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `analisismuestras`
--

INSERT INTO `analisismuestras` (`idAnalisisMuestras`, `fechaRecepcion`, `temperaturaMuestra`, `cantidadMuestra`, `Empresa_codigoEmpresa`, `Particular_idParticular`, `rutEmpleadoRecibe`) VALUES
(1234, '2018-06-12', '12.0', 45, 10, 23, '19815906-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `rutContacto` varchar(10) NOT NULL,
  `nombreContacto` varchar(30) NOT NULL,
  `emailContacto` varchar(45) NOT NULL,
  `telefonoContacto` varchar(15) NOT NULL,
  `Empresa_codigoEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`rutContacto`),
  UNIQUE KEY `rutContacto_UNIQUE` (`rutContacto`),
  KEY `fk_Contacto_Empresa_idx` (`Empresa_codigoEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`rutContacto`, `nombreContacto`, `emailContacto`, `telefonoContacto`, `Empresa_codigoEmpresa`) VALUES
('18727472-k', 'Contacto', 'isps@gmail.com', '98887778', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` varchar(10) NOT NULL,
  `nombreEmpleado` varchar(50) NOT NULL,
  `passwordEmpeado` varchar(10) NOT NULL,
  `categoria` varchar(1) NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreEmpleado`, `passwordEmpeado`, `categoria`) VALUES
('19815906-9', 'Fabian', 'Fabian19', 'a'),
('19815906-k', 'Jose ', '123', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `codigoEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `rutEmpresa` varchar(10) NOT NULL,
  `direccionEmpresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigoEmpresa`),
  UNIQUE KEY `codigoEmpresa_UNIQUE` (`codigoEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigoEmpresa`, `rutEmpresa`, `direccionEmpresa`) VALUES
(10, '76709909-5', 'Los maitenes 4457 Concepción'),
(13, '56787989-9', 'barros 6566');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

DROP TABLE IF EXISTS `particular`;
CREATE TABLE IF NOT EXISTS `particular` (
  `idParticular` int(11) NOT NULL AUTO_INCREMENT,
  `rutParticular` varchar(45) NOT NULL,
  `passwordParticular` varchar(45) NOT NULL,
  `nombreParticular` varchar(45) NOT NULL,
  `direccionParticular` varchar(45) NOT NULL,
  `emailParticular` varchar(100) NOT NULL,
  PRIMARY KEY (`idParticular`),
  UNIQUE KEY `idParticular_UNIQUE` (`idParticular`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `particular`
--

INSERT INTO `particular` (`idParticular`, `rutParticular`, `passwordParticular`, `nombreParticular`, `direccionParticular`, `emailParticular`) VALUES
(23, '15.876.678-0', '1234', 'Jean Paul', 'Michay 3456 ', 'JeanBienBellako@gmail.com'),
(401, '21.122.213-7', 'parti123', 'Bryan ', 'Gabriela Mistral, raulies 1312', 'TuBrayanBienRanquiao@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoanalisis`
--

DROP TABLE IF EXISTS `resultadoanalisis`;
CREATE TABLE IF NOT EXISTS `resultadoanalisis` (
  `idTipoAnalisis` int(11) NOT NULL,
  `idAnalisisMuestras` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `PPM` int(11) NOT NULL,
  `estado` bit(1) NOT NULL,
  `Empleado_idEmpleado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idTipoAnalisis`,`idAnalisisMuestras`),
  KEY `fk_ResultadoAnalisis_Empleado1_idx` (`Empleado_idEmpleado`),
  KEY `fk_ResultadoAnalisis_TipoAnalisis1_idx` (`idTipoAnalisis`),
  KEY `fk_ResultadoAnalisis_AnalisisMuestras1` (`idAnalisisMuestras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resultadoanalisis`
--

INSERT INTO `resultadoanalisis` (`idTipoAnalisis`, `idAnalisisMuestras`, `fechaRegistro`, `PPM`, `estado`, `Empleado_idEmpleado`) VALUES
(14, 1234, '2018-06-12', 12312, b'0', '19815906-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE IF NOT EXISTS `telefono` (
  `idTelefono` int(11) NOT NULL AUTO_INCREMENT,
  `numeroTelefono` varchar(15) NOT NULL,
  `Particular_idParticular` int(11) NOT NULL,
  PRIMARY KEY (`idTelefono`,`Particular_idParticular`),
  UNIQUE KEY `idTelefono_UNIQUE` (`idTelefono`),
  KEY `fk_Telefono_Particular1_idx` (`Particular_idParticular`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`idTelefono`, `numeroTelefono`, `Particular_idParticular`) VALUES
(9, '56764523', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoanalisis`
--

DROP TABLE IF EXISTS `tipoanalisis`;
CREATE TABLE IF NOT EXISTS `tipoanalisis` (
  `idTipoAnalisis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoAnalisis`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoanalisis`
--

INSERT INTO `tipoanalisis` (`idTipoAnalisis`, `nombre`) VALUES
(11, 'VIH'),
(14, 'Porcina');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD CONSTRAINT `fk_AnalisisMuestras_Empleado1` FOREIGN KEY (`rutEmpleadoRecibe`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AnalisisMuestras_Empresa1` FOREIGN KEY (`Empresa_codigoEmpresa`) REFERENCES `empresa` (`codigoEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AnalisisMuestras_Particular1` FOREIGN KEY (`Particular_idParticular`) REFERENCES `particular` (`idParticular`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_Contacto_Empresa` FOREIGN KEY (`Empresa_codigoEmpresa`) REFERENCES `empresa` (`codigoEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultadoanalisis`
--
ALTER TABLE `resultadoanalisis`
  ADD CONSTRAINT `fk_ResultadoAnalisis_AnalisisMuestras1` FOREIGN KEY (`idAnalisisMuestras`) REFERENCES `analisismuestras` (`idAnalisisMuestras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ResultadoAnalisis_Empleado1` FOREIGN KEY (`Empleado_idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ResultadoAnalisis_TipoAnalisis1` FOREIGN KEY (`idTipoAnalisis`) REFERENCES `tipoanalisis` (`idTipoAnalisis`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_Telefono_Particular1` FOREIGN KEY (`Particular_idParticular`) REFERENCES `particular` (`idParticular`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
