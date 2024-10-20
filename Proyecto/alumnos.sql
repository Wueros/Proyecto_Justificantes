-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2024 a las 07:45:40
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
  `Folio` int(10) NOT NULL,
  `Situacion` varchar(100) NOT NULL,
  `Fechasoli` date NOT NULL,
  `Fechade` date NOT NULL,
  `Fechaa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `justificantes`
--

INSERT INTO `justificantes` (`Nocontrol`, `Folio`, `Situacion`, `Fechasoli`, `Fechade`, `Fechaa`) VALUES
(1050860015, 12, 'Enfermedad', '2024-09-22', '2024-09-16', '2024-09-18'),
(1050860015, 13, 'Enfermedad', '2024-09-22', '2024-09-10', '2024-09-13'),
(1050860015, 14, 'Personal', '2024-09-23', '2024-09-17', '2024-09-19'),
(1050860015, 15, 'Enfermedad', '2024-09-23', '2024-09-11', '2024-09-12');

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
  MODIFY `Folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
