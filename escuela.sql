-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 03:23:47
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
  `id` int(11) NOT NULL,
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
(1, 'Daniel', 'Villalobos Sanchez', 9983565387, 'daniel1213@gmail.com', 'Derecho', 'Sexto', 0),
(2, 'Diego', 'Hernández García', 9983565386, 'diegohg@gmail.com', 'Medicina ', 'Quinto', 1),
(3, 'José', 'González	Gómez', 9983565312, 'josegg@gmail.com', 'Derecho', 'Cuarto', 1),
(4, 'david', 'Villalobos sanchez', 9989565388, 'davidisrael@gmail.com', 'sistemas', 'quinto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `cuatrimestre` varchar(35) NOT NULL,
  `licenciatura` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(1, 'calculo', 'Sexto', 'Sistemas'),
(2, 'Ortografía ', 'Quinto', 'Derecho'),
(3, 'Física', 'Cuarto', 'Sistemas'),
(4, 'ingles', 'cuarto', 'sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
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
(2, 'juan', 'rodriguez vela', '1232090909', 'juanrv@gmail.com', 1),
(3, 'pedro', 'may dominguez', '1232345679', 'pedrom@gmail.com', 1),
(4, 'lucas', 'plascencia lopez', '1232345671', 'lucas@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
