-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql207.vzpla.net
-- Tiempo de generación: 23-11-2015 a las 01:52:56
-- Versión del servidor: 5.6.25-73.1
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `user_16706864_Aplicada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `Codigo` varchar(11) NOT NULL,
  `Contrasena` varchar(11) NOT NULL,
  PRIMARY KEY (`Contrasena`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Admin`
--

INSERT INTO `Admin` (`Codigo`, `Contrasena`) VALUES
('20131005056', '20131005056'),
('20132005036', '20132005036');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calculo`
--

CREATE TABLE IF NOT EXISTS `Calculo` (
  `Codigo` varchar(15) NOT NULL,
  `Nota1` varchar(15) NOT NULL,
  `Nota2` varchar(15) NOT NULL,
  `Nota3` varchar(15) NOT NULL,
  `Definitiva` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Campos`
--

CREATE TABLE IF NOT EXISTS `Campos` (
  `Codigo` varchar(12) NOT NULL,
  `Nota1` varchar(10) NOT NULL,
  `Nota2` varchar(10) NOT NULL,
  `Nota3` varchar(10) NOT NULL,
  `Definitiva` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Catedra`
--

CREATE TABLE IF NOT EXISTS `Catedra` (
  `Codigo` varchar(14) NOT NULL,
  `Nota1` varchar(14) NOT NULL,
  `Nota2` varchar(15) NOT NULL,
  `Nota3` varchar(14) NOT NULL,
  `Definitiva` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dibujo`
--

CREATE TABLE IF NOT EXISTS `Dibujo` (
  `Codigo` varchar(12) NOT NULL,
  `Nota1` varchar(12) NOT NULL,
  `Nota2` varchar(12) NOT NULL,
  `Nota3` varchar(12) NOT NULL,
  `Definitiva` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Electronica`
--

CREATE TABLE IF NOT EXISTS `Electronica` (
  `Codigo` varchar(12) NOT NULL,
  `Nota1` varchar(10) NOT NULL,
  `Nota2` varchar(10) NOT NULL,
  `Nota3` varchar(10) NOT NULL,
  `Nota4` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudiantes`
--

CREATE TABLE IF NOT EXISTS `Estudiantes` (
  `idEstudiantes` int(20) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Codigo` varchar(20) NOT NULL,
  `Promedio` varchar(20) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `Email` varchar(11) NOT NULL,
  `Materia1` varchar(20) NOT NULL,
  `Materia2` varchar(20) NOT NULL,
  `Materia3` varchar(20) NOT NULL,
  `materia4` varchar(20) NOT NULL,
  PRIMARY KEY (`idEstudiantes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fisica`
--

CREATE TABLE IF NOT EXISTS `Fisica` (
  `Codigo` varchar(11) NOT NULL,
  `Nota1` varchar(11) NOT NULL,
  `Nota2` varchar(11) NOT NULL,
  `Nota3` varchar(11) NOT NULL,
  `Definitiva` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Matematicas`
--

CREATE TABLE IF NOT EXISTS `Matematicas` (
  `Codigo` varchar(15) NOT NULL,
  `Nota1` varchar(15) NOT NULL,
  `Nota2` varchar(15) NOT NULL,
  `Nota3` varchar(15) NOT NULL,
  `Definitiva` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Profesores`
--

CREATE TABLE IF NOT EXISTS `Profesores` (
  `idProfesores` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(10) NOT NULL,
  `Codigo` varchar(11) NOT NULL,
  `Contrasena` varchar(11) NOT NULL,
  `Email` varchar(10) NOT NULL,
  `Materia` varchar(15) NOT NULL,
  PRIMARY KEY (`idProfesores`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `Profesores`
--

INSERT INTO `Profesores` (`idProfesores`, `Nombre`, `Codigo`, `Contrasena`, `Email`, `Materia`) VALUES
(43, 'Victor Hug', '20131005555', '2013100555', 'victorhugo', 'Quimica'),
(44, 'Mariano Pe', '20131004444', '20131004444', 'juperlta@o', 'Dibujo'),
(45, 'Guillermo ', '20131004321', '20131004321', 'PGuillermo', 'Fisica'),
(42, 'Jose Caste', '20131006666', '20131006666', 'Jcastellan', 'Electronica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Programacion`
--

CREATE TABLE IF NOT EXISTS `Programacion` (
  `Codigo` varchar(14) NOT NULL,
  `Nota1` varchar(15) NOT NULL,
  `Nota2` varchar(14) NOT NULL,
  `Nota3` varchar(14) NOT NULL,
  `Definitiva` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Quimica`
--

CREATE TABLE IF NOT EXISTS `Quimica` (
  `Codigo` varchar(15) NOT NULL,
  `Nota1` varchar(15) NOT NULL,
  `Nota2` varchar(15) NOT NULL,
  `Nota3` varchar(12) NOT NULL,
  `Definitiva` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
