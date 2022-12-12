-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql-5707.dinaserver.com:3306
-- Tiempo de generación: 18-10-2022 a las 08:04:37
-- Versión del servidor: 5.7.40-log
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerob_cajas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_amura`
--

CREATE TABLE `cajas_amura` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cajas_amura`
--

INSERT INTO `cajas_amura` (`id`, `cb_barra`, `cb_fecha`, `cb_cambio`, `cb_efectivo`, `cb_tarjeta`, `cb_total`, `cb_efectivoz`, `cb_tarjetaz`, `cb_totalz`, `cb_diferencia`, `cb_anticipada`, `cb_camareros`, `timestamp`) VALUES
(1, 'Isla1', '2022-10-07', '200', '200', '200', '400', '200', '200', '400', '0', '200', 'sdfa', '2022-10-17 13:17:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_anden`
--

CREATE TABLE `cajas_anden` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_atlantico57`
--

CREATE TABLE `cajas_atlantico57` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_brit`
--

CREATE TABLE `cajas_brit` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_dux`
--

CREATE TABLE `cajas_dux` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_inn`
--

CREATE TABLE `cajas_inn` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_my`
--

CREATE TABLE `cajas_my` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cajas_my`
--

INSERT INTO `cajas_my` (`id`, `cb_barra`, `cb_fecha`, `cb_cambio`, `cb_efectivo`, `cb_tarjeta`, `cb_total`, `cb_efectivoz`, `cb_tarjetaz`, `cb_totalz`, `cb_diferencia`, `cb_anticipada`, `cb_camareros`, `timestamp`) VALUES
(12, 'My2', '2022-10-13', '4000', '5000', '5000', '10000', '4500', '4500', '9000', '1000', '1200', 'Pedro Martínez', '2022-10-17 13:15:09'),
(13, 'Taquilla', '2022-10-20', '1200', '1200', '1200', '2400', '1200', '1200', '2400', '0', '1200', '123123', '2022-10-17 13:15:09'),
(15, 'Taquilla', '2022-10-27', '1200', '1212', '1212', '2424', '1212', '123', '1335', '1089', '1230', 'Pedro Rodríguez\r\nPedro', '2022-10-17 13:15:09'),
(16, 'My1', '2022-10-13', '1222', '1212', '1212', '2424', '1212', '1209', '2421', '3', '12', 'sdfsdfsdfsd', '2022-10-17 13:15:09'),
(17, 'Visionnaire', '2022-10-13', '1200', '2000', '2000', '4000', '1990', '1980', '3970', '30', '1200', 'Pedro', '2022-10-17 13:15:09'),
(18, 'Visionnaire', '2022-09-29', '213', '321', '32', '353', '123', '123', '246', '107', '123', '12312', '2022-10-17 13:15:44'),
(19, 'Visionnaire', '2022-10-06', '12312', '123123', '123', '123246', '12312', '123', '12435', '110811', '123123', '1231', '2022-10-17 13:16:33'),
(20, 'My1', '2022-10-16', '1000', '100', '100', '200', '100', '100', '200', '0', '100', '1000', '2022-10-17 19:46:20'),
(21, 'Reservados', '2022-10-16', '1000', '1000', '1000', '2000', '1000', '1000', '2000', '0', '1000', '1000', '2022-10-17 19:53:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_oceanico`
--

CREATE TABLE `cajas_oceanico` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_pelicano`
--

CREATE TABLE `cajas_pelicano` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cajas_pelicano`
--

INSERT INTO `cajas_pelicano` (`id`, `cb_barra`, `cb_fecha`, `cb_cambio`, `cb_efectivo`, `cb_tarjeta`, `cb_total`, `cb_efectivoz`, `cb_tarjetaz`, `cb_totalz`, `cb_diferencia`, `cb_anticipada`, `cb_camareros`, `timestamp`) VALUES
(1, 'EntradaA', '2022-10-06', '12222', '12222', '12222', '24444', '12212', '122', '12334', '12110', '2212', 'ASD', '2022-10-17 13:18:03'),
(2, 'DerechaA', '2022-10-20', '500', '2000', '2500', '4500', '1990', '2495', '4485', '15', '3000', 'Pedro Rodriguez\r\nPaula', '2022-10-17 13:18:03'),
(3, 'DerechaB', '2022-10-17', '500', '1000', '1000', '2000', '01000', '01000', '2000', '0', '2500', 'G c ', '2022-10-17 13:18:03'),
(4, 'DerechaA', '2022-10-17', '400', '300', '550', '850', '300', '550', '850', '0', '3000', 'Adrián ', '2022-10-17 13:18:03'),
(5, 'DerechaA', '2022-10-20', '400', '2000', '2000', '4000', '400', '400', '800', '3200', '0', 'Guille', '2022-10-17 13:18:03'),
(6, 'EventosB', '2022-10-17', '400', '500', '0300', '800', '0500', '0300', '800', '0', '0', 'Juan\r\nPedro ', '2022-10-17 13:18:03'),
(7, 'DerechaA', '2022-10-17', '400', '2000', '1500', '3500', '2000', '1485', '3485', '15', '0', 'Jesus carames', '2022-10-17 13:18:03'),
(8, 'EntradaB', '2022-10-17', '200', '010000', '020000', '30000', '02000', '030000', '32000', '-2000', '0', 'Pepe', '2022-10-17 13:18:03'),
(9, 'EntradaB', '2022-10-19', '2000', '1000', '0.90', '1000.9', '1000', '0.90', '1000.9', '0', '0', 'Yo', '2022-10-17 13:18:03'),
(10, 'DerechaA', '2022-10-17', '400', '250', '450', '700', '250', '450', '700', '0', '3000', 'X', '2022-10-17 13:18:03'),
(11, 'DerechaB', '2022-10-20', '400', '1000', '01500', '2500', '1015', '1475', '2490', '10', '0', 'Paula Rodríguez', '2022-10-17 13:18:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_pier`
--

CREATE TABLE `cajas_pier` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_cashdro` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cajas_pier`
--

INSERT INTO `cajas_pier` (`id`, `cb_barra`, `cb_fecha`, `cb_cambio`, `cb_efectivo`, `cb_tarjeta`, `cb_total`, `cb_efectivoz`, `cb_tarjetaz`, `cb_cashdro`, `cb_totalz`, `cb_diferencia`, `cb_anticipada`, `cb_camareros`, `timestamp`) VALUES
(1, 'Principal', '2022-10-12', '200', '200', '200', '400', '200', '200', '200', '600', '-200', '200', 'asdfAS', '2022-10-17 13:18:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_playaclub`
--

CREATE TABLE `cajas_playaclub` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas_way`
--

CREATE TABLE `cajas_way` (
  `id` int(11) NOT NULL,
  `cb_barra` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_fecha` date DEFAULT NULL,
  `cb_cambio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cb_efectivo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjeta` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_total` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_efectivoz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_tarjetaz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_totalz` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_diferencia` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_anticipada` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cb_camareros` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hts_uploads`
--

CREATE TABLE `hts_uploads` (
  `id` int(11) NOT NULL,
  `related_id` int(11) DEFAULT NULL,
  `related_name` varchar(50) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(1, 'alex@salapelicano.com', '$2y$10$ekOyMIkMT9Kqk/RSxJi5kO6LGFie977YFSFWKTdlFLFmhfKN2Tobu', NULL, 'alex', 0, 1, 1, 262144, 1665255840, 1666035894, 0),
(5, 'oficina@salapelicano.com', '$2y$10$gpBzomOcTOf3oXTdPAl8oOjYo4kZMpP3s6x.iY6vqfqb.i1E8Qn5G', 'Oficina', 'Oficina', 0, 1, 1, 131072, 1665260124, 1665416661, 0),
(7, 'sandra@gruposaona.net', '$2y$10$UmPnFiMFYuIHF6YD6gvrg.RRx6oNAI6NJS.9yfk5BBtTUt.h8Az.O', 'Sandra Rubio', 'sandrarubio', 0, 1, 1, 131072, 1665415178, 1666024870, 0),
(8, 'mateo@ocionorte.com', '$2y$10$EZecJIfu77tWZubCKq1f8OaH1.5Li10NrozDKPm16S1SqbP.AOfbi', 'Mateo', 'mateo', 0, 1, 1, 131072, 1665657068, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 1, 'alex@salapelicano.com', 'Fncw7jt1hcq759Kf', '$2y$10$ecwUKN8QwVzPES4zdx7C..inMjXo.30iFIirkFDTcZXgn9cpNnDbi', 1665342240);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_remembered`
--

INSERT INTO `users_remembered` (`id`, `user`, `selector`, `token`, `expires`) VALUES
(2, 5, 'z-cFYfmKFGrDy6pIDzvkP0TU', '$2y$10$6IeG4RSHqBrbpRNOL.I97OX0xqJA9tBzJNOF0rZNbS6k4wNFXQZIe', 1696958642),
(3, 1, 'tXBlBSJ0X_dTDcuPaGBYzf8Y', '$2y$10$KCHqmNJqKP63DFKcVFcmhOnTYDIyb/kVvSmlxKAisaOM3/QE80Biq', 1697150341);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('274-qLDRoTiq9TfUTzPcn0IXiPU-GVMwZ6_gj6WpPlg', 74, 1665265373, 1665805373),
('6sErwxkWUDVHZAmtzJFqzGnEkz2YqFJdsMpsicLoW2E', 19, 1665359346, 1665395346),
('7mBbdQaWEP-E-xHU_VLm5N5FXiRUnV7HW42I1HekODs', 499, 1665359346, 1665532146),
('c9hVPDwKtfdU-CwquetX2KkB6cLkwgN73KJgJw7yh_E', 19, 1665970101, 1666006101),
('ejWtPDKvxt-q7LZ3mFjzUoIWKJYzu47igC8Jd9mffFk', 74, 1666000780, 1666540780),
('FRxv4tVlrXFfhRzBNasH8DpvzBcrrQ2P7TUJPOWRcUo', 499, 1665970101, 1666142901),
('I-UNA63JETkZKaTlUsZ1nUSmclZSPFkCURQddbNuXhc', 4, 1665255840, 1665687840),
('lzr0b2kjhcvAutgPGTevstXPNzcZAzGzAzB0r1PUX9E', 499, 1665400794, 1665573594),
('NOYjS4rXhL_mUg6raiGakwamP2DTeUCcLYIC39LcHz0', 74, 1666017712, 1666557712),
('Q9dQl0kOgUMikhHhEXX_glk-KLgx6a8_X8K-PP7GWpo', 74, 1665535939, 1666075939),
('r5Yw-db3EgD7Sf3Omw8_yah7kxbWlmmAeIqEfX34O18', 69.4119, 1665359934, 1665899934),
('rIoXhrM_AC0h7tbXJHeuBYilFdkO-gu2I322xmDj6SA', 74, 1665592741, 1666132741),
('SRJ8_AJ_Tdt8nB-8EmXuPHRZE5pAgL2ZLVUoARZyciM', 74, 1665343161, 1665883161),
('s5KREvK-puo7f3OcGvBuDPG54HLnpXfzsnwhiRSLRPo', 73.0081, 1665401042, 1665941042),
('umHilwblj_IDxmeaja273_EyCR-1j7gfF9ikR9XDtug', 19, 1665843940, 1665879940),
('XHNeQtvzROyOPrft_PNFsWePtoU_Ku2JqP2hEdcuelM', 74, 1666024870, 1666564870);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajas_amura`
--
ALTER TABLE `cajas_amura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_anden`
--
ALTER TABLE `cajas_anden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_atlantico57`
--
ALTER TABLE `cajas_atlantico57`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_brit`
--
ALTER TABLE `cajas_brit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_dux`
--
ALTER TABLE `cajas_dux`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_inn`
--
ALTER TABLE `cajas_inn`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_my`
--
ALTER TABLE `cajas_my`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_oceanico`
--
ALTER TABLE `cajas_oceanico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_pelicano`
--
ALTER TABLE `cajas_pelicano`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_pier`
--
ALTER TABLE `cajas_pier`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_playaclub`
--
ALTER TABLE `cajas_playaclub`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas_way`
--
ALTER TABLE `cajas_way`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hts_uploads`
--
ALTER TABLE `hts_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Indices de la tabla `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajas_amura`
--
ALTER TABLE `cajas_amura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cajas_anden`
--
ALTER TABLE `cajas_anden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_atlantico57`
--
ALTER TABLE `cajas_atlantico57`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_brit`
--
ALTER TABLE `cajas_brit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_dux`
--
ALTER TABLE `cajas_dux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_inn`
--
ALTER TABLE `cajas_inn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_my`
--
ALTER TABLE `cajas_my`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `cajas_oceanico`
--
ALTER TABLE `cajas_oceanico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_pelicano`
--
ALTER TABLE `cajas_pelicano`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cajas_pier`
--
ALTER TABLE `cajas_pier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cajas_playaclub`
--
ALTER TABLE `cajas_playaclub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas_way`
--
ALTER TABLE `cajas_way`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hts_uploads`
--
ALTER TABLE `hts_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
