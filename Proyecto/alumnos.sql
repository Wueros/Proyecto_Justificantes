-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 06:39:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alu`
--

CREATE TABLE `alu` (
  `Nocontrol` int(17) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Grupo` varchar(5) NOT NULL,
  `Semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alu`
--

INSERT INTO `alu` (`Nocontrol`, `Nombre`, `Grupo`, `Semestre`) VALUES
(1050860015, 'Jose Luis Hernandez Martinez', 'E', 5),
(1050860016, 'Oswaldo Barrios Castillo', 'E', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificantes`
--

CREATE TABLE `justificantes` (
  `Nocontrol` int(17) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Grupo` varchar(5) NOT NULL,
  `Semestre` int(5) NOT NULL,
  `Folio` int(10) NOT NULL,
  `Situacion` varchar(20) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `justificantes`
--

INSERT INTO `justificantes` (`Nocontrol`, `Nombre`, `Grupo`, `Semestre`, `Folio`, `Situacion`, `Fecha`) VALUES
(1050860015, 'José Luis Hernández Martínez', 'E', 5, 1, 'Por enfermedad', '2024-09-02'),
(1050860016, 'Oswaldo Barrios Castillo', 'E', 5, 2, 'Personal', '2024-09-02'),
(1050860015, 'José Luis Hernández Martínez', 'E', 5, 4, 'Enfermedad', '2024-09-17'),
(1050860016, 'Oswaldo Barrios Castillo', 'E', 5, 5, 'Personal', '2024-08-15'),
(1050860016, 'Oswaldo Barrios Castillo', 'E', 5, 6, 'Enfermedad', '2024-09-03'),
(1050860016, 'Oswaldo Barrios Castillo', 'E', 5, 7, 'Personal', '2024-09-16'),
(1050860015, 'José Luis Hernández Martínez', 'E', 5, 10, 'Personal', '2024-09-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alu`
--
ALTER TABLE `alu`
  ADD PRIMARY KEY (`Nocontrol`);

--
-- Indices de la tabla `justificantes`
--
ALTER TABLE `justificantes`
  ADD PRIMARY KEY (`Folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alu`
--
ALTER TABLE `alu`
  MODIFY `Nocontrol` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1050860017;

--
-- AUTO_INCREMENT de la tabla `justificantes`
--
ALTER TABLE `justificantes`
  MODIFY `Folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
