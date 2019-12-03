-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 03-12-2019 a las 00:43:59
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `rollinLaravel_db`
--

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `brand_id`, `active`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Monopatiín Eléctrico Razor SX5', 38000, '1', 1, '/img/foto_productos/1.png\r\n', NULL, NULL),
(2, 'Casco Protector Negro', 1600, '1', 1, '/img/foto_productos/2.png\r\n', NULL, NULL),
(3, 'Monopatín Eléctrico \r\nVolmark T2', 40300, NULL, 1, '/img/foto_productos/3.png\r\n', NULL, NULL),
(4, 'Monopatín Eléctrico \r\nVolmark T2', 40300, NULL, 1, '/img/foto_productos/4.png\r\n\r\n', NULL, NULL),
(5, 'Monopatín Eléctrico \r\nRazor SX5', 38600, NULL, 1, '/img/foto_productos/5.png\r\n', NULL, NULL),
(6, 'Casco protector Verde \r\nPOUSPORT', 2100, NULL, 1, '/img/foto_productos/6.png\r\n', NULL, NULL),
(7, 'Monopatín Eléctrico\r\nKoowheel K7', 45900, NULL, 1, NULL, NULL, NULL),
(8, 'Casco Guante Marron\r\nBaseball Line', 2600, NULL, 1, NULL, NULL, NULL),
(9, 'Casco protector Verde \r\nPOUSPORT', 2100, NULL, 1, NULL, NULL, NULL),
(10, 'Monopatín Eléctrico \r\nRazor SX5', 38600, NULL, 1, NULL, NULL, NULL),
(11, 'Casco protector Verde \r\nPOUSPORT', 2100, NULL, 1, NULL, NULL, NULL),
(12, 'Monopatín Eléctrico\r\nKoowheel K7', 45900, NULL, 1, NULL, NULL, NULL),
(13, 'Casco Guante Marron\r\nBaseball Line', 2600, NULL, 1, NULL, NULL, NULL),
(14, 'Casco protector Verde \r\nPOUSPORT', 2100, NULL, 1, NULL, NULL, NULL);
