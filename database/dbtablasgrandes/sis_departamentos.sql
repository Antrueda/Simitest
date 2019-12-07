-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-10-2019 a las 02:17:58
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel_bk1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sis_departamentos`
--

DROP TABLE IF EXISTS `sis_departamentos`;
CREATE TABLE IF NOT EXISTS `sis_departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sis_pais_id` bigint(20) UNSIGNED DEFAULT NULL,
  `s_departamento` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sis_departamentos_sis_pais_id_foreign` (`sis_pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sis_departamentos`
--

INSERT INTO `sis_departamentos` (`id`, `sis_pais_id`, `s_departamento`) VALUES
(1, 1, 'NO APLICA'),
(2, 52, 'AMAZONAS'),
(3, 52, 'ANTIOQUIA'),
(4, 52, 'ARAUCA'),
(5, 52, 'ATLÁNTICO'),
(6, 52, 'BOLÍVAR'),
(7, 52, 'BOYACÁ'),
(8, 52, 'CALDAS'),
(9, 52, 'CAQUETÁ'),
(10, 52, 'CASANARE'),
(11, 52, 'CAUCA'),
(12, 52, 'CESAR'),
(13, 52, 'CHOCÓ'),
(14, 52, 'CÓRDOBA'),
(15, 52, 'CUNDINAMARCA'),
(16, 52, 'GUAINÍA'),
(17, 52, 'GUAVIARE'),
(18, 52, 'HUILA'),
(19, 52, 'LA GUAJIRA'),
(20, 52, 'MAGDALENA'),
(21, 52, 'META'),
(22, 52, 'NARIÑO'),
(23, 52, 'NORTE DE SANTANDER'),
(24, 52, 'PUTUMAYO'),
(25, 52, 'QUINDÍO'),
(26, 52, 'RISARALDA'),
(27, 52, 'SAN ANDRÉS Y ROVIDENCIA'),
(28, 52, 'SANTANDER'),
(29, 52, 'SUCRE'),
(30, 52, 'TOLIMA'),
(31, 52, 'VALLE DEL CAUCA'),
(32, 52, 'VAUPÉS'),
(33, 52, 'VICHADA');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sis_departamentos`
--
ALTER TABLE `sis_departamentos`
  ADD CONSTRAINT `sis_departamentos_sis_pais_id_foreign` FOREIGN KEY (`sis_pais_id`) REFERENCES `sis_pais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
