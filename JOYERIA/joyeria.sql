-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2024 a las 00:01:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Estructura de tabla para la tabla `provedores`

CREATE TABLE `provedores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `TPieza` VARCHAR(100) NOT NULL,
  `Tienda` VARCHAR(100) NOT NULL,
  `Cantidad` INT(11) NOT NULL,  -- Cambio aquí para usar INT en lugar de VARCHAR
  `url` VARCHAR(255) NOT NULL,  -- Cambio aquí para usar VARCHAR en lugar de TEXT
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcado de datos para la tabla `provedores`

INSERT INTO `provedores` (`id`, `TPieza`, `Tienda`, `Cantidad`, `url`) VALUES
(2365, 'Collares', 'La Casa de las Joyas', 5000, ''),  -- Cambio aquí para que `url` sea una cadena vacía
(2366, 'Pulseras', 'Brillo y Elegancia', 6000, '');  -- Igual cambio aquí para `url`

-- AUTO_INCREMENT de la tabla `provedores`
ALTER TABLE `provedores`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

COMMIT;
