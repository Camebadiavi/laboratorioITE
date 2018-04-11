-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2018 a las 18:48:07
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplo`
--

CREATE TABLE IF NOT EXISTS `ejemplo` (
`id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `paterno` varchar(40) DEFAULT NULL,
  `materno` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ejemplo`
--

INSERT INTO `ejemplo` (`id`, `nombre`, `paterno`, `materno`) VALUES
(2, 'luis', 'rey', 'lara'),
(3, 'rebeca', 'aguilar', 'duron'),
(4, 'Victor', 'hugo', 'manzilla'),
(8, 'carmen ', 'badillo', 'avila'),
(9, 'ma', 'ma', 'ma'),
(10, 'wjef', 'kjfkn', 'jfn');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejemplo`
--
ALTER TABLE `ejemplo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejemplo`
--
ALTER TABLE `ejemplo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
