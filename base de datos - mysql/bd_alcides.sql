-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2023 a las 05:15:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_alcides`
--
CREATE DATABASE IF NOT EXISTS `bd_alcides` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_alcides`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `ci` int(11) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notaFinal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notaFinal`) VALUES
(163258, 'INF-154', 26, 30, 34, 90),
(663258, 'INF-131', 26, 30, 34, 95),
(863258, 'INF-161', 26, 30, 34, 89),
(963258, 'INF-324', 26, 30, 34, 87),
(763258, 'INF-111', 24, 21, 30, 75),
(763258, 'INF-325', 25, 12, 20, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` int(11) NOT NULL,
  `nombre_completo` varchar(50) DEFAULT NULL,
  `fecha_naci` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `cod_depart` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre_completo`, `fecha_naci`, `telefono`, `cod_depart`) VALUES
(123, 'andrea', '0000-00-00', '(123)611', '09'),
(321, 'andres', '0000-00-00', '(123)611', '09'),
(163258, 'Gustavo Choque', '2001-04-29', '(591)75632845', '01'),
(663258, 'Rayner Choque', '2001-04-30', '(591)61179258', '02'),
(763258, 'Ana Carvajal', '1999-04-29', '(591)77523148', '07'),
(863258, 'Fabian Reyes', '1998-04-29', '(591)69632596', '03'),
(963258, 'Ruben Quispe', '2000-04-29', '(591)75632845', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pasword` varchar(50) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `pasword`, `rol`) VALUES
(163258, 'usuario1', '123', 'director'),
(663258, 'alcides', '123', 'estudiante'),
(763258, 'usuario2', '123', 'estudiante'),
(863258, 'usuario3', '123', 'estudiante'),
(963258, 'usuario4', '123', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
