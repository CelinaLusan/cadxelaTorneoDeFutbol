-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-05-2019 a las 22:10:05
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id9499497_torneofutbol`
--
CREATE DATABASE IF NOT EXISTS `id9499497_torneofutbol` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id9499497_torneofutbol`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(2) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `puntosObtenidos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` int(2) NOT NULL,
  `idEquipo` int(2) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `goles` int(2) NOT NULL,
  `tarjetasAmarillas` int(2) NOT NULL,
  `tarjetasRojas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarDeJuego`
--

CREATE TABLE `lugarDeJuego` (
  `idLugar` int(2) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `equipoA` int(2) NOT NULL,
  `equipoB` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indices de la tabla `lugarDeJuego`
--
ALTER TABLE `lugarDeJuego`
  ADD PRIMARY KEY (`idLugar`),
  ADD KEY `equipoA` (`equipoA`),
  ADD KEY `equipoB` (`equipoB`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugarDeJuego`
--
ALTER TABLE `lugarDeJuego`
  MODIFY `idLugar` int(2) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `idEquipo` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lugarDeJuego`
--
ALTER TABLE `lugarDeJuego`
  ADD CONSTRAINT `idEquipo1` FOREIGN KEY (`equipoA`) REFERENCES `equipos` (`idEquipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idEquipo2` FOREIGN KEY (`equipoB`) REFERENCES `equipos` (`idEquipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
