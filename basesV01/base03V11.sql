-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2021 at 07:23 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base03`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `articulo_id` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `pedido_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articulo` (`articulo_id`),
  KEY `fk_pedido` (`pedido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `articulo_id`, `cantidad`, `precio`, `pedido_id`) VALUES
(80, 2, 1, '20.90', 52),
(81, 9, 1, '26.00', 52),
(82, 2, 1, '20.90', 53),
(83, 9, 1, '26.00', 53),
(84, 2, 1, '20.90', 54),
(85, 1, 1, '26.00', 54),
(86, 6, 1, '23.30', 54),
(87, 2, 1, '20.90', 55),
(88, 5, 1, '2.00', 55),
(89, 5, 1, '2.00', 56),
(90, 2, 1, '20.90', 57),
(91, 5, 1, '2.00', 57),
(92, 1, 1, '26.00', 58),
(93, 2, 1, '20.90', 58),
(94, 2, 1, '20.90', 59),
(95, 5, 1, '2.00', 59),
(96, 2, 1, '20.90', 60),
(97, 5, 1, '2.00', 60),
(98, 1, 1, '26.00', 61),
(99, 2, 1, '20.90', 61),
(100, 2, 1, '20.90', 62),
(101, 5, 1, '2.00', 62),
(102, 5, 1, '2.00', 63),
(103, 11, 1, '26.00', 63),
(104, 9, 1, '26.00', 63),
(105, 5, 1, '2.00', 64),
(106, 2, 1, '20.90', 64),
(107, 9, 1, '26.00', 65),
(108, 11, 1, '26.00', 65),
(109, 6, 1, '23.30', 65),
(110, 1, 1, '26.00', 66),
(111, 2, 55, '20.90', 66),
(112, 5, 1, '2.00', 66),
(113, 6, 1, '23.30', 66),
(114, 9, 1, '26.00', 66),
(115, 1, 1, '26.00', 67),
(116, 2, 55, '20.90', 67),
(117, 5, 1, '2.00', 67),
(118, 6, 1, '23.30', 67),
(119, 9, 1, '26.00', 67),
(120, 1, 1, '26.00', 68),
(121, 2, 1, '20.90', 68),
(122, 5, 1, '2.00', 69),
(123, 2, 1, '20.90', 69),
(124, 1, 1, '26.00', 70),
(125, 2, 1, '20.90', 71),
(126, 5, 1, '2.00', 71),
(133, 1, 1, '26.00', 74),
(134, 2, 1, '20.90', 74),
(135, 1, 1, '26.00', 75),
(136, 2, 1, '20.90', 75),
(137, 2, 1, '20.90', 76),
(138, 1, 1, '26.00', 77),
(139, 2, 1, '20.90', 77),
(140, 5, 1, '2.00', 87),
(141, 2, 1, '20.90', 87),
(142, 1, 1, '26.00', 88),
(143, 2, 1, '20.90', 88),
(144, 2, 1, '20.90', 89);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`) VALUES
(52, 1, '2021-09-15 03:34:18'),
(53, 1, '2021-09-15 03:34:26'),
(54, 1, '2021-09-15 03:39:38'),
(55, 1, '2021-09-15 03:44:22'),
(56, 1, '2021-09-15 03:47:15'),
(57, 1, '2021-09-15 05:47:43'),
(58, 1, '2021-09-15 18:01:00'),
(59, 1, '2021-09-15 18:28:00'),
(60, 1, '2021-09-15 18:32:00'),
(61, 1, '2021-09-15 19:44:00'),
(62, 1, '2021-09-15 19:48:00'),
(63, 1, '2021-09-15 20:01:00'),
(64, 1, '2021-09-15 20:15:19'),
(65, 1, '2021-09-15 22:18:34'),
(66, 1, '2021-09-16 18:56:39'),
(67, 1, '2021-09-16 18:56:40'),
(68, 1, '2021-09-16 19:18:36'),
(69, 1, '2021-09-16 19:36:53'),
(70, 1, '2021-09-16 19:43:57'),
(71, 1, '2021-09-16 19:59:40'),
(74, 1, '2021-10-10 02:21:23'),
(75, 1, '2021-10-10 02:30:09'),
(76, 1, '2021-10-10 02:51:34'),
(77, 1, '2021-10-10 03:12:14'),
(78, 1, '2021-10-10 03:23:19'),
(79, 1, '2021-10-10 03:23:23'),
(80, 1, '2021-10-10 03:23:35'),
(81, 1, '2021-10-10 03:51:18'),
(82, 1, '2021-10-10 03:51:39'),
(83, 1, '2021-10-10 03:53:02'),
(84, 1, '2021-10-10 03:54:06'),
(85, 1, '2021-10-10 03:54:16'),
(86, 1, '2021-10-10 03:55:47'),
(87, 1, '2021-10-10 04:36:03'),
(88, 1, '2021-10-10 04:45:18'),
(89, 1, '2021-10-14 21:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_productos` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_productos`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES
(1, 'codigo01editadoh', 'descripcion26editado', '26.00', '2021-09-15', ''),
(2, 'co444444', 'descripcion editada', '20.90', '2013-08-15', ''),
(5, 'cod04', 'descripcion 03', '2.00', '2020-02-28', ''),
(6, 'cod06', 'desc3', '23.30', '2012-12-30', ''),
(9, 'prefijocodigo03', 'descripcion26', '26.00', '2013-12-29', ''),
(11, 'codigo12', 'descripcion26', '26.00', '2013-12-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES
(1, 'juan', '1234'),
(2, 'pedro', '1234'),
(3, 'rodrigo', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_articulo` FOREIGN KEY (`articulo_id`) REFERENCES `productos` (`id_productos`),
  ADD CONSTRAINT `fk_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
