-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 21:28:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `licenciatura` varchar(50) NOT NULL,
  `cuatrimestre` varchar(35) NOT NULL,
  `estatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `licenciatura`, `cuatrimestre`, `estatus`) VALUES
(1, 'David ', 'Villalobos Sanchez', 9983565388, 'davidisrael@gmail.com', 'Sistemas', 'sexto', 1),
(2, 'Daniel', 'Villalobos Sanchez', 9983565387, 'daniel1213@gmail.com', 'Derecho', 'Sexto', 0),
(3, 'Diego', 'Hernández García', 9983565386, 'diegohg@gmail.com', 'Medicina ', 'Quinto', 1),
(4, 'José', 'González	Gómez', 9983565312, 'josegg@gmail.com', 'Derecho', 'Cuarto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `cuatrimestre` varchar(35) NOT NULL,
  `licenciatura` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(5, 'Calculo', 'Sexto', 'Sistemas'),
(6, 'Ortografía ', 'Quinto', 'Derecho'),
(7, 'Física', 'Cuarto', 'Sistemas'),
(8, 'Química ', 'Quinto', 'Medicina ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `telefono` varchar(35) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `estatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `estatus`) VALUES
(1, 'Ramón', 'González	Díaz', '9912300098', 'ramongd@gmail.com', 0),
(2, 'Eduardo', 'Pérez Silva', '9989898900', 'eduardops@gmail.com', 1),
(3, 'Iván ', 'Fernández Martínez', '9980876543', 'ivanfm@gmail.com', 1),
(4, 'Miguel', 'Martínez	López', '9998001120', 'miguelml@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
