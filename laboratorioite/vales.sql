-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2018 a las 18:47:05
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material1`
--

CREATE TABLE IF NOT EXISTS `material1` (
`folio` int(11) NOT NULL,
  `solicitante` varchar(120) DEFAULT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  `carrera` varchar(40) DEFAULT NULL,
  `grupo` varchar(40) DEFAULT NULL,
  `asig` char(30) DEFAULT NULL,
  `laboratorio` char(80) DEFAULT NULL,
  `cantidad` varchar(40) DEFAULT NULL,
  `material` varchar(40) DEFAULT NULL,
  `tutor` char(80) DEFAULT NULL,
  `resibido` varchar(40) DEFAULT NULL,
  `entrega` datetime(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `material1`
--

INSERT INTO `material1` (`folio`, `solicitante`, `fecha`, `carrera`, `grupo`, `asig`, `laboratorio`, `cantidad`, `material`, `tutor`, `resibido`, `entrega`) VALUES
(1, 'Carmen Patricia Badillo Avila', '2018-04-04 00:00:00.000000', 'Ing.telematica', '8B', 'microprocesadores', 'electronica', '1', 'puntas', 'victor lauro', 'si', '2018-04-04 00:00:00.000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `material1`
--
ALTER TABLE `material1`
 ADD PRIMARY KEY (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `material1`
--
ALTER TABLE `material1`
MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
