-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 04:24:50
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
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_resp` int(11) NOT NULL,
  `sede` varchar(6) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `operacion` varchar(15) NOT NULL,
  `calzado` int(11) NOT NULL,
  `evaluacion` int(11) NOT NULL,
  `nacionalidad` varchar(15) NOT NULL,
  `municipio` varchar(15) NOT NULL,
  `cintura` float NOT NULL,
  `carrera` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_resp`, `sede`, `calificacion`, `operacion`, `calzado`, `evaluacion`, `nacionalidad`, `municipio`, `cintura`, `carrera`) VALUES
(1, 'Este', 6, 'Resta', 5, 2, 'Americano', 'Teapa', 62.91, 'Informatica'),
(2, 'Norte', 9, 'Resta', 9, 3, 'Argentino', 'Chapultenango', 64.95, 'Electromecanica'),
(3, 'Sur', 0, 'Suma', 8, 2, 'Mexicano', 'Chapultenango', 71.64, 'Electromecanica'),
(4, 'Centro', 9, 'Exponente', 10, 4, 'Mexicano', 'Chapultenango', 55.74, 'Industrial'),
(5, 'Sur', 7, 'Resta', 6, 5, 'Japones', 'Tapijulapa', 60.61, 'Informatica'),
(6, 'Norte', 6, 'Resta', 9, 1, 'Brasileño', 'Teapa', 85.31, 'Industrial'),
(7, 'Centro', 1, 'Exponente', 5, 2, 'Japones', 'Tacotalpa', 54.97, 'Derecho'),
(8, 'Este', 1, 'Resta', 9, 1, 'Japones', 'Teapa', 85.36, 'Electromecanica'),
(9, 'Norte', 10, 'Exponente', 7, 3, 'Americano', 'Pichucalco', 51.26, 'Electromecanica'),
(10, 'Norte', 0, 'Multiplicación', 6, 2, 'Brasileño', 'Pichucalco', 77.82, 'Electromecanica'),
(11, 'Centro', 9, 'Exponente', 8, 1, 'Japones', 'Chapultenango', 57.85, 'Administracion'),
(12, 'Sur', 2, 'Exponente', 9, 4, 'Mexicano', 'Tacotalpa', 51.27, 'Electromecanica'),
(13, 'Oeste', 7, 'Suma', 8, 5, 'Japones', 'Chapultenango', 84.6, 'Industrial'),
(14, 'Centro', 4, 'Multiplicación', 5, 4, 'Argentino', 'Pichucalco', 87.11, 'Administracion'),
(15, 'Oeste', 0, 'Suma', 5, 4, 'Mexicano', 'Pichucalco', 98.01, 'Industrial'),
(16, 'Centro', 8, 'Multiplicación', 6, 4, 'Argentino', 'Tapijulapa', 55.28, 'Electromecanica'),
(17, 'Sur', 6, 'Resta', 10, 2, 'Brasileño', 'Teapa', 54.34, 'Electromecanica'),
(18, 'Centro', 9, 'Multiplicación', 5, 5, 'Argentino', 'Tacotalpa', 65.18, 'Derecho'),
(19, 'Sur', 10, 'Suma', 6, 2, 'Americano', 'Tapijulapa', 62.55, 'Electromecanica'),
(20, 'Norte', 4, 'Suma', 4, 4, 'Argentino', 'Chapultenango', 56.51, 'Derecho');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_resp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
