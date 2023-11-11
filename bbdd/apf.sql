-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 16:14:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `copia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartment`
--

CREATE TABLE `apartment` (
  `id_apartment` int(5) NOT NULL,
  `apartment_name` varchar(20) NOT NULL,
  `high_season_price` int(20) NOT NULL,
  `low_season_price` int(20) NOT NULL,
  `num_roms` int(20) NOT NULL,
  `postal_address` int(5) NOT NULL,
  `square_meter` int(20) NOT NULL,
  `latitude` decimal(20,10) NOT NULL DEFAULT 42.2664000000,
  `longitude` decimal(20,10) NOT NULL DEFAULT 2.9616000000,
  `descripcion` varchar(1000) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_services` int(5) DEFAULT NULL,
  `reserve_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartment`
--

INSERT INTO `apartment` (`id_apartment`, `apartment_name`, `high_season_price`, `low_season_price`, `num_roms`, `postal_address`, `square_meter`, `latitude`, `longitude`, `descripcion`, `id_user`, `id_services`, `reserve_id`) VALUES
(10, 'Nombre del Apartamen', 150, 100, 3, 12345, 120, '40.0000000000', '30.0000000000', 'Descripcion del apartamento', 1, 1, NULL),
(11, 'Nombre del Apartamen', 150, 100, 3, 12345, 120, '40.0000000000', '30.0000000000', 'Descripcion del apartamento', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserve`
--

CREATE TABLE `reserve` (
  `id_reserve` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_apartment` int(5) NOT NULL,
  `entry_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `reserve_status` varchar(20) NOT NULL,
  `season_status` varchar(20) NOT NULL,
  `apartment_status` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `num_rooms` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `season`
--

CREATE TABLE `season` (
  `id_season` int(5) NOT NULL,
  `season` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_services` int(5) NOT NULL,
  `name_services` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id_services`, `name_services`) VALUES
(1, 'wi-fi'),
(2, 'ascensor'),
(3, 'restaurante'),
(4, 'parking');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state`
--

CREATE TABLE `state` (
  `id_state` int(5) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `rol_user` varchar(20) NOT NULL DEFAULT 'usuario',
  `user` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `pass` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(9) NOT NULL,
  `card_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `rol_user`, `user`, `surname`, `pass`, `email`, `phone`, `card_number`) VALUES
(1, 'usuario', 'roger', 'r', 12345, 'r@gmail.com', 123456789, 2),
(2, 'usuario', 'prueba', 'prueba', 1234, 'prueba@gmail.com', 123232313, 12),
(3, 'usuario', 'prueba2', 'fefe', 1234, 'prueba2@gmail.com', 2323132, 123),
(4, 'usuario', 'prueba2', 'edfe', 1234, 'prueba2@gmail.com', 2323132, 21212),
(5, 'usuario', 'prueba2', 'edfe', 1234, 'prueba2@gmail.com', 123456789, 1234567899),
(6, 'usuario', 'erre', 'wqe', 12, 'prueba@gmail.com', 323232, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id_apartment`),
  ADD KEY `id_apartment_user` (`id_user`),
  ADD KEY `fk_apartment_services` (`id_services`),
  ADD KEY `reserve_id` (`reserve_id`);

--
-- Indices de la tabla `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id_reserve`),
  ADD KEY `FOREIGN KEY` (`id_user`),
  ADD KEY `FOREIGN KEY2` (`id_apartment`);

--
-- Indices de la tabla `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id_season`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- Indices de la tabla `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id_state`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id_apartment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id_reserve` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `season`
--
ALTER TABLE `season`
  MODIFY `id_season` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `state`
--
ALTER TABLE `state`
  MODIFY `id_state` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `fk_apartment_services` FOREIGN KEY (`id_services`) REFERENCES `services` (`id_services`),
  ADD CONSTRAINT `id_apartment_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `reserve_id` FOREIGN KEY (`reserve_id`) REFERENCES `reserve` (`id_reserve`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id_apartment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`id_season`) REFERENCES `apartment` (`id_apartment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`id_state`) REFERENCES `apartment` (`id_apartment`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
