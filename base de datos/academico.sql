-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2015 a las 07:54:58
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15
CREATE database IF NOT EXISTS academico;
use academico;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `codigo` char(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `dni` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`codigo`, `nombre`, `apellidos`, `dni`) VALUES
('112143', 'Robert ', 'Huaman Caceres', '71960340'),
('112145', 'Nilto', 'Hurtado Mendoza', '71960341'),
('Undefi', 'Undefined', 'Undefined', 'Undefine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `codigo` char(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `creditos` int(11) NOT NULL,
  `profesor` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`codigo`, `nombre`, `creditos`, `profesor`) VALUES
('C00001', 'Matematicas discretas', 3, '71960340'),
('C00002', 'Emsamblaje', 3, '71960340'),
('C00003', 'Mecanografia', 3, '71960340');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `dia` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `curso` char(6) NOT NULL,
  `profesor` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`dia`, `hora`, `aula`, `curso`, `profesor`) VALUES
(1, 7, 204, 'C00001', '71960340'),
(5, 15, 105, 'C00003', '71960340');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
`id_matricula` int(11) NOT NULL,
  `curso` char(6) NOT NULL,
  `alumno` char(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `curso`, `alumno`) VALUES
(12, 'C00002', '112143'),
(13, 'C00001', '112143'),
(14, 'C00003', '112145');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `dni` char(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `celular` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`dni`, `nombre`, `apellidos`, `celular`) VALUES
('71960340', 'Ferr', 'Serr Marr', 946709007);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`codigo`), ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`codigo`), ADD KEY `profesor` (`profesor`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
 ADD PRIMARY KEY (`dia`,`hora`,`aula`), ADD UNIQUE KEY `aula` (`aula`), ADD KEY `curso` (`curso`), ADD KEY `profesor` (`profesor`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
 ADD PRIMARY KEY (`id_matricula`), ADD KEY `curso` (`curso`), ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`profesor`) REFERENCES `profesor` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`profesor`) REFERENCES `profesor` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
