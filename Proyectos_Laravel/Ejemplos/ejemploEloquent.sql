-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-10-2023 a las 11:54:16
-- Versión del servidor: 8.0.34-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemploEloquent`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `Matricula` varchar(10) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`Matricula`, `Marca`, `Modelo`) VALUES
('100A', 'Citroen', 'C3'),
('200B', 'Citroen', 'C5'),
('300C', 'Peugeot', '205'),
('400D', 'Peugeot', '405'),
('500E', 'Renault', 'Megane'),
('600F', 'Renault', 'Laguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `texto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `DNI`, `texto`) VALUES
(1, '1A', 'A mí esto me hace cosas raras'),
(2, '1A', 'Espera espera que es el anitivirus.'),
(3, '7G', 'Yo estoy tan feliz con mi Mac.'),
(4, '3C', 'No, Fernando, no sé lo que ibas a hacer.'),
(8, '2B', 'Me estoy enfadando...'),
(9, '3C', 'Esta tarde a las cinco me pongo con servidor; estoy deseandito.'),
(10, '4D', 'Dale a \'ocultar\' Manuel, verás que risa.'),
(11, '5E', 'No me gustan las pelis de star trek...'),
(12, '6F', 'Voy a modificar las librerías de Windows...'),
(13, '10G', 'No he visto ninguna de esas pelis. Puedo aprobar?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `DNI` varchar(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Tfno` varchar(20) NOT NULL,
  `edad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`DNI`, `Nombre`, `Tfno`, `edad`) VALUES
('10G', 'Inés', '1234', 36),
('10J', 'Javier', '666 666 666', 666),
('1A', 'Jaime', '1', 9),
('2B', 'Badre', '2', 17),
('2D', 'Francisco', '777 777 777', 777),
('3C', 'Oscar', '3', 27),
('4D', 'Gonzalo', '4', 9),
('5E', 'Sergio', '5', 25),
('6F', 'Alejandro', '6', 12),
('7G', 'Manuel', '7', 36),
('9I', 'Patricia', '555 123456', 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `DNI` varchar(10) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`DNI`, `Matricula`, `id`) VALUES
('1A', '100A', 1),
('1A', '200B', 2),
('2B', '300C', 3),
('3C', '400D', 4),
('4D', '100A', 5),
('4D', '500E', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DNI` (`DNI`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `Matricula` (`Matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `personas` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`Matricula`) REFERENCES `coches` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
