-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2021 a las 19:41:52
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprass`
--

CREATE TABLE `comprass` (
  `id` int(40) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` text NOT NULL,
  `marca` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comprass`
--

INSERT INTO `comprass` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `marca`) VALUES
(1, 'Puerta trasera derecha ', 'Esto es puerta trasera derecha', 'img2424.jpg', '2000', 0),
(2, 'Puerta trasera izquierda', 'Esto es puerta trasera izquierda', 'img2425.jpg', '2000', 2),
(3, 'Capot', 'Esto es un capot', 'img2425.jpg', '3000', 3),
(4, 'Baúl', 'Esto es baúl', 'tapa de baul .jpeg', '5000', 4),
(5, 'Puerta delantera izquierda', 'Esto es puerta delantera izquierda', 'img2424.jpg', '2000', 5),
(6, 'Puerta delantera derecha', 'Esto es puerta delantera derecha', 'img2424.jpg', '2000', 6),
(7, 'Guardabarro delantero izquierdo', 'Esto es Guardabarro delantero izquierdo', 'img2425.jpg', '2500', 7),
(8, 'Guardabarro delantero derecho', 'Esto es Guardabarro delantero derecho', 'img2425.jpg', '2500', 8),
(9, 'Guardabarro trasero izquierdo', 'Esto es guardabarro trasero izquierdo', 'img2425.jpg', '2500', 9),
(10, 'Guardabarro trasero derecho', 'Esto es Guardabarro trasero derecho', 'img2425.jpg', '2500', 10),
(11, 'Paragolpe delantero', 'Esto es paragolpe delantero', 'img2424.jpg', '4000', 11),
(12, 'Paragolpe trasero', 'Esto es Paragolpe trasero ', 'img2424.jpg', '4000', 0),
(13, 'Capot', 'Esto es un capot', 'img2425.jpg', '3000', 1),
(14, 'Puerta trasera derecha ', 'Esto es puerta trasera derecha', 'img2424.jpg', '2000', 1),
(15, 'Puerta delantera izquierda', 'Esto es puerta delantera izquierda', 'img2424.jpg', '2000', 1),
(16, 'Puerta delantera izquierda', 'Esto es puerta delantera izquierda', 'img2424.jpg', '2000', 1),
(17, 'Puerta trasera derecha ', 'Esto es puerta trasera derecha', 'img2424.jpg', '2000', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comprass`
--
ALTER TABLE `comprass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprass`
--
ALTER TABLE `comprass`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
