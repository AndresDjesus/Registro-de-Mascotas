-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-07-2023 a las 17:39:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pets`
--

CREATE TABLE `Pets` (
  `id` int(11) NOT NULL COMMENT 'Este campo es el indice del registro',
  `name` varchar(80) NOT NULL COMMENT 'Este campo es el nombre de la mascota',
  `type` varchar(15) NOT NULL COMMENT 'Este campo es el tipo de mascota',
  `breed` varchar(80) DEFAULT NULL COMMENT 'Este campo es la raza de la mascota',
  `owner` varchar(80) NOT NULL COMMENT 'Este campo es el dueno de la mascota',
   `sex`   varchar(80) NOT NULL COMMENT 'Este campo es el sexo de las mascota',
  `birth_date` datetime DEFAULT NULL COMMENT 'Este campo es la fecha de nacimiento de la mascota'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Pets`
--

INSERT INTO `Pets` (`id`, `name`, `type`, `breed`, `owner`, `birth_date`) VALUES
(1, 'Manchas', 'Perro', NULL, 'Juan Daniel', NULL),
(3, 'Nemo', 'Pez', 'Pez Dorado', 'Jose Antonio', NULL),

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Pets`
--
ALTER TABLE `Pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Pets`
--
ALTER TABLE `Pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Este campo es el indice del registro', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
