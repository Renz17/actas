-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2022 a las 19:15:44
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `id` int(11) NOT NULL,
  `AreasEncargada` varchar(255) NOT NULL,
  `Tema` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Funcionario` varchar(255) NOT NULL,
  `Personal` varchar(255) NOT NULL,
  `Compromisos` varchar(255) NOT NULL,
  `MarcaCronologica` varchar(255) NOT NULL,
  `Responsabilidades` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`id`, `AreasEncargada`, `Tema`, `Descripcion`, `Funcionario`, `Personal`, `Compromisos`, `MarcaCronologica`, `Responsabilidades`) VALUES
(1, 'Matematicas', 'Esto', 'Esta vaina es asi', 'Simon', 'Juan', 'Esto otro', 'No se', 'hay que hacer esta vaina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
